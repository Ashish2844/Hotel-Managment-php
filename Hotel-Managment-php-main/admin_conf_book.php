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
      
       
      $myobj=new slctquery2();

      $sstable="room_book";
      $sscondition="status='confirmed'";

      $getresult=$myobj->slctdt2($sstable,$sscondition);

      if(isset($getresult['0'])){
        echo '<table class="admin_room">';
        echo '<h2>Confirmed Bookings</h2>';
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
        echo '<div style="font-size:35px; text-align:center; margin-left:50px; margin-top:40px;">Modify Stay</div>';
        echo '
             
        <form action="logic.php" method="post" class="can_form">
        <input type="hidden" value="'.$output['booking_id'].'" name="bokid">
        <label>Enter Booking Id :</label>
        <input type="text" name="bngid"><br/>
        <label>Enter check-out-date</label>
        <input type="date" name="outdate"><br/>
        <input type="submit" value="Change" name="change">
        
        </form>
        
        ';
      }

      else{
        echo "NO Confirmed Bookings";
      }
  
    

      
      
      ?>

    </div>
  </div>
</div>


</body>
</html>