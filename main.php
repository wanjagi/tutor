<?php
require("search.php")
?><!DOCTYPE html>
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
<link rel="stylesheet" href="Boostrap/css/boostrap.css">
<link rel="stylesheet" href="style.css">
<div id="mainNav">
			<nav>
				<ul>
					<li><a href="index.html">How it works</a></li>
					<li><a href="Resources.html">Resources</a>
						<ul>
						<li><a>Blog</a></li>
						<li><a>Help Center</a></li>

					</ul></li>
					<li><a href="main.html">Log In</a></li>
					<li><a href="Browse.html">Browse</a><ul><li><a>Subjects</a></li></ul></li>
					<li><a href="tutors.php">Become a tutor</a></li>


				</ul>
			</nav>
		</div>
<div class="body-content">
  <div class="module">
    <h1>Find a tutor here</h1>
    <form class="form" action="main.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Choose Subject" name="subject" required />
      <select name="level" id="">
          <option value="level 1">Begginner</option>
          <option value="level 1">Intermeadiate-</option>
          <option value="level 1"></option>
          <option value="level 1"></option>
      </select>
         <input type="submit" value="Find A Tutor" name="submit" class="btn btn-block btn-primary" />
        </form>
  </div>
</div> 

</body>
</html>