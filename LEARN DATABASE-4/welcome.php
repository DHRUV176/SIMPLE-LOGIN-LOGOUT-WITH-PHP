<?php
session_start();
include("connection.php");
//error_reporting(0);

 $userprofile=$_SESSION['username'];
 if ($userprofile==true) {
 	
 }
 else
 {
 	header("location:signin.php");
 }
echo "Welcome ".$userprofile."<br><br>";
?>

<a href="logout.php">Logout</a>