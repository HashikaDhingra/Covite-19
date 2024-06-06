<html lang="en-US">
  <head>
  <title>update</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  *{
    margin:  0;
    padding:  0;
    font-family: sans-serif;
    }
    .container{
      box-sizing: content-box;
  border: 3px solid #05164C;
  box-shadow: 0 0 25px #abb7db;
  width: 800px;
  height: 670px;
  margin: auto;
  margin-top:60px;
  background-color:#4444;
  padding:20px;

    }
    hr {
  border: 1px solid #05614c;
  margin-bottom: 25px;
  animation-name: example;
  animation-duration: 4s;
  animation-delay: -2s;
  animation-iteration-count: 100;
  animation: 1s ease-out 0s 1 example;
}

@keyframes example {
  0% {
      transform: translateY(-100%);
    }
    100% {
      transform: translateY(0);
    }
}
input[type=text], input[type=password] {
  width: 202%;
  padding: 10px;
  margin: 0px 0 6px 0;
  display: inline-block;
  border: 1px solid #05164c;
 
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
  .button{
    height: 45px;
  width: 146px;
  border: 2px solid #05164c;
  background-color:#05164C;
  color: white;
  margin-top:27px;
  margin-left:202px;
  }
  .button2{
    height: 45px;
  width: 146px;
  border: 2px solid #05164c;
  background-color: white;
  color: #05164c;
  margin-top:32px;
  margin-left:676px;
  
  }
  
  
  .button2:hover {
  background-color: #05164c; 
  color: white;
  }
    </style>

  </head>
  <?php
  error_reporting(0);
  session_start();
  $db=mysqli_connect("localhost","root","","register") or die(mysqli_error());
  
  $name = $_POST['account'];

$query=mysqli_query($db,"SELECT * FROM register where account='$account'")or die(mysqli_error());

$row=mysqli_fetch_array($query);
  ?>
  <form method="post" action="#">
  
  <div class="container">
    <h1>User profile</h1>
    <p>Please fill the updated information here.</p>
    <hr>
    <div style="margin-left:120px;">
    <table>
    <tr>
    <td>
    <label for="email"><b>Name </b></label>
    </td>
    <td>
    <input type="text" placeholder="Enter name" name="name" id="Name"  value="
            <?php 
            echo $row['name']; 
            ?>"  >
     </td></tr>
     <tr><td>
    <label for="email"><b>Email</b></label>
    </td><td>
    <input type="text" placeholder="Enter Email" name="email" id="email"  value="
            <?php 
            echo $row['email']; 
            ?>"  >
    </td><tr><td>
    <label for="email"><b>Phone Number&nbsp;&nbsp;</b></label></td>
    <td>
    <input type="text" placeholder="Phone Number" name="phone" id="Number"  value="
            <?php 
            echo $row['phone']; 
            ?>" >
   <td></tr><tr>
   <td><label for="email"><b>Address</b></label></td>
    <td><input type="text" placeholder="Enter Address" name="address" id="Address"  value="
            <?php 
            echo $row['address']; 
            ?>" ></td>
    </tr>
    </table>
    </div>
    <hr>
    <H3>Update account with <img src="COVITELOGO.png" height="50" width="90" STYLE="MARGIN-LEFT: 3PX;
      MARGIN-BOTTOM: -14PX;"></H3><br>
      <div style="margin-left:120px;">
    <table>
    <tr>
    <td>
    <label for="aname"><b>Account Name&nbsp;&nbsp;&nbsp;&nbsp;</b></label></td>
    <td>
    <input type="text" placeholder="Choose an account name" name="account" id="aname"  value="
            <?php 
            echo $row['account']; 
            ?>"  >
    </td></tr>
    </table></div>
    
     <hr>
     <h3><b>Extra Details</b></h3>
     <br>
     <div style="margin-left:120px;">
    <table>
    <tr>
    <td>
     <label for="timings"><b>Available Timings </b></label></td>
     <td>
    
     <input type="text" placeholder="Timings" name="time" id="time" style="width:100%" value="
            <?php 
            echo $row['time']; 
            ?>"  >
            </td></tr>
            <tr>
            <td>
     <label for="message"><b>Extra Information<br>(if any) </b></label></td>
     <td><textarea id="info" name="info" placeholder="Enter the extra information" rows="4" cols="50" style="padding: 10px;margin-top: 3px ;"  value="
            <?php 
            echo $row['info']; 
            ?>"  ></textarea></td>
            </tr>
            <tr>
            </table>
            
   <input type="submit" name="submit" class="button" >
   
   </div>
            <center>
            <a href="vaccine.php">
            <button class="button2">
            Log out
             </button></a>
           </center>
<br><br><br><br>
<hr>
 
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
    
      $query = "UPDATE `register` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$address',`account`='$account',`password`='$password',`confirmpsw`='$confirmpsw',`time`='$time',`info`='$info' WHERE account='$account'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }              
?>