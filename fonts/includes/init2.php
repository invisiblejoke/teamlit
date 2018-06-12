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