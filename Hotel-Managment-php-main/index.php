<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top">
<?php
include "header.php";
?>
</div>

<div class="mid">
  <div class="images" id="images">
  <img src="palace.jpg" alt="">
  <img src="interior.jpg" alt="">
  <img src="bedroom.jpg" alt="">
  <img src="lobby.jpg" alt="">
</div>
</div>

<div class="dot">
  <div class="d" onclick=dot(1)></div>
  <div class="d" onclick=dot(2)></div>
  <div class="d" onclick=dot(3)></div>
  <div class="d" onclick=dot(4)></div>
</div>

<div class="res_rom">
 <a href="user_login.php">Reserve A Room</a> 
</div>

<div class="text">
  .Experience luxury beyond imagination ,
   Making Memories speical.
</div>

<div class="text1">
  .Experience Warm Hospitality and Blissful Gateways.
</div>

<div class="our_rom">
 <a href="#imag">Our Rooms</a> 
</div>


<div class="imag" id="imag">
  <div class="i">
    <div class="ia"><img src="deluxe.jpg" alt=""></div>
    <div class="ib">Deluxe Room</div>
  </div>
  <div class="i">
  <div class="ia"><img src="bedroom.jpg" alt=""></div>
  <div class="ib">Executive Room</div>
  </div>
  <div class="i">
  <div class="ia"><img src="standard.jpg" alt=""></div>
  <div class="ib">standard Room</div>
  </div>
</div>


<br/>
<div class="down">
<?php
include "footer.php";
?>
</div>
<script src="myjs.js"></script>

</body>
</html>