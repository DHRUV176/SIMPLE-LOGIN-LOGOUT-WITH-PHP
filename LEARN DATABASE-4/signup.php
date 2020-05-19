<?php 
session_start();
include("connection.php");
error_reporting(0);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sign Up</title>
 </head>
 <body>
 <h1><center>SIGN UP</center></h1>
 <form action="" method="POST">
 	
 	<label>First Name</label>
 	<input type="text" name="f_name"><br><br>

 	<label>Last Name</label>
 	<input type="text" name="l_name"><br><br>

 	<label>User Name</label>
 	<input type="text" name="user_name"><br><br>

 	<label>Password</label>
 	<input type="password" name="password"><br><br>

 	<input type="submit" name="signup" value="Sign Up">
 </form>

 <?php

 if ($_POST['signup']) {


    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $user =  $_POST['user_name'];
    $pwd =   $_POST['password'];
      if ($fname!="" && $lname=!"" && $user!="" && $pwd!="") {
      	$query = "INSERT INTO login_data_ VALUES('fname','$lname','$user','$pwd')";

        echo $lname;
        echo $fname;
        echo $user;
        echo $pwd;

      	$data = mysqli_query($conn,$query);
          if($data)
          {
              echo "<font color='green'>Sign Up SUCCESSFUL ...";
             // header('location:signin.php');
              echo $lname;
          }
      }
      else
      {
    	echo "<br><br>"."<font color='red'> !!! ALL FIELD ARE REQUIRED !!!";
      }
  }

  echo "<br><br>"."<font color='green'>Already?<a href='signin.php'>Sign Up</a>";

 ?>
 
 </body>
 </html>