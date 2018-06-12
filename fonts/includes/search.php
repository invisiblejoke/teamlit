

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
		    include'PiwikTracking.php';
		    session_start();
		  ?>
    </head>
    <body>
      <?php
	  //Include the header of every page

      include'../userHeaderMenu_nostyle.php';

      ?>


		<!-- Div for the left column of the table -->

        <div>
          <div id="refineResults">

            <h3>Refine search results</h3>
            <h4>Show only</h4>
            <a href="#">On shelf</a><br>
            <a href="#">Online Resources</a><br>
            <a href="#">Peer-reviewed Journals</a><br>
            <h4>New Records</h4>
            <a href="#">New From Last Week</a><br>
            <a href="#">New From Last Month</a>
            <a href="#">New From Last 3 Months</a>
            <h4>Resource type</h4>
            <a href="#">Articles</a><br>
            <a href="#">Newspaper Articles</a><br>
            <a href="#">Reviews</a><br>
            <a href="#">eBooks</a><br>
            <h4>Language</h4>
            <a href="#">English</a><br>
            <a href="#">French</a><br>
            <a href="#">Spanish</a><br>
            <a href="#">German</a><br>


          </div>

           <div id="refineBar">
            <button onclick="myFunction()" class="dropbtn">Refine my search results<span style="float:right">&#9660;</span></button>
            <div id="myDropdown" class="dropdown-content">
              <span>Show only</span>
              <a href="#">On shelf</a><br>
              <a href="#">Online Resources</a><br>
              <a href="#">Peer-reviewed Journals</a><br>
              <span>New Records</span>
              <a href="#">New From Last Week</a><br>
              <a href="#">New From Last Month</a>
              <a href="#">New From Last 3 Months</a>
              <span>Resource type</span>
              <a href="#">Articles</a><br>
              <a href="#">Newspaper Articles</a><br>
              <a href="#">Reviews</a><br>
              <a href="#">eBooks</a><br>
              <span>Language</span>
              <a href="#">English</a><br>
              <a href="#">French</a><br>
              <a href="#">Spanish</a><br>
              <a href="#">German</a><br>
            </div>
          </div>

		<!-- Div for the right column of the table -->

          <div>
            <div id="resultColumn">

                <h3 style="background-color:#e0e0e0;padding-left:5px;padding-top:5px;
                padding-bottom:5px;">Results :</h3>


              <?php

			//Variables for every connection details

			$servername = "localhost";
			$username = "pma";
			$password = "Serene2metric&Bosom";
			$dbname = "One_State_Library";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

	session_start();


	// Function to get the data from the database according to the option that the user has chosen

$output='';
if(isset($_GET['search'])){
    $searchkey= $_GET['search'];
    $searchkey=preg_replace("#[^0-9 a-z]#i", "", $searchkey);


	if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_images WHERE Title LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM OA_collections_images WHERE Title LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Title LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "inthetitle"){
		$sqlcommand = "(SELECT * FROM Info_collections_images WHERE Title LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM OA_collections_images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "(SELECT * FROM Info_collections_images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_images WHERE Author LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM OA_collections_images WHERE Author LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Author LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "asauthorcreator"){
		$sqlcommand = "(SELECT * FROM Info_collections_images WHERE Author LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_Books WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_ebooks WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM SLQ_collections_images WHERE Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_Books WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_ebooks WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM OA_collections_images WHERE Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Books" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_Books WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "ebooks" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_ebooks WHERE Subjects LIKE '%$searchkey%')";
	} else if($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Images" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "insubject"){
		$sqlcommand = "(SELECT * FROM Info_collections_images WHERE Subjects LIKE '%$searchkey%')";
	} else if ($_GET['resourceType'] == "SLQcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "SELECT DISTINCT * FROM SLQ_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%' UNION SELECT DISTINCT * FROM SLQ_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%' UNION SELECT DISTINCT * FROM SLQ_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%'";
	} else if ($_GET['resourceType'] == "Openaccesscollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "SELECT * FROM OA_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%' UNION SELECT * FROM OA_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%' UNION SELECT * FROM OA_collections_images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%'";
	} else if ($_GET['resourceType'] == "Informationcollections" AND $_GET['itemType'] == "Allitems" AND $_GET['phasing'] == "contain" AND $_GET['location'] == "anywhere"){
		$sqlcommand = "SELECT DISTINCT * FROM Info_collections_Books WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%' UNION SELECT DISTINCT * FROM Info_collections_Images WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%' UNION SELECT DISTINCT * FROM Info_collections_ebooks WHERE Title LIKE '%$searchkey%' OR Author LIKE '%$searchkey%' OR Subjects LIKE '%$searchkey%'";
	}


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
                  <img src="'.$image.'" style="height:160px;width:160px"></img>
                </div>
                <div class="resultRowDetails">
				<h3 style="line-height:inherit"> <a href="bookDetails.php?page='.$str.'">'.$title.' </a></h3>
				<h4>'.$author.'</h4>
				<h5>'.$year.'</h5>
				</div>
				</div>';


			print $output;

        }
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
