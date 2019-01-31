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
<h1>SUNRISE</h1>
</header>
<ul>
            <li><a href="home.php"><b>HOME</b></a></li>
            <li class="dropdown" >
              <a  class="active" href="javascript:void(0)" class="dropbtn">PRODUCTS</a>           
              <div class="dropdown-content">
                  <a href="Productpage.php">MEN's</a>
                  <a href="women.php">WOMEN's</a>
                  <a href="outdoor.php">OUT DOOR's</a>
               </div>
               </li>
            
            <li><a href="Aboutpage.php" ><b>ABOUT US</b></a></li>
            <li><a href="Contactpage.php" ><b>CONTACT US</b></a></li>
            <li><form action="welcome.php" method="post">
              <div>
               <label class="txt"><b>Username</b></label>
               <input type="text" placeholder="Enter Username" name="name" required>

               <label class="txt2"><b>Password</b></label>
               <input  type="password" placeholder="Enter Password" name="psw" required>
                
               <button type="submit">Login</button>
               <input type="checkbox" checked="checked"><font color="white" size= 2 px>Remember me</font>
              </div>
              </form>
              </li>
        </ul>
         
<div class="polaroid">
  <img id="myImg" src="Image/anquanmao.jpg" alt="sports1" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$20.00</h2>
  </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<div class="polaroid">
  <img id="myImg" src="Image/bike.jpg" alt="sports2" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$347.32</h2>
  </div>
</div>

<div class="polaroid">
  <img id="myImg" src="Image/bike2.jpg" alt="sports2" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$536.33</h2>
  </div>
</div>

<div class="polaroid">
  <img id="myImg" src="Image/huaban.jpg" alt="sports2" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$135.43</h2>
  </div>
</div>

<div class="polaroid">
  <img id="myImg" src="Image/huabanche.jpg" alt="sports2" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$43.22</h2>
  </div>
</div>

<div class="polaroid">
  <img id="myImg" src="Image/huju.jpg" alt="sports2" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$32.65</h2>
  </div>
</div>

<div class="polaroid">
  <img id="myImg" src="Image/snowbord.jpg" alt="sports2" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$578.43</h2>
  </div>
</div>

<div class="polaroid">
  <img id="myImg" src="Image/snowj.jpg" alt="sports2" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$178.92</h2>
  </div>
</div>

<div class="polaroid">
  <img id="myImg" src="Image/xuefu1.jpg" alt="sports2" style="width:100%" onclick="myFunction(this)">
  <div class="container">
    <h2>$276.43</h2>
  </div>
</div>


<!-- The Modal -->
<!--
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img02">
  <div id="caption"></div>
</div>-->

<script>
// Get the modal
  var modal = document.getElementById('myModal');

function myFunction(param){
// Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById('myImg');
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
      modal.style.display = "block";
      modalImg.src = param.src;
      captionText.innerHTML = param.alt;
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<footer>
Copy right sunrise sports company
</footer>
</body>
</html>