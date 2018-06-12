<?php

include_once("init3.php"); 


function setViewerCounter(){
	$db = connect_database();
	$query = $db->prepare("INSERT INTO viewCounter SET num = '1'");
	$query->execute();
	
}


function setFacebookSharedCounter(){
	$db = connect_database();
	$query = $db->prepare("INSERT INTO fbShareCounter SET num = 1");
	$query->execute();
	$db = null;

}


function setSubscriber($email, $name){

	try{
		$db = connect_database();

		//check for duplication
		$query = $db->prepare("SELECT * FROM subscriber WHERE email=:email");
		$query->bindParam("email", $email,PDO::PARAM_STR);
		$query->execute();
    	$count = $query->rowCount();

		if($count<1)
		{
			$query= $db->prepare("INSERT INTO subscriber(name,email) VALUES (:name,:email)");
			$query->bindParam("email", $email,PDO::PARAM_STR) ;
			$query->bindParam("name", $name,PDO::PARAM_STR) ;
			$query->execute(); 
			//$db = null;

			//return true;
		}
		else
		{
			//$db = null;
			//return false;
		}
	}	 
	catch(PDOException $e) {
		$e->getMessage();
		//$_SESSION['error-message'] = $e;
		//echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}



function getTotalViewerCount(){
	$db = connect_database();
	$query = $db->prepare("SELECT * FROM viewCounter");
	$query->execute();
	$count = $query->rowCount();
	$db = null;

	return $count;

}


function getTodayViewerCount(){
	$db = connect_database();
	$tdate = date("Y-m-d");
	$tdate.=" 00:00:01";
    $query = $db->prepare("SELECT * FROM viewCounter WHERE tdate>=:tdate");
	$query->bindParam("tdate", $tdate,PDO::PARAM_STR);
	$query->execute();
    $count = $query->rowCount();
    //$db = null;
   // return $tdate;
    return $count;

}


function getTotalSubscriber(){
	$db = connect_database();
    $query = $db->prepare("SELECT * FROM subscriber");
	$query->execute();
    $count = $query->rowCount();
   // $db = null;

    return $count;
}


function getSubscriber(){
	$db = connect_database();
    $query = $db->prepare("SELECT * FROM subscriber");
	$query->execute();
    $count = $query->rowCount();
    
    if ($count>0){
		
		$table="";
		$results = $query->fetchAll( PDO::FETCH_ASSOC );
		foreach( $results as $row ){
			$id = $row['ID'];
			$date = $row['tdate'];
			$name = $row['name'];
			$email = $row['email'];
						
			$table.="<tr> <td>$id</td> <td>$date</td> <td>$name</td> <td>$email</td> </tr>";
		    
		}

		$db = null;
		return $table;
	}
}


function setFBSharedCounter(){
	$db = connect_database();
	$query = $db->prepare("UPDATE shareCounter SET num = num + 1 WHERE name = 'facebook'");
	$query->execute();
	$db = null;

}


function setGSharedCounter(){
	$db = connect_database();
	$query = $db->prepare("UPDATE shareCounter SET num = num + 1 WHERE name = 'google'");
	$query->execute();
	$db = null;

}


function setTSharedCounter(){
	$db = connect_database();
	$query = $db->prepare("UPDATE shareCounter SET num = num + 1 WHERE name = 'twitter'");
	$query->execute();
	$db = null;

}


function getFBSharedCounter(){
	$db = connect_database();
    $query = $db->prepare("SELECT num FROM shareCounter WHERE ID=1 ");
	$query->execute();
	$results = $query->fetchAll( PDO::FETCH_ASSOC );
	foreach( $results as $row )
	{
		$num = $row['num'];
	}
	return $num;
}


function getGSharedCounter(){
	$db = connect_database();
    $query = $db->prepare("SELECT num FROM shareCounter WHERE name='google'");
	$query->execute();
    $results = $query->fetchAll( PDO::FETCH_ASSOC );
	foreach( $results as $row )
	{
		$num = $row['num'];
	}
	return $num;
}

function getTSharedCounter(){
	$db = connect_database();
    $query = $db->prepare("SELECT num FROM shareCounter WHERE name='twitter'");
	$query->execute();
	$count = $query;
    $results = $query->fetchAll( PDO::FETCH_ASSOC );
	foreach( $results as $row )
	{
		$num = $row['num'];
	}
	return $num;
}


function getTotalSharedCounter(){
	$query = getTSharedCounter() + getFBSharedCounter() + getGSharedCounter();
	
    return $query;

}



?>