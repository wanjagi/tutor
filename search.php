<?php

/*$db=mysqli_connect('localhost', 'root', 'Franksays', 'tutor');
if (isset($_POST['submit'])){
    $search=mysqli_real_escape_string($db, $_POST,['search',]);
    $sql="SELECT * FROM tutorlist WHERE subject LIKE '%$search%' OR ";
    $result=mysqli_query($db, $sql);
    $queryResult=mysqli_num_rows($result);
    echo"";
    if($queryResult>0){
        while ($row=mysqli_fetch_assoc($result)){
            
           

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['subject'] . "</td></tr>";  
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
            
            

        }
    }
}
?>
*/

$connection = mysql_connect("localhost", "root", "Franksays","tutor");
$query = mysql_query("select * from tutorlist", $connection);?>

<?
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from tutorlist where id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->

<span>Name:</span> <?php echo $row1['name']; ?>
<span>E-mail:</span> <?php echo $row1['email']; ?>
<span>Contact No:</span> <?php echo $row1['subject']; ?>
<span>Address:</span> <?php echo $row1['qualification']; ?>

<?php mysql_close($connection);?>