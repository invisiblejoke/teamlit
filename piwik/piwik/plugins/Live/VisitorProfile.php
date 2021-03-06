<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\Live;

use Exception;
use Piwik\DataTable;
use Piwik\Date;
use Piwik\Metrics\Formatter;
use Piwik\Piwik;
use Piwik\Site;
use Piwik\Plugins\Referrers\API as APIReferrers;

class VisitorProfile
{
    const VISITOR_PROFILE_MAX_VISITS_TO_SHOW = 10;

    protected $profile = array();
    private $siteSearchKeywords = array();
    private $continents = array();
    private $countries = array();
    private $cities = array();
    private $pageGenerationTimeTotal = 0;

    public function __construct($idSite)
    {
        $this->idSite = $idSite;
        $this->isEcommerceEnabled = Site::isEcommerceEnabledFor($this->idSite);
    }

    /**
     * @param $visits
     * @param $visitorId
     * @param $segment
     * @param $numLastVisits
     * @return array
     * @throws Exception
     */
    public function makeVisitorProfile(DataTable $visits, $visitorId, $segment, $numLastVisits)
    {
        $this->initVisitorProfile();

        /** @var DataTable\Row $visit */
        foreach ($visits->getRows() as $visit) {
            ++$this->profile['totalVisits'];

            $this->profile['totalVisitDuration'] += $visit->getColumn('visitDuration');
            $this->profile['totalActions'] += $visit->getColumn('actions');
            $this->profile['totalGoalConversions'] += $visit->getColumn('goalConversions');

            // individual goal conversions are stored in action details
            foreach ($visit->getColumn('actionDetails') as $action) {
                $this->handleIfGoalAction($action);
                $this->handleIfEventAction($action);
                $this->handleIfDownloadAction($action);
                $this->handleIfOutlinkAction($action);
                $this->handleIfSiteSearchAction($action);
                $this->handleIfPageViewAction($action);
                $this->handleIfPageGenerationTime($action);
            }
            $this->handleGeoLocation($visit);
        }

        $this->handleGeoLocationCountries();
        $this->handleGeoLocationContinents();
        $this->handleSiteSearches();
        $this->handleAveragePageGenerationTime();

        $formatter = new Formatter();
        $this->profile['totalVisitDurationPretty'] = $formatter->getPrettyTimeFromSeconds($this->profile['totalVisitDuration'], true);

        $this->handleVisitsSummary($visits);

        // use N most recent visits for last_visits
        $visits->deleteRowsOffset($numLastVisits);

        $this->profile['lastVisits'] = $visits;

        $this->profile['userId'] = $visit->getColumn('userId');
        $this->profile['visitorId'] = $visitorId;
        $this->handleAdjacentVisitorIds($visits, $visitorId, $segment);

        if($this->isEcommerceEnabled()) {
            $this->profile['totalEcommerceRevenue'] = $visit->getColumn('totalEcommerceRevenue');
            $this->profile['totalEcommerceConversions'] = $visit->getColumn('totalEcommerceConversions');
            $this->profile['totalEcommerceItems'] = $visit->getColumn('totalEcommerceItems');
            $this->profile['totalAbandonedCartsRevenue'] = $visit->getColumn('totalAbandonedCartsRevenue');
            $this->profile['totalAbandonedCarts'] = $visit->getColumn('totalAbandonedCarts');
            $this->profile['totalAbandonedCartsItems'] = $visit->getColumn('totalAbandonedCartsItems');
        }

        return $this->profile;
    }

    /**
     * Returns a summary for an important visit. Used to describe the first & last visits of a visitor.
     *
     * @param DataTable\Row $visit
     * @return array
     */
    private function getVisitorProfileVisitSummary($visit)
    {
        $today = Date::today();

        $serverDate = $visit->getColumn('firstActionTimestamp');
        return array(
            'date'            => $serverDate,
            'prettyDate'      => Date::factory($serverDate)->getLocalized(Date::DATE_FORMAT_LONG),
            'daysAgo'         => (int)Date::secondsToDays($today->getTimestamp() - Date::factory($serverDate)->getTimestamp()),
            'referrerType'    => $visit->getColumn('referrerType'),
            'referralSummary' => self::getReferrerSummaryForVisit($visit),
        );
    }


