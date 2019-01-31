<?php
  include 'db_connection.php';
session_start();
$error='';
if(isset($_POST["submit"])){
	if(empty($_POST['username']) || empty($_POST['password'])){
	$error = "Username or Password is invalid";
	}
	else{
	$username = $_POST['username'];
	$password = $_POST['password'];
   $sql = "SELECT * FROM User WHERE Password = '$password' AND Username = '$username'";
   $result = mysqli_query($conn,$sql);
   $row = $result->fetch_assoc();
   $rows = mysqli_num_rows($result);
   if($rows == 1)
   {
   	$_SESSION['login_user'] = $row['fName'];
   	header("location: home.php");
   }
   else{
   	$error = "Username or Password is invalid";
   }
   mysqli_close($conn);
}
}
?>