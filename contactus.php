<?php 
error_reporting(0);
  //creating connection to database
$con=mysqli_connect("localhost","root","","covite-19") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);

$phno = $con->real_escape_string($_POST['phno']);
$comments = $con->real_escape_string($_POST['message']);

  //query to insert the variable data into the database
$sql="INSERT INTO contactus (name,email,phno,message) VALUES ('".$Name."','".$Email."','".$phno."', '".$comments."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $con->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
   alert("Dataentered");
}

?>