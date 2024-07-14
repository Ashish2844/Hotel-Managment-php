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
      <div class="a2">User Login</div>
    

    <div class="frm1">
      <form action="logic.php" method="post">
        <input type="text" placeholder="Email address" name="emailu">

        <input type="password" placeholder="Password" name="passu">

        <input type="submit" value="Login" name="login"> 
      </form>
    </div>
    

    <div class="main">
    <a href="forgotpassuser.php">Forgot Password?</a>
      <a href="user_signup.php">sign up</a>
      <a href="index.php">Home</a>
    </div>
</div>

  </div>

</body>
</html>