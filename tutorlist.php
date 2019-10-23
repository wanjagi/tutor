<?php
// insert into tutorlist table
/*$name="";
$email="";
$subject="";
$qualifications="";
$errors=array();
$db=mysqli_connect('localhost', 'root', '', 'tutor');
if (isset($_POST['submit'])){
  
    $name=mysqli_real_escape_string($db, $_POST['name']);
    //$phoneno=mysqli_real_escape_string($db,$_POST['phoneno']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $subject=mysqli_real_escape_string($db,$_POST['subject']);
    $qualifications=mysqli_real_escape_string($db,$_POST['qualifications']);

if(empty($name)) {array_push($errors,"Full name is required");}
//if(empty($phoneno)) {array_push($errors,"Phone Number is required");}
if(empty($email)) {array_push($errors,"Email is required");}
if(empty($subject)) {array_push($errors,"Subject is required");}

  }
  if(count($errors)==0){
   
    
    $query="INSERT INTO tutorlist(name,email,subject,qualifications)
    VALUES('$name',$email','$subject','$qualifications')";    
    mysqli_query($db,$query);
   
  }
  else{
      echo"Data not inserted";
  }*/
  

$name="";
$email="";
$subject="";
$qualifications="";
$db=mysqli_connect('localhost', 'root', 'Franksays', 'tutor');

if (isset($_POST['submit'])){
  
    $name=mysqli_real_escape_string($db, $_POST['name']);
    //$phoneno=mysqli_real_escape_string($db,$_POST['phoneno']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $subject=mysqli_real_escape_string($db,$_POST['subject']);
    $qualifications=mysqli_real_escape_string($db,$_POST['qualifications']);

// Create connection



$sql = "INSERT INTO tutorlist (name,email,subject,qualifications)
  VALUES('$name','$email','$subject','$qualifications')";    


if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
}
?>
