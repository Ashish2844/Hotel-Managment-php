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

if(isset($_POST['view'])){
  $bokid=$_POST['bokid'];
  $bngid=$_POST['bngid'];

  $myobj9=new slctquery2();

  $sstable="room_book";
  $sscondition="booking_id='$bngid'";
  
  $slct9=$myobj9->slctdt2($sstable,$sscondition);
  
  if(isset($slct9['0'])){
  
    echo '<table>';
    foreach($slct9 as $opt){
      $innp=strtotime($opt['checkin']);
      $outtp=strtotime($opt['checkout']);

      $diffrn=$outtp-$innp;

      $numb=$diffrn/60/60/24;

      $totpric=$opt['total_bill']*$numb;

      echo '
        <tr><td class="v">Booking Id</td> <td>'.$opt['booking_id'].'</br></td></tr>
        <tr><td class="v">Name</td> <td>'.$opt['name'].'</br></td></tr>
        <tr><td class="v">Email</td> <td>'.$opt['email'].'</br></td></tr>
        <tr><td class="v">Room type</td> <td>'.$opt['room_type'].'</br></td></tr>
        <tr><td class="v">Check in date</td> <td>'.$opt['checkin'].'</br></td></tr>
        <tr><td class="v">Check out date</td> <td>'.$opt['checkout'].'</br></td></tr>
        <tr><td class="v">Total Bill</td>  <td>'.$totpric.'</br></td></tr>
        <tr><td class="v">AC</td>  <td>'.$opt['ac'].'</br></td></tr>
        <tr><td class="v">Breakfast</td> <td>'.$opt['breakfast'].'</br></td></tr>
        <tr><td class="v">Lunch</td> <td>'.$opt['lunch'].'</br></td></tr>
        <tr><td class="v">Dinner</td> <td>'.$opt['dinner'].'</br></td></tr>
        <tr><td class="v">Swimming Pool</td> <td>'.$opt['pool'].'</br></td></tr>
      
      ';

    }
    echo '</table>';
  }

}
    
      ?>
    
     <a href="user_bok_hist.php" style="font-size:25px;">Back</a>
    </div>
  </div>
</div>


</body>
</html>