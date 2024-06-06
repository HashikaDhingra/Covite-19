<html>
<head>
  
    <title>Doctor's Meeting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  

  *{
    margin:  0;
    padding:  0;
    font-family: sans-serif;
  
  

    
}
  header {
    background-color: rgba(43, 42, 42, 0.267);
    background-size: cover;
    background-position-x: center;

}
.topnav img{
margin-left:10px;
}
    /* Add padding to containers */
.container {
  padding: 16px;
  width: 30%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #4444;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #05164C;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 18px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 18px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: #05164c;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  
}
.vertical {

            border-left: 2px solid #4444;
            height: 1600px;
            position:absolute;
            left: 33%;
            
        }
.doctor-container
{
  box-sizing: content-box;
  border: 3px solid #4444;
  width: 785px;
  height: 142px;
  background-color: #4444;
  MARGIN-left:570px;
  MARGIN-TOP:-7px;
  color:#05164C;
}
.fontstyle{
  padding: 10px;
  color:#05164C;
}
.fontstyle img{
  
  height: 25px ;
  width:25px;
}
.fontstyle p{
  font-size:13px;
  
}


</style>



</head>
<body>
  <header>
    <div Class="topnav">
      <img src="COVIDLOGO.png"  width=150 height=70>
      <div class="login-container">
        <form action="doctorlogin.php" method="POST">
          <input type="text" placeholder="Account Name" name="account">
          <input type="text" placeholder="Password" name="password">
          <button type="login">Login</button>
        </form>
      </div>
</div>
  </header>
  <div style="display: inline-block;">
    <form action="doctorregister.php" method="POST">
      <div class = "vertical"></div>
    <div class="container">
      <h1>Register as a Doctor.</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b>Name*</b></label>
      <input type="text" placeholder="Enter name" name="name" id="Name" required>

      <label for="email"><b>Email*</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="pnumber"><b>Phone Number*</b></label>
      <input type="text" placeholder="Phone Number" name="phone" id="Number" required>

      <label for="whatsappnumber"><b>Whatsapp Number*</b></label>
      <input type="text" placeholder="Whatsapp Number" name="wphone" id="Number" required>

      <label for="address"><b>Address*</b></label>
      <input type="text" placeholder="Enter Address" name="address" id="Address" required>
      <label for="document"><b>Certificate(original)</b></label>
<br><br>
      <input type="file" id="myFile" name="filename">
  <input type="submit" style="height:50px; width:100px; background-color:#05164C;color:white;border:none;">
      <br><br>
      <br>
      <hr>
      <H3>Create account with <img src="COVITELOGO.png" height="50" width="90" STYLE="MARGIN-LEFT: 3PX;
        MARGIN-BOTTOM: -14PX;"></H3><br>
      <label for="aname"><b>Account Name*</b></label>
      <input type="text" placeholder="Choose an account name" name="account" id="aname" required>

      <label for="psw"><b>Password*</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="psw" required>
  
      <label for="psw-repeat"><b>Repeat Password*</b></label>
      <input type="password" placeholder="Repeat Password" name="confirmpsw" id="psw-repeat" required>
       <hr>
       <h3><b>Extra Details</b></h3>(can change accordingly)
      
       <br><br><br>
       <label for="fees"><b>Fees</b></label>
       <input type="text" placeholder="Enter fees" name="charges" id="aname" required>
       <label for="timings"><b>Available Timings </b></label>
       <input type="text" placeholder="Timings" name="aname" id="aname" required>
       <label for="message"><b>Extra Information(if any) </b></label>
       <textarea id="info" name="info" placeholder="Enter the extra information" rows="4" cols="50" style="padding: 10px;margin-top: 3px ;"></textarea>
     
  <br><br><br><br>
  <hr>
      <p>By creating an account you agree to our <a href="terms.php">Terms & Conditions</a>.</p>
      <button type="submit" class="registerbtn" name="submit">Register</button>
      <hr>
    </div>
  </form>

<div style="margin-top: -1614px;">
  
<?php 
          $con=mysqli_connect("localhost","root","","covite-19") or die(mysqli_error());
          $sql=mysqli_query($con,"SELECT `name`, `email`, `phone`,`wphone`, `address`,`account`, `time`, `info` FROM dregister");

          if (mysqli_num_rows($sql) > 0);
          {
            while ($row = mysqli_fetch_assoc($sql)) {
              echo "<div class='doctor-container'>
                      <div class='fontstyle'>
                        <img src='verified.png' align='right'>
                        <b>
                      <h3>{$row['account']}</h3>
                     <p align='left'>{$row['name']}<br><a href='mailto:{$row['email']}'>{$row['email']}</a>
                      <br>{$row['address']}<br>Timing:{$row['time']}<br>
                      <br>{$row['info']}<br>
                    
                      <img src='calling.png'style='margin-top: -16px;margin-left: 370px;'><div style='margin-left: 410px;margin-top: -18px;'>{$row['phone']}</div>
                      <img src='whatsapp.png'style='margin-top: -16px;margin-left: 523px;'><div style='margin-left: 554px;margin-top: -18px;'>{$row['wphone']}</div>
                     
                   
                      </div>
                  
                    </div><br>";
            }
            
          }

        ?>