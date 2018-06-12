<?php

/**
*retrieve and format the recent searched keywords
*@return return recent searched keywords in table form
*/
function getRecentSearch()
{
    // token to authenticate the API request.
      $token_auth = "69496b0a76704f1fe4258de87134ecd2";

    // REST API to request keywords for the last month for the idsite=1
    $url = "https://deco3801-team-lit.uqcloud.net/admin/admin/index.php";
    $url .= "?module=API&method=Actions.getSiteSearchKeywords";
    $url .= "&idSite=1&period=month&date=today";
    $url .= "&format=PHP&filter_limit=20";
    $url .= "&token_auth=$token_auth";

    $fetched = file_get_contents($url);
    $content = unserialize($fetched);

    // case error
    if (!$content) {
        print("Error, content fetched = " . $fetched);
    }

    // initialize loop variable and string variable
    $i=0;
    $recentSearch="";

    // loop the  retrieved keyword into table format
    foreach($content as $row){

        $keyword = htmlspecialchars(html_entity_decode(urldecode($row['label']), ENT_QUOTES), ENT_QUOTES);
        $hits = $row['nb_visits'];
        $searchKeyword = "<td><a href='/includes/search.php?resourceType=SLQcollections&search=$keyword&itemType=Allitems&phasing=contain&location=anywhere'>$keyword</a></td>";


        if ($i==0)
            $recentSearch.=("<tr>$searchKeyword");

        $i++;

       if ($i==2 || $i==3)      
        $recentSearch.=("$searchKeyword");
        
        if ($i==4)
        {
            $recentSearch.=("$searchKeyword</tr>");
            $i=0;
        }
    }return $recentSearch;
}       



?>