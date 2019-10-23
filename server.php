<?php
session_start();

$username="";
$email="";
$errors=array();
$db=mysqli_connect('localhost', 'root', 'Franksays', 'tutor');
if (isset($_POST['submit'])){
  
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $phoneno=mysqli_real_escape_string($db,$_POST['phoneno']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
    $confirmpassword=mysqli_real_escape_string($db,$_POST['confirmpassword']);

if(empty($username)) {array_push($errors,"Username is required");}
if(empty($phoneno)) {array_push($errors,"Phone Number is required");}
if(empty($email)) {array_push($errors,"Email is required");}
if(empty($password_1)) {array_push($errors,"Password is required");}
if($password_1 !=$confirmpassword){
  array_push($errors,"The two passwords do not match");
}
$user_check_query="SELECT * FROM users username='$username' OR email='$email' ";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($result);

if($user){
  if($user['username']===$username){
    array_push($errors, "Username already exists");
  }
  if($user['email']===$email){
      array_push($errors, "Email already exists");
      
    }
  }
  if(count($errors)==0){
    $password_1=md5($_POST['password_1']);
    
    $_SESSION['username']=$username;
    $query="INSERT INTO users(username,phonenumber,email,password)
    VALUES('$username','$phoneno','$email','$password_1')";    
    mysqli_query($db,$query);
    $_SESSION['username']=$username;
    $_SESSION['success']="Youre logged in";
    header('location: main.php');
  
   
  }
    }
  
  // LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username'OR email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
    }
    else {
      array_push($errors, "Wrong username/password");
    }
  }
}


  ?>