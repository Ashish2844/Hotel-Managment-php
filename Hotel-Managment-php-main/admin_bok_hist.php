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

      $gtable="room_book";

      $getresult=$myobj->getdt($gtable);

      if(isset($getresult['0'])){
        echo '<table class="admin_room">';
        echo '
        <tr>
        <td class="m">Booking ID</td>
        <td class="m">Name</td>
        <td class="m">Email</td>
        <td class="m">Room Type</td>
        <td class="m">Check-In-Date</td>
        <td class="m">Check-Out-Date</td>
        <td class="m">Price</td>
        <td class="m">Status</td>
        <td class="m">Action By</td>
        </tr>
        ';
        foreach($getresult as $output){
            
          $inn=strtotime($output['checkin']);
          $outt=strtotime($output['checkout']);

          $diffr=$outt-$inn;

          $num=$diffr/60/60/24;

          $totprice=$output['total_bill']*$num;

          echo '
          <tr>
          <td>'.$output['booking_id'].'</br></td>
          <td>'.$output['name'].'</br></td>
          <td>'.$output['email'].'</br></td>
          <td>'.$output['room_type'].'</br></td>
          <td>'.$output['checkin'].'</br></td>
          <td>'.$output['checkout'].'</br></td>
          <td>'.$totprice.'</br></td>
          <td>'.$output['status'].'</br></td>
          <td>'.$output['action_by'].'</br></td>
          </tr>
          
          ';
        }
        echo '</table>';

        echo '
        
        <form action="ad_view.php" method="post" class="can_form">
        <input type="hidden" value="'.$output['booking_id'].'" name="bokid">
        <label>Enter Booking Id :</label>
        <input type="text" name="bngid">
        <input type="submit" value="View Details" name="view">
        
        </form>
        
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