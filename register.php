
 <?php
 require('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<link rel="stylesheet" href="style.css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
	<form class="form" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off">
	<?php include('errors.php'); ?>
     
      <input type="text" placeholder="Username" name="username" required />
      <input type="password" placeholder="Phone Number" name="phoneno" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password_1" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
    <!-- <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
-->    <input type="submit" value="Register" name="submit" class="btn btn-block btn-primary" />
      <P>Already Have an account?<a href="login.php">Click here to log in</a></P>
    </form>
  </div>
</div> 
</body>
</html>
