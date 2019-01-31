<?php
  include('index.php');

if(isset($_SESSION['login_user'])){
header("location: home.php");
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
<div>
  <h2>Login Form</h2>
</div>
<form action="" method="post">
<label>Username：</label>  
<input id="name" name="username" placeholder="Enter the username" type="text">
<br>
<br>
<label>Password: </label> 
<input id="psw" name="password" placeholder="Enter the password" type="password">
<br>
<br>
<input name="submit" type="submit" value="Login">
<form>
<input type="button" value="Register" onclick="window.location.href='Register.php'"">
</form>
<span><?php echo $error; ?></span>
</form>




</div>
<br>
<br>
<br>
<footer>
Copyright © Coodinating Community Tutoring Efforts
</footer>
</body>