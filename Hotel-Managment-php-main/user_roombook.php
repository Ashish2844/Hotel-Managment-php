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
  <div class="mr2">
    
   <div class="room_details">
    <div class="rd">Room Details</div>
    <table class="table">
      <tr>
        <td>Room Type</td>
        <td>Number Of Beds</td>
        <td>Price</td>
      </tr>
      <tr>
      <td>1 BHK</td>
        <td>1</td>
        <td>1000</td>
      </tr>
      <tr>
      <td>2 BHK</td>
        <td>2</td>
        <td>1800</td>
      </tr>
      <tr>
      <td>3 BHK</td>
        <td>3</td>
        <td>2500</td>
      </tr>
    </table>
   </div>

   <div class="room_book">
   <br/>
   <form action="logic.php" method="post">
    <label>Select room type:</label>
    <select name="slct" id="">
     <option value="1 BHK">1 BHK</option>
     <option value="2 BHK">2 BHK</option>
     <option value="3 BHK">3 BHK</option>
    </select>
    
    <br/>
    <br/>
    
      <label>Enter Check-in date</label>
      <input type="date" name="checkin" required>
      <br/>
      <br/>
      <label>Enter Check-out date</label>
      <input type="date" name="checkout" required>

      
      <table>

      <tr>
        <td><label>Features</label></td>
        <td><label>Service Cost per day</label></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="ac">AC</td>
        <td>300</td>
      </tr><br/>
      <tr><td><input type="checkbox" name="bf">Breakfast</td>
      <td>150</td></tr><br/>
      <tr><td><input type="checkbox" name="lh">Lunch</td>
      <td>100</td></tr><br/>
      <tr><td><input type="checkbox" name="dr">Dinner</td>
      <td>200</td></tr><br/>
      <tr><td><input type="checkbox" name="sp">Swimming pool access</td>
      <td>300</td></tr>
</table>

<input type="submit" value="Submit" name="submit">
    </form>
   </div>
 </div>
</div>


</body>
</html>