

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>One Search Brisbane State Library</title>

        <!-- Bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/owl.carousel.min.css" rel="stylesheet">
        <link href="../css/owl.theme.default.min.css" rel="stylesheet">
        <script src="../js/owl.carousel.min.js"></script>
		<link href="../css/searchResult.css" rel="stylesheet">

		<!-- CSS -->
          <style>
            #RsBody table td{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
          }
          </style>
          <?php
		    include_once'init2.php';
		    include '../ptrack.php';
		  //  include'../PiwikTracking.php';

		    session_start();
		  ?>
    </head>
    <body>
      <?php
	  //Include the header of every page

      include'../userHeaderMenu_nostyle.php';

      ?>

		<!-- Div for the right column of the table -->

          <div>
            <div id="resultColumn">

                <h3 style="background-color:#e0e0e0;padding-left:5px;padding-top:5px;
                padding-bottom:5px;">Results :</h3>


              <?php

			//Variables for every connection details

			include_once 'init2.php';

	session_start();


	// Function to get the data from the database according to the option that the user has chosen

$output='';
if(isset($_GET['search'])){
    $searchkey= $_GET['search'];
    $searchkey=preg_replace("#[^0-9  a-z/\-]#i", "", $searchkey);
	$searchkey=ltrim($searchkey);
	//IF statement to get data from the database
	
	//phasing = contain query words
	
	//location TITLE
	
	//SLQcollections
	if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%')";
	
	//informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%')";
		
		
	//location ANYWHERE
	
	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
		
	//informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
		
	//location AUTHOR

	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Author LIKE '%$searchkey%')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Author LIKE '%$searchkey%')";
		
	//Informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Author LIKE '%$searchkey%')";
		
	//location Subjects
	
	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Subjects LIKE '%$searchkey%')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Subjects LIKE '%$searchkey%')";
		
	//Informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Subjects LIKE '%$searchkey%')";
	
	//phasing EXACT QUERY WORDS
	
	//location ANYWHERE
	
	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
		
	//informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
		
	//location AUTHOR

	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Author = '$searchkey')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Author = '$searchkey')";
		
	//Informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Author = '$searchkey')";
		
	//location Subjects
	
	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Subjects = '$searchkey')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Subjects = '$searchkey')";
		
	//Informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Subjects = '$searchkey')";
		
	//phasing EXACT QUERY WORDS
	
	//location ANYWHERE
	
	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
		
	//informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
		
	//location AUTHOR

	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Author = '$searchkey')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Author = '$searchkey')";
		
	//Informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Author = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Author = '$searchkey')";
		
	//location Subjects
	
	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Subjects = '$searchkey')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Subjects = '$searchkey')";
		
	//Informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Subjects = '$searchkey')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Subjects = '$searchkey')";
		
	//phasing STARTS WITH
	
	//location TITLE
	
	//SLQcollections
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Title LIKE '$searchkey%')";
	// } else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
	//	$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Title LIKE '$searchkey%')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Title LIKE '$searchkey%')";
	
	//informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Title LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Title LIKE '$searchkey%')";
		
		
	//location ANYWHERE
	
	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
		
	//informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
		
	//location AUTHOR

	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Author LIKE '$searchkey%')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Author LIKE '$searchkey%')";
		
	//Informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Author LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Author LIKE '$searchkey%')";
		
	//location Subjects
	
	//SLQcollections
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Images WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Website_Title WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_DatabaseTitle WHERE Subjects LIKE '$searchkey%')";
		
	//Openaccesscollections
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Images WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Website_Title WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_DatabaseTitle WHERE Subjects LIKE '$searchkey%')";
		
	//Informationcollections
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "eBooks" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Images WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Websitetitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Website_Title WHERE Subjects LIKE '$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "DatabaseTitles" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_DatabaseTitle WHERE Subjects LIKE '$searchkey%')";
		
		
	//All items (SLQcollections, Informationcollections, Openaccesscollections)
	
	//location anywhere
	
	//phasing contain
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Title WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Website_Title WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Website_Title WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	
	
	//phasing EXACT PHRASE
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseTitle WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey')";
	
	
	//phasing STARTS WITH
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Title WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseTitle WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Website_Title WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseTitle WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Website_Title WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseTitle WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%')";
	
	
	//location title
	
	//phasing contain
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Title WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Website_Title WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Website_Title WHERE Title LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseTitle WHERE Title LIKE '%$searchkey%')";
	
	
	//phasing EXACT PHRASE
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Title WHERE Title = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseTitle WHERE Title = '$searchkey')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_Website_Title WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseTitle WHERE Title = '$searchkey')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_Website_Title WHERE Title = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseTitle WHERE Title = '$searchkey')";
	
	
	//phasing STARTS WITH
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Title WHERE Title LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseTitle WHERE Title LIKE '$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Website_Title WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseTitle WHERE Title LIKE '$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Website_Title WHERE Title LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseTitle WHERE Title LIKE '$searchkey%')";
	
	
	//location AUTHOR
	
	//phasing contain
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Author WHERE Author LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseAuthor WHERE Author LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Website_Author WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseAuthor WHERE Author LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Website_Author WHERE Author LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseAuthor WHERE Author LIKE '%$searchkey%')";
	
	
	//phasing EXACT PHRASE
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Author WHERE Author = '$searchkey' OR Author = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseAuthor WHERE Author = '$searchkey')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_Website_Author WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseAuthor WHERE Author = '$searchkey')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_Website_Author WHERE Author = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseAuthor WHERE Author = '$searchkey')";
	
	
	//phasing STARTS WITH
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Author WHERE Author LIKE '$searchkey%' OR Author LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseAuthor WHERE Author LIKE '$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Website_Author WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseAuthor WHERE Author LIKE '$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Website_Author WHERE Author LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseAuthor WHERE Author LIKE '$searchkey%')";
	
	
	//location Subjects
	
	//phasing CONTAIN
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Subjects WHERE Subjects LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseSubjects WHERE Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Website_Subjects WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseSubjects WHERE Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Website_Subjects WHERE Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseSubjects WHERE Subjects LIKE '%$searchkey%')";
	
	
	//phasing EXACT PHRASE
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Subjects WHERE Subjects = '$searchkey' OR Subjects = '$searchkey' OR Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseSubjects WHERE Subjects = '$searchkey')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_Website_Subjects WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseSubjects WHERE Subjects = '$searchkey')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "exactphrase" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_Website_Subjects WHERE Subjects = '$searchkey') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseSubjects WHERE Subjects = '$searchkey')";
	
	
	//phasing STARTS WITH
	
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Website_Subjects WHERE Subjects LIKE '$searchkey%' OR Subjects LIKE '$searchkey%' OR Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_DatabaseSubjects WHERE Subjects LIKE '$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM OA_collections_Books WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Images WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_ebooks WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_Website_Subjects WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM OA_collections_DatabaseSubjects WHERE Subjects LIKE '$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "startswith" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Website_Subjects WHERE Subjects LIKE '$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_DatabaseSubjects WHERE Subjects LIKE '$searchkey%')";
	}
	
	
	//} else if ($_GET['resourceType'] == "" AND $_GET['itemType'] == "" AND $_GET['phasing'] == "" AND $_GET['location'] == ""){
		//$sqlcommand = "(SELECT DISTINCT * FROM SLQ_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	//} else if ($_GET['resourceType'] == "" AND $_GET['itemType'] == "" AND $_GET['phasing'] == "" AND $_GET['location'] == ""){
		//$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT * FROM OA_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT * FROM OA_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	//} else if ($_GET['resourceType'] == "" AND $_GET['itemType'] == "" AND $_GET['phasing'] == "" AND $_GET['location'] == ""){
		//$sqlcommand = "(SELECT DISTINCT * FROM Info_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%') UNION (SELECT DISTINCT * FROM Info_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	//}


    $query = mysqli_query($conn,$sqlcommand) or die("Could not search!");
    $count = mysqli_num_rows($query);

	// Function to display the output
	
	
    if($count == 0){
        $output="There was no search result!";
		print $output;
    }
    else{
        while($row=mysqli_fetch_array($query)){
			$title = $row['Title'];
			$id = $row['ID'];
			$author = $row['Author'];
			$year = $row['Date'];
			$image = $row['Link'];
			$subjects = $row['Subjects'];
			$description = $row['Description'];
			$notes = $row['Notes'];
			$record = $row['Record_num'];
			$str="id={$id}&title={$title}&author={$author}&year={$year}&image={$image}&subjects={$subjects}&description={$description}&notes={$notes}&record={$record}";

             $output .='<div class="resultRow">
                <div class="resultRowImage">
                  <img src="'.$image.'"></img>
                </div>
                <div class="resultRowDetails">
				<h3 style="line-height:inherit"> <a href="bookDetails.php?page='.$str.'">'.$title.' </a></h3>
				<h4>'.$author.'</h4>
				<h5>'.$year.'</h5>
				</div>
				</div>';


			

        }
		print $output;
    }
}


?>

               <!-- <h4>Pages <a href="#">1 2 3 ... 788 -></a> </h4> -->

              </div>

            </div>
          </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/java.js"></script>
    </body>
</html>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
    $(document).ready(function(){
      $("#owl-demo").owlCarousel({
                navigation : true, // Show next and prev buttons
              slideSpeed : 300,
              paginationSpeed : 400,
              items:1,
              singleItem:true

              });
    });

	$("#myTable").on("click", "h3", function(e){
      // get the value
    var value = $(this).find('h3:first').text();
    // redirect the user with the value as a GET variable
    window.location = 'bookDetails.php?page=' + value;


<!--	jQuery(document).ready(function($) { -->
 <!--   $(".clickable-row").click(function() { -->
 <!--       window.location = $(this).data("href"); -->
<!--    }); -->
<!--});-->

<!--$('a[href]').on("click", function() { -->
<!--	var bookClicked = $(this).attr('id'); -->
<!--	window.localStorage.setItem("Title", bookClicked); -->
<!--	window.location.href = 'bookkDetails.php?company=' + bookClicked; -->
<!--});  -->
</script>
