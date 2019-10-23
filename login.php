<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
  <form class="form" action="login.php" method="post" enctype="multipart/form-data" autocomplete="off">
  
  <?php require("errors.php")?>
  <div class="body-content">
  <div class="module">
  		<label>Username or Email</label>
  		<input type="text" name="username" >
  
  		<label>Password</label>
  		<input type="password" name="password">
  	
		  <button type="submit" class="btn" name="login_user">Login</button>
		  <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	  </div>
  </div>
  	
  </form>
</body>
</html>