<?php	

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
			
			
?>
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
        <link href="../css/bookdetails.css" rel="stylesheet">
        <link href="../css/owl.carousel.min.css" rel="stylesheet">
        <link href="../css/owl.theme.default.min.css" rel="stylesheet">
        <script src="../js/owl.carousel.min.js"></script>
		
		<!-- CSS -->
         <!--  <style>
            #RsBody table td{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
          }

          li a{
            display:block;
            color:black;
            text-align:center;
            padding:14px 16px;
            text-decoration:none;
            border-right:1px solid #000000;
          }

          li a:hover{
            background-color:#DEB887;
          }

          .active{
            background-color:#DEB887;
          }
          </style>
 -->
          <?php
          include '../ptrack.php';
?>

    </head>
    <body>
	
	<!-- PHP Function to get the data from search.php page -->
	<?php
	include'../userHeaderMenu_nostyle.php';	
?>


		<!-- Div for the description Table -->
		
          <div id="frame">
            <div id="bookNavBar">
              <ul>
                <li style="float:left;"><a class="active" href="#home">Details</a></li>
                <li style="float:left;"><a href="#">Add comments/tag</a></li>
                <li style="float:left;"><a href="#">More like this</a></li>
              </ul>
            </div>
			
<?php
$image = $_GET['image'];
?>
            <div id="bookDetailsFrame">
            <div id="bookImageDiv">
            <a href='#'><img src= <?php echo "{$image}";?> height='160px' width='160px'></img></a>
            </div>
            <div id="bookDetails">
			
<?php	

			// PHP Get Function to pass the data from search.php page same with $image = $_GET['image'];
			
			$title = $_GET['title'];
			$id = $_GET['id'];
			$author = $_GET['author'];
			$year = $_GET['year'];
			
			$subjects = $_GET['subjects'];
			$description = $_GET['description'];
			$notes = $_GET['notes'];
			$record = $_GET['record'];		
					


                  echo "<h4>Title :  {$title} </h4>" ;
                  echo "<h4>Author :   {$author} </h4>";
                  echo "<h4>Subjects :  {$subjects} </h4>";
                  echo "<h4>Year :  {$year} </h4>";
                  echo "<h4>Description:   {$description} </h4>";
                  echo "<h4>Notes :  {$notes} </h4>";
                  echo "<h4>Record number:  {$record} </h4>";
?>
            </div>:

            </div>:

          </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/java.js"></script>    
	</body>
	
</html>

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
</script>
