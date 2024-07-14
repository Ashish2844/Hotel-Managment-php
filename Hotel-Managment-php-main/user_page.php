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

      $sstable="table1";
      $sscondition="email='$email'";

      $getresult=$myobj->slctdt2($sstable,$sscondition);

      if(isset($getresult['0'])){
        echo '<table class="user_table">';
        
        foreach($getresult as $output){
          echo '
          <h1>Welcome !</h1>
          <tr>
          <td class="n">Name:</td>
          <td>'.$output['firstname'].' '.$output['lastname'].'</td>
          </tr>
          <tr>
          <td class="n">Email:</td>
          <td>'.$output['email'].'</br></td>
          </tr>
          <tr>
          <td class="n">Contact:</td>
          <td>'.$output['contact'].'</br></td>
          </tr>
          <tr>
          <td class="n">Date:</td>
          <td>'.$output['date'].'</br></td>
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