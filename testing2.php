<?php
include("init.php");


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
  $url .= "&format=json&filter_limit=20";
  $url .= "&token_auth=$token_auth";
  $url .= "&expanded=1";

  $fetched = file_get_contents($url);
  $content = json_decode($fetched,true);

  // case error
  if (!$content) 
  {
      print("Error, content fetched = " . $fetched);
    //return ("There is no top search! Try and make some search.");
  }



  //initialize
  $a=0;
  $x=0;
  $slider="";
  $val ="";

  //loop twice
  	foreach($content as $item)
  	{
  		$filter = $item['label'];
		if ($filter == "includes")
		{

			$val.= "this is includes ";
			foreach($item['subtable'] as $row)
  			{	
  				//$val.= $row['label'];
  				//$val.= "////";
  				
				//$label = $item['subtable'][$x]['label'];
				
				$label = $row['label'];
			  $labelCount = strlen($label);
			  	if ($labelCount > 24) 
			  	{
		  			$labelFilter = substr($label, 0, 24);
		  			if($labelFilter == "bookDetails.php?page=id=")
		  			{
		  				//$val.= $label;
		  				//$val.= "-----";
		  				preg_match('/page=id=(.*?)&/', $label, $ID1);
              
		  				$ID=$ID1[1];
             // $val.=$ID;


		  				//try n to see where is the url
		  				$url = $row['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['url'];
		  				if($url == null || $url ==""){
		  					$url = $row['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['url'];
		  				}if($url == null || $url ==""){
		  					$url = $row['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['url'];
		  				}if($url == null || $url ==""){
		  					$url = $row['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['url'];
		  				}
		  				//$val.= $url;
		  				
		  				//$url = $content[$a]['subtable'][$x]['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['url'];
						$data=getInfo($ID);
						$title= $data[0];
						$author= $data[1];
						$link= $data[2];
						$x=$x+1;

						$slider.=("<div class='sliderauthor'><a href='$url'><img src='$link' class='mySlides' style='width:150px;height:200px;'><h2 style='margin:0px; padding:0px;'>$x</h2><p>$title<br><small>$author</small></p></a></div>");



            
			  		}	
				}
				
			}
		}else{
			$val.= "this is not includes ";
		}
	}
	//if($slider ="")
	//{
	//	return ("There is no top search! Try and make some search.");
	//}
	//return $slider;
  

  

/*
$filter = $content['0']['label'];
$label = $content[$a]['subtable'][$x]['label'];
$label = $content['0']['subtable']['0']['label'];
$url = $content[$a]['subtable'][$x]['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['url'];
$url = $content['0']['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['subtable']['0']['url'];
*/
//echo($val);
echo($slider);
}




function getInfo($ID)
{

	$IDcode =  preg_replace('/[0-9]+/', '', $ID);

	switch ($IDcode)
    {
        case 'ICB': 
        	$database = "Info_collections_Books";
            break;
        case 'ICDT':
        	$database = "Info_collections_DatabaseTitle";
        	break;
        case 'ICEB': 
        	$database = "Info_collections_ebooks";
        	break;
        case 'ICWT':
        	$database = "Info_collections_Website_Title";
        	break;
        case 'OAB':
        	$database = "OA_collections_Books";
        	break;
        case 'OADT':
        	$database = "OA_collections_DatabaseTitle";
        	break;
        case 'OAEB':
        	$database = "OA_collections_ebooks";
        	break;
        case 'OAI':
          $database = "OA_collections_Images";
          break;
        case 'OAWT':
        	$database = "OA_collections_Website_Title";
        	break;
        case 'SLQB': 
        	$database = "SLQ_collections_Books";
        	break;
        case 'SLQDT': 
          $database = "SLQ_collections_DatabaseTitle";
          break;
        case 'SLQEB': #
            $database = "SLQ_collections_ebooks";
            break;
        case 'SLQI': #
        	$database = "SLQ_collections_Images";
        	break;	
        case 'SLQTW':
        	$database = "SLQ_collections_Website_Title";
        	break;
        default;
        	$database = "Info_collections_Books";
        break;
    }

	$db = connect_database();
    $query = $db->prepare("SELECT Title, Author, Link FROM $database WHERE ID like :ID");
    $query->bindParam("ID", $ID,PDO::PARAM_STR);
    $query->execute();
    $data=$query->fetch(PDO::FETCH_OBJ);
	//if ( !$data->count() )
	if(!($data))
    {  
        return "nonexist";     
    }
    else
    {
		try 
		{
			$Title =  $data->Title;
	       	$Author = $data->Author;
	       	$Link = $data->Link;           	
        }
    	catch (Exception $e) 
       	{
          return 'error'; 
       	} 
	}return array($Title, $Author, $Link);
}


?>




