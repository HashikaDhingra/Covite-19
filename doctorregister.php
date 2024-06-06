<?php
$con=mysqli_connect("localhost","root","","covite-19") or die(mysqli_error());
error_reporting(0);
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
  $wphone = $_POST['wphone'];
	$address = $_POST['address'];
	$account = $_POST['account'];
	$password = $_POST['password'];
  $confirmpsw = $_POST['confirmpsw'];
  $time = $_POST['time'];
  $info = $_POST['info'];

	$sql = "INSERT INTO dregister(name,email,phone,wphone,address,account,password,confirmpsw,time,info) values('$name','$email','$phone','$wphone''$address','$account','$password','$confirmpsw','$time','$info')";
	if($password == $confirmpsw)
{

}
 else
 {
   
   die('Password not Matched ' . $con->error );
 }
 

	if(!$result = $con->query($sql)){
    die('Error occured [' . $con->error . ']');
    }
    else
      { echo "<h1>Thank you!</h1><h3><hr> Your account has been created.Your data will be displayed on refresh.</h3>";
       echo "<a href='index.php'>
       Log out
        </a>";
  }
     


    }
  
    

?>
