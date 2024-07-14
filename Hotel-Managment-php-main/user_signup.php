<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="whole">
<div class="box1">
  <div class="a1">Welcome to THE PALACE HOTEL</div>
  <div class="a2">Sign-Up</div>

<div class="frm">
  <form action="logic.php" method="post">
    <input type="text" placeholder="First name" name="fname" required>

    <input type="text" placeholder="Last name" name="lname" required>

    <input type="text" placeholder="Email address" name="email" required>

    <input type="number" placeholder="contact number" name="number" required>

    <input type="text" placeholder="password" name="pass" required>

    <input type="text" placeholder="Confirm password" name="confirmpass" required>

    <input type="submit" value="Create Account" name="create">
  </form>

</div>

  <div class="main">
  <a href="user_login.php">Login</a>
  <a href="index.php">Home</a>
</div>
</div>

</div>


</body>
</html>