<?php

include("functions.php");

$name=$_POST['first_name'];
$email=$_POST['subscriber_email'];
setSubscriber($email, $name);

$url=BASE_URL.'index.php';
header("Location: $url"); // Page redirecting to index.html


?>