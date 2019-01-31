<?php
  include 'db_connection.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST'){

$fname = $lname = $username = $password = "";
$fname = $_POST["First_name"];
$lname = $_POST["Last_name"];
$username = $_POST["Username"];
$password = $_POST["Password"];

$sql = "INSERT INTO User (fName, lName, Username, Password)
VALUES ('$fname', '$lame', '$username', '$password')";
mysqli_query($conn,$sql);
  header('location:Login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Tuitor system</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
ul {
 display:flex;  
  list-style:none;
}

</style>
<div class="container">
<header>
<h1>College</h1>
</header>
<div>
<ul>
            <li><a class="active">HOME</a></li>

</ul>
</div>

<h2>Information Form</h2>
<form class="forme" method="post" action="Register.php">
  First name: <br><input type="text" name="First_name">
  <br><br>
  Last name: <br><input type="text" name="Last_name">
  <br><br>
  Username: <br> <input type="text" name="Username">
  <br><br>
  Password: <br><input type="text" name="Password">
  <br><br>
  <input type="submit">
</form>





</div>
<br>
<br>
<br>
<footer>
Copyright © Coodinating Community Tutoring Efforts
</footer>
</body>