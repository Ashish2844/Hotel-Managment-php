<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

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
 include "headeru.php";
 ?>
  </div>

<div class="main1">
  <div class="m1">
  <?php 
 include "sidebar.php";
 ?>
  </div>
  <div class="m2">
    <div class="data">
      <?php 
      
      $email=$_SESSION['email'];

      $myobj=new slctquery2();

      $sstable="room_book";
      $sscondition="email='$email'";

      $getresulttt=$myobj->slctdt2($sstable,$sscondition);

      if(isset($getresulttt['0'])){
        echo '<table class="status_table">';
        echo '<h2>Room Booking Status</h2>';
        echo '
          <tr>
          <td class="m">Booking Id</td>
          
          <td class="m">Name</br></td>
          
          <td class="m">Room Type</br></td>
          <td class="m">Check-in-date</br></td>
          
          
          <td class="m">Check-out-date</br></td>
          
          <td class="m">Status</br></td>
          
          <td class="m">Price</td>

          
          </tr>
          
          ';
        foreach($getresulttt as $output){
          
          $checkinn=strtotime($output['checkin']);
          $checkoutt=strtotime($output['checkout']);
          
          $diff=$checkoutt-$checkinn;

          $ab=$diff/60/60/24;

          $final=$ab*$output['total_bill'];


          echo '
          <tr>
          <td>'.$output['booking_id'].'</td>
          
          <td>'.$output['name'].'</br></td>
          
          <td>'.$output['room_type'].'</br></td>
          <td>'.$output['checkin'].'</br></td>
          
          
          <td>'.$output['checkout'].'</br></td>
          
          <td>'.$output['status'].'</br></td>

          <td>'.$final.'</br></td>

          
          </tr>
          
          ';
        }
        echo '</table>';

        echo '
        
        <form action="logic.php" method="post" class="status_form">
        <input type="hidden" value="'.$output['booking_id'].'" name="idbk">
        <label>Enter Booking Id :</label>
        <input type="text" name="bgid" required>
        <input type="submit" value="Cancel Booking" name="cancel">
        </form>
        
        ';
      }

      else{
        echo "<div>Book a room to show your status</div>";
      }
  
    

      
      
      ?>

    </div>
  </div>
</div>


</body>
</html>

</body>
</html>