    /**
     * Returns a summary for a visit's referral.
     *
     * @param DataTable\Row $visit
     * @return bool|mixed|string
     */
    public static function getReferrerSummaryForVisit($visit)
    {
        $referrerType = $visit->getColumn('referrerType');
        if ($referrerType === false
            || $referrerType == 'direct'
        ) {
            return Piwik::translate('Referrers_DirectEntry');
        }

        if ($referrerType == 'search') {
            $referrerName = $visit->getColumn('referrerName');

            $keyword = $visit->getColumn('referrerKeyword');
            if ($keyword !== false
                && $keyword != APIReferrers::getKeywordNotDefinedString()
            ) {
                $referrerName .= ' (' . $keyword . ')';
            }
            return $referrerName;
        }

        if ($referrerType == 'campaign') {

            $summary = Piwik::translate('Referrers_ColumnCampaign') . ': ' . $visit->getColumn('referrerName');
            $keyword = $visit->getColumn('referrerKeyword');
            if (!empty($keyword)) {
                $summary .= ' - ' . $keyword;
            }

            return $summary;
        }

        return $visit->getColumn('referrerName');
    }

    private function isEcommerceEnabled()
    {
        return $this->isEcommerceEnabled;
    }

    /**
     * @param $action
     */
    private function handleIfEventAction($action)
    {
        if ($action['type'] != 'event') {
            return;
        }
        $this->profile['totalEvents']++;
    }

    /**
     * @param $action
     */
    private function handleIfDownloadAction($action)
    {
        if ($action['type'] != 'download') {
            return;
        }
        $this->profile['totalDownloads']++;
    }

    /**
     * @param $action
     */
    private function handleIfOutlinkAction($action)
    {
        if ($action['type'] != 'outlink') {
            return;
        }
        $this->profile['totalOutlinks']++;
    }

    /**
     * @param $action
     */
    private function handleIfPageViewAction($action)
    {
        if ($action['type'] != 'action') {
            return;
        }
        $this->profile['totalPageViews']++;
    }

    private function handleIfGoalAction($action)
    {
        if ($action['type'] != 'goal') {
            return;
        }
        $idGoal = $action['goalId'];
        $idGoalKey = 'idgoal=' . $idGoal;

        if (!isset($this->profile['totalConversionsByGoal'][$idGoalKey])) {
            $this->profile['totalConversionsByGoal'][$idGoalKey] = 0;
        }
        ++$this->profile['totalConversionsByGoal'][$idGoalKey];

        if (!empty($action['revenue'])) {
            if (!isset($this->profile['totalRevenueByGoal'][$idGoalKey])) {
                $this->profile['totalRevenueByGoal'][$idGoalKey] = 0;
            }
            $this->profile['totalRevenueByGoal'][$idGoalKey] += $action['revenue'];
        }
    }

    private function handleIfSiteSearchAction($action)
    {
        if (!isset($action['siteSearchKeyword'])) {
            return;
        }
        $keyword = $action['siteSearchKeyword'];

        if (!isset($this->siteSearchKeywords[$keyword])) {
            $this->siteSearchKeywords[$keyword] = 0;
            ++$this->profile['totalSearches'];
        }
        ++$this->siteSearchKeywords[$keyword];
    }

    private function handleGeoLocation(DataTable\Row $visit)
    {
        // realtime map only checks for latitude
        $hasLatitude = $visit->getColumn('latitude') !== false;
        if ($hasLatitude) {
            $this->profile['hasLatLong'] = true;
        }

        $countryCode = $visit->getColumn('countryCode');
        if (!isset($this->countries[$countryCode])) {
            $this->countries[$countryCode] = 0;
        }
        ++$this->countries[$countryCode];

        $continentCode = $visit->getColumn('continentCode');
        if (!isset($this->continents[$continentCode])) {
            $this->continents[$continentCode] = 0;
        }
        ++$this->continents[$continentCode];

        if ($countryCode && !array_key_exists($countryCode, $this->cities)) {
            $this->cities[$countryCode] = array();
        }
        $city = $visit->getColumn('city');
        if (!empty($city)) {
            $this->cities[$countryCode][] = $city;
        }
    }

    private function handleSiteSearches()
    {
        // sort by visit/action
        arsort($this->siteSearchKeywords);

        foreach ($this->siteSearchKeywords as $keyword => $searchCount) {
            $this->profile['searches'][] = array('keyword' => $keyword,
                'searches' => $searchCount);
        }
    }

