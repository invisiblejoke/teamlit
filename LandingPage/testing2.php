<?php
require_once "uq/auth.php";
auth_require();
//$_SERVER['HTTP_X_UQ_USER'];
include("functions.php");
echo "hi";

setViewerCounter();
//setFacebookSharedCounter();
//setGoogleSharedCounter();
//setTwitterSharedCounter();
//setSubscriber("qq.gmail.com", "qq");
//$t=getTotalViewerCount();
//$t=getTodayViewerCount();
//$t=getFacebookSharedCounter();
//$t=getGoogleSharedCounter();
//$t=getTwitterSharedCounter();
//$t=getTotalSharedCounter();
//$t=getTotalSubscriber();
//$t=getSubscriber();
//echo $t;

?>