<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="main">
  <?php
  include "logic.php";
 include "ad_header.php";
 ?>
  </div>

<div class="main1">
  <div class="m1">
  <?php 
 include "admin_sidebar.php";
 ?>
  </div>
  <div class="m2">
    <div class="data">
      
    <div style="font-size:30px;">Booking has been Canceled.</div> 

    <a href="admin_page.php" style="font-size:25px;">Click Here to Redirected</a>

    </div>
  </div>
</div>


</body>
</html>