    private function handleGeoLocationContinents()
    {
        // sort by visit/action
        asort($this->continents);
        foreach ($this->continents as $continentCode => $nbVisits) {
            $this->profile['continents'][] = array('continent' => $continentCode,
                'nb_visits' => $nbVisits,
                'prettyName' => \Piwik\Plugins\UserCountry\continentTranslate($continentCode));
        }
    }

    private function handleGeoLocationCountries()
    {
        // sort by visit/action
        asort($this->countries);

        // transform country/continents/search keywords into something that will look good in XML
        $this->profile['countries'] = $this->profile['continents'] = $this->profile['searches'] = array();

        foreach ($this->countries as $countryCode => $nbVisits) {

            $countryInfo = array('country' => $countryCode,
                'nb_visits' => $nbVisits,
                'flag' => \Piwik\Plugins\UserCountry\getFlagFromCode($countryCode),
                'prettyName' => \Piwik\Plugins\UserCountry\countryTranslate($countryCode));
            if (!empty($this->cities[$countryCode])) {
                $countryInfo['cities'] = array_unique($this->cities[$countryCode]);
            }
            $this->profile['countries'][] = $countryInfo;
        }
    }

    private function initVisitorProfile()
    {
        $this->profile['totalVisits'] = 0;
        $this->profile['totalVisitDuration'] = 0;
        $this->profile['totalActions'] = 0;
        $this->profile['totalEvents'] = 0;
        $this->profile['totalOutlinks'] = 0;
        $this->profile['totalDownloads'] = 0;
        $this->profile['totalSearches'] = 0;
        $this->profile['totalPageViews'] = 0;
        $this->profile['totalPageViewsWithTiming'] = 0;
        $this->profile['totalGoalConversions'] = 0;
        $this->profile['totalConversionsByGoal'] = array();
        $this->profile['hasLatLong'] = false;

        if ($this->isEcommerceEnabled()) {
            $this->profile['totalEcommerceRevenue'] = 0;
            $this->profile['totalEcommerceConversions'] = 0;
            $this->profile['totalEcommerceItems'] = 0;
            $this->profile['totalAbandonedCarts'] = 0;
            $this->profile['totalAbandonedCartsRevenue'] = 0;
            $this->profile['totalAbandonedCartsItems'] = 0;
        }
    }

    private function handleAveragePageGenerationTime()
    {
        if ($this->profile['totalPageViewsWithTiming']) {
            $this->profile['averagePageGenerationTime'] =
                round($this->pageGenerationTimeTotal / (1000 * $this->profile['totalPageViewsWithTiming']), $precision = 3);
        }
    }

    private function handleIfPageGenerationTime($action)
    {
        if (isset($action['generationTimeMilliseconds'])) {
            $this->pageGenerationTimeTotal += $action['generationTimeMilliseconds'];
            ++$this->profile['totalPageViewsWithTiming'];
        }
    }

    /**
     * @param DataTable $visits
     * @param $visitorId
     * @param $segment
     */
    private function handleAdjacentVisitorIds(DataTable $visits, $visitorId, $segment)
    {
        // get visitor IDs that are adjacent to this one in log_visit
        // TODO: make sure order of visitor ids is not changed if a returning visitor visits while the user is
        //       looking at the popup.
        $rows = $visits->getRows();
        $latestVisitTime = reset($rows)->getColumn('lastActionDateTime');

        $model = new Model();
        $this->profile['nextVisitorId'] = $model->queryAdjacentVisitorId($this->idSite, $visitorId, $latestVisitTime, $segment, $getNext = true);
        $this->profile['previousVisitorId'] = $model->queryAdjacentVisitorId($this->idSite, $visitorId, $latestVisitTime, $segment, $getNext = false);
    }

    /**
     * @param DataTable $visits
     */
    private function handleVisitsSummary(DataTable $visits)
    {
        $rows = $visits->getRows();
        $this->profile['firstVisit'] = $this->getVisitorProfileVisitSummary(end($rows));
        $this->profile['lastVisit'] = $this->getVisitorProfileVisitSummary(reset($rows));
        $this->profile['visitsAggregated'] = count($rows);
    }
}