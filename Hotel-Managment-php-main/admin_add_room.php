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

        echo '
          <br/>
      <br/>
   <br/>
<div class="ad_form">
  <form action="logic.php" method="post">
  <input type="hidden" value="'.$output['id'].'" name="id">
  <br/>
  <br/>
    <label>Select Room:</label>
   <select name="select" id="">
    <option value="1 BHK">1 BHK</option>
    <option value="2 BHK">2 BHK</option>
    <option value="3 BHK">3 BHK</option>
   </select>
   <br/>
   <br/>
   <label>Enter number of rooms to add:</label>
   <input type="text"  name="rooms">
   <br/>
   <br/>
   <input type="submit" value="Add" name="add_room">

  </form>
</div>  
        
        ';
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