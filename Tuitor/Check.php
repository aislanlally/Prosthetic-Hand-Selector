<?php 
  include 'db_connection.php';
  session_start();
  $user = $_SESSION['login_user'];
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

.txt{
color:white;
font-size: 14px;
padding-top: 50px;
padding-left: 100px;
}
.txt2{
color:white;
font-size: 14px;
padding-top: 50px;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    
}
th, td {
    padding: 5px;
    color:white;
}

</style>
<div class ="container">
<header>
<h1>College</h1>
</header>

<ul>
            <li><a  href="home.php">HOME</a></li>
             <li class="dropdown" >
              <a class="active" href="Schedule.php" class="dropbtn">Schedule</a>    
              </li>>       

            <li><a  href="Classs.php" >Classes</a></li>
<!--             <li><form action="welcome.php" method="post">
              <div>
               <label class="txt"><b>Username</b></label>
               <input type="text" placeholder="Enter Username" name="name" required>

               <label class="txt2"><b>Password</b></label>
               <input  type="password" placeholder="Enter Password" name="psw" required>
                
               <button type="submit">Login</button>
               <button type="submit">Register</button>
               <input type="checkbox" checked="checked"><font color="white" size= 2 px>Remember me</font>
              </div>
              </form>
              </li> -->
            <li><b id="logout" class="txt">Welcome : <i><?php echo $user; ?></i></b></li>
            <li><<b id="logout"><a href="Logout.php">Log Out</a></b></li>
        </ul>
       
</div>
<h3 align="center"><a></a>Your Appointment<a></a></h3>
<br>
<table align="center">
	<tr>
		<td>Tuitor Name</td>
		<td>Class</td>
    <td>Date</td>
    <td>Description</td>
	</tr>

	
	<?php

  include 'db_connection.php';
$sql = "SELECT Tuitor_name, Subject, Datee, Description, id FROM Student";
$result = mysqli_query($conn,$sql);

if(isset($_GET['del_task'])) {
  $id = $_GET['del_task'];
  $query="SELECT * FROM Student WHERE id = $id";
  $res = mysqli_query($conn,$query);
  if ($res->num_rows > 0) {
    while($roww = $res->fetch_assoc()) {
      $Tuitor_name=$roww['Tuitor_name'];
      $Subject=$roww['Subject'];
      $Datee=$roww['Datee'];
      $Description=$roww['Description'];
    }
    }
  mysqli_query($conn,"INSERT INTO Time_shedule(Tuitor_name, Subject, Datee, Description) VALUES ('$Tuitor_name','$Subject','$Datee','$Description')");
  mysqli_query($conn,"DELETE FROM Student WHERE id = $id");
  header('location:Check.php');
}
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {?>
        <tr>
                  <td><?php echo $row['Tuitor_name'];?></td>
                  <td><?php echo $row['Subject'];?></td>
                  <td><?php echo $row['Datee'];?></td>
                  <td><?php echo $row['Description'];?></td>
        
            
        <td><a href='Check.php?del_task=<?php echo $row['id'];?>'>Delete</a></td>
        </tr>
    <?php }
} else {
    echo "0 results";
}
$conn->close();
   ?>
 </table>


<br>
<br>
<br>
<footer>
Copyright © Coodinating Community Tutoring Efforts
</footer>
</body>
</html>