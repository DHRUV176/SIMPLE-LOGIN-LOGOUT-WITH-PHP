<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "dnp2";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
	//echo "Connection Successfully...";
}
else
{
	die("Error.... Fail Connection !!!.".mysqli_connect_error());
}

 ?>