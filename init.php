<?php

/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pma');
define('DB_PASSWORD', 'Serene2metric&Bosom');
define('DB_DATABASE', 'One_State_Library');
define("BASE_URL", "https://deco3801-team-lit.uqcloud.net/");

/* timezone setting*/
date_default_timezone_set('Australia/Brisbane');


/**
 * Makes a database connection
 * @return PDO The connection to the database
 */
function connect_database()
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	try {
		$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$dbConnection->exec("set names utf8");
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbConnection;
	}
	catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
		$url=BASE_URL.'databaseError.php';
		header("Location: $url");
	}

}





?>