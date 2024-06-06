<?php
$con=mysqli_connect("localhost","root","","covite-19") or die(mysqli_error());
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
  $zipcode = $_POST['zipcode'];

	$sql = "INSERT INTO payment(name,email,phone,address,city,state,zipcode) values('$name','$email','$phone','$address','$city','$state','$zipcode')";
	
	if(!$result = $con->query($sql))
  {
    die('Error occured [' . $con->error . ']');
    }
    else
       
         {
           echo "<h1>Thank you!</h1><h3><hr> Thankyou for donating.</h3>";
        echo "<a href='index.php'>
        Log out
         </a>";
         }
  }
   

?>