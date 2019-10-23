
<?php require("tutorlist.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutors Information</title>
</head>
<body>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<link rel="stylesheet" href="style.css">
<div class="body-content">
  <div class="module">
    <h1>Enter your information here:</h1>
<form class="form" action="tutors.php" method="post" enctype="multipart/form-data" autocomplete="off">
	
     
      <input type="text" placeholder="Name" name="name" required />
      <input type="text" placeholder="Phone Number" name="phoneno" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Enter Subject" name="subject" required />
      <input type="text" placeholder="Qualifications" name="qualifications" required />
    <!--  <div class="avatar"><label>Select your files to add: </label><input type="file" name="file" accept="image/*" required /></div>
-->
      <input type="submit" value="Become a tutor" name="submit" class="btn btn-block btn-primary" />
      
    </form>
</body>
</div>
</div>
</html>
<script>
		$('.message a').click(function() {
		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>

	<script type="text/javascript">
		function validation() {
			var name = document.getElementById('name').value;
			var phonneno = document.getElementById('phoneno').value;
      var email = document.getElementById('email').value;
			var subject = document.getElementById('subject').value;


			if (name == '' || phoneno == '' || email == '' || subject == '' )
			{
				alert("please fill in all details");
				return false;
			}
			else {
				return true;
			}

			if (option == tutor) {
				onsubmit = tutormain.html;
			}

		}
	</script>
