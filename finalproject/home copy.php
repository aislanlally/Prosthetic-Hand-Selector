<!DOCTYPE html>
<html>
<head>
  <title>Sunrise Sports selection </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
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

</style>
<div class ="container">
<header>
<h1>College</h1>
</header>

<!--
<img class="image1" src="Image/back1.jpg" alt="header">
            <div class="title">Sunrise sports goods
            </div>
            -->
<ul>
            <li><a class="active"  href="home.php">HOME</a></li>
             <li class="dropdown" >
              <a href="javascript:void(0)" class="dropbtn">Schedule</a>           
              <div class="dropdown-content">
                  <a href="Productpage.php">MEN's</a>
                  <a href="women.php">WOMEN's</a>
                  <a href="outdoor.php">OUT DOOR</a>
               </div>
               </li>
            <!--<li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Our selling</a>
            <div class="dropdown-content">
               <a href="Productpage.php">basketball</a>
               <a href="Productpage.php">bycle</a>
               <a href="Productpage.php">backpack</a>
               </div>
             </li>
             -->
            <!--<li><a href="Productpage.php" ><b>our selling</b></a></li>-->

            <li><a href="Aboutpage.php" >Classes</a></li>
            <li><a href="Contactpage.php" >Tutoring</a></li>
            <li><form action="welcome.php" method="post">
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
              </li>
        </ul>
       


<div class="img">
  <a target="_blank" href="Image/Home.jpg">
    <img src="Image/Home.jpg" alt="sports1" width=100% height=80%>
<!--     <a class = "women" href="women.php"><button class="button button1"> Gifts for women</button>
    </a>
    <a class = "outdoor" href="outdoor.php"><button class="button button1"> Gifts for outdoor</button></a>
    <a class = "men" href="Productpage.php"><button class="button button1"> Gifts for men</button></a> -->
  </a>
 
</div>
<!-- <h1>Check out our new season arrival</h1>
<img src="Image/new.jpg" alt="header"> -->


</div>
<br>
<br>
<br>
<footer>
Copyright © Coodinating Community Tutoring Efforts
</footer>
</body>
</html>