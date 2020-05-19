<?php 
session_start();
 include("connection.php");
 error_reporting(0);
?>

 <h1><center>SIGN IN</center></h1>
 <form action="" method="POST">
 	
 	<label>User Name</label>
 	<input type="text" name="user_name"><br><br>
     
    <label>Password</label>
 	<input type="password" name="password"><br><br>

 	<input type="submit" name="signin" value="Sign In">

 </form>

<?php 
//&emsp space statement in html
 if(isset($_POST['signin']))
  {
    $user = $_POST['user_name'];
    //echo $user;
    $pwd = $_POST['password'];
    //$user = mysql_real_escape_string($user);
    //echo $user;
    $query = "SELECT * FROM login_data_ WHERE username='$user' && password='$pwd' ";

    $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);

    if ($total==1) 
    {
    	$_SESSION['username'] = $user;
        header('location:welcome.php');
        //echo "Welcome ".$_SESSION['username'];
    }
    else
    {
    	echo "Uncessfully Login";
    }
  }

?>
