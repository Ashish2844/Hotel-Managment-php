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
      <?php 
          
      $myobj=new slctquery();

      $gtable="admin_page";

      $getresult=$myobj->getdt($gtable);

      if(isset($getresult['0'])){
        echo '<table class="admin_room">';
        echo '<h3>Rooms Info</h3>';
        echo '
        <tr><td class="m">Room Type</td>
        <td class="m">Available Room</td>
        <td class="m">Price</td>
        <td class="m">Rooms Occupied</td>
        </tr>
        ';
        foreach($getresult as $output){
          echo '
          <tr>
          <td>'.$output['room_type'].'</br></td>
          <td>'.$output['room_available'].'</br></td>
          <td>'.$output['price'].'</br></td>
          <td>'.$output['occupied'].'</br></td>
          </tr>
          
          ';
        }
        echo '</table>';
      }

      else{
        echo "error";
      }
  
    

      
      
      ?>

    </div>
  </div>
</div>


</body>
</html>