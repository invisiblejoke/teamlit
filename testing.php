<?php
//include("init.php");


getTopSearch();

function getTopSearch()
{
  // token to authenticate the API request.
  //$token_auth = "d9e65f761e654c7dbd0e14e7ee82a0af";
  //$token_auth = "b066d0b3dd53b969a3bd837f9a32593f";
    $token_auth = "69496b0a76704f1fe4258de87134ecd2";

  // REST API to request keywords for the last month for the idsite=1
  $url = "https://deco3801-team-lit.uqcloud.net/admin/admin/index.php";
  $url .= "?module=API&method=Actions.getPageUrlsFollowingSiteSearch";
  $url .= "&idSite=1&period=month&date=today";
  $url .= "&format=PHP&filter_limit=20";
  $url .= "&token_auth=$token_auth";
  $url .= "&expanded=1";


  $fetched = file_get_contents($url);
  $content = unserialize($fetched);

  // case error
  if (!$content) {
      print("Error, content fetched = " . $fetched);
    //return ("There is no top search! Try and make some search.");
  }

  //print("<h1>Resource ID for the last week</h1>\n");
  print_r($content);
    


}



?>




