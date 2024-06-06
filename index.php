z<html>
<head>
<title>
    covite-19
</title>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

        <body>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <!--heading--> 
    <nav class="sticky-top">    
           
          
    <div Class="topnav">
      <img src="COVIDLOGO.png"  width=150 height=70>
      <a href="#contact">CONTACT US</a>
      <a href="#donations">DONATIONS</a>
      <a href="#services">SERVICES</a>
      <a href="#cases">CASES</a>
      <a href="#about" >ABOUT</a>
      <a  href="#home">HOME</a>
    </div>  
   
   </nav>
   <button onclick="topFunction()" id="myBtn" title="Go to top">↑</button>
   <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
   <!--home-->
<div id="home">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Frontimage.jpg" class="d-block w-100" height="650" width="100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="cases.jpg" class="d-block w-100" height="650" width="100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="doctor.jpg" class="d-block w-100" height="650" width="100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="vaccine.jpg" class="d-block w-100" height="650" width="100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="stayhome.jpg" class="d-block w-100" height="650" width="100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<!--about-->
<div id="about" class="about1"> 
<div class="titles">
  <h4>About</h4> &nbsp;&nbsp;&nbsp; 
  
    </div>
  </div>

  
  <div id="mission">
  <table>
   
    <tr>
      <td class="tableborder"><h2><b style=" margin-left: 45px;">
      Our Mission</b></h2><h4 style="margin-left: 42px;"> The novel corona virus covid 19 is creating an evolving situation with varied impacts around the world. 
        Our mission is to avoid all the panic among the people.We are trying to provide all the services that a sufferer need at this pandemic situation. 
        We are updating this page regularly with the latest information and resources that users can use accordingly.</h4></p></td>
      <td class="tableborder2"><img src="mission.jpg" height=300 width=300></td>
    </tr>
  </table>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


$(document).ready(function(){
  $("#para1").hide();
    $("#para2").hide();
    $("#para3").hide();
    $("#para4").hide();
    $("#para5").show();
   

  $("#B1").click(function(){
    $("#para1").show();
    $("#para2").hide();
    $("#para3").hide();
    $("#para4").hide();
    $("#para5").hide();
  });
  
  $("#B2").click(function(){
    $("#para2").show();
    $("#para1").hide();
    $("#para3").hide();
    $("#para4").hide();
    $("#para5").hide();
  });
  
  $("#B3").click(function(){
    $("#para3").show();
    $("#para1").hide();
    $("#para2").hide();
    $("#para4").hide();
    $("#para5").hide();
  });
  $("#B4").click(function(){
    $("#para4").show();
    $("#para1").hide();
    $("#para3").hide();
    $("#para2").hide();
    $("#para5").hide();
  });
});
</script>
</head>
<br>
  <button id="B1" class="button"><span>Symptoms</span></button><br><br>
<button id="B2"class="button"><span>Prevention</span></button><br><br>
<button id="B3" class="button"><span>Treatment</span></button><br><br>
<button id="B4" class="button"><span>Vaccination</span></button>
<body>
  <div id="para5" style="margin-left: 360px;margin-top: -425px;">
    <h3><i><b><u>COVID-19</b></i></u></h3>
    <p>The virus associated with the outbreak <font color="red">originating in Wuhan,China,</font>
      has been designed <font color="red">severe acute respiratory syndrone coronavirus 2(SARS-CoV-2).</font>
      The disease caused by that virus is now officially called <font color="red">COVID-19</font></p>
      <br>
      <center><img src="coronavirus.png" height="250" width="400"></center>
      <br>
      <br>
  </div>

  <div id="para1" style="margin-left: 360px;margin-top: -425px;">

<h3><i><b><u>Symptoms:</b></i></u></h3>
<table>
<tr>
  <td><img class="img1" src="cough.png" height="50" width="50">  </td>
  <td>Coughing</td>
  <td><img class="img6" src="decreased-concentration.png" height="50" width="50"></td>
  <td>Headache</td>
</tr>
<tr>
<td><img class="img2" src="loss-of-sense-of-taste.png" height="50" width="50"></td>
<td>Loss to taste and smell</td>
<td><img class="img7" src="cough (1).png" height="50" width="50"></td>
<td>Loss of breath</td>
</tr>
<tr>
<td><img class="img3" src="sore-throat.png" height="50" width="50"></td>
<td>Sore sore-throat</td>
<td><img class="img8" src="fever.png" height="50" width="50"></td>
<td>Fever</td>
</tr>
<tr>
<td><img class="img4" src="vomiting.png" height="50" width="50"></td>
<td>Vomiting</td>
<td><img class="img5" src="dizziness.png" height="50" width="50"></td>
<td>Fatique</td>
</tr>
</table>
<a href="https://mohfw.gov.in/">
<button>Read more</button>
</a>
</div>
<div id="para2" style="
margin-left: 360px;
margin-top: -425px;

">
   <h3><i><b><u>Preventions:</b></i></u></h3>
  <table>
    <tr>
      <td><img class="img1" src="social-distancing.png" height="50" width="50">  </td>
      <td>Social distancing </td>
      <td><img class="img6" src="no-touch.png" height="50" width="50"></td>
      <td>Avoid Touching</td>
    </tr>
    <tr>
    <td><img class="img2" src="washing-hands.png" height="50" width="50"></td>
    <td>Wash Your Hands</td>
    <td><img class="img7" src="quarantine.png" height="50" width="50"></td>
    <td>Qurantine yourself</td>
    </tr>
    <tr>
    <td><img class="img3" src="medical-mask.png" height="50" width="50"></td>
    <td>Wear Mask</td>
    <td><img class="img8" src="temperature.png" height="50" width="50"></td>
    <td>Check temperature</td>
    </tr>
    </table>
    <a href="https://mohfw.gov.in/">
      <button>Read more</button>
      </a>
    </div>


    <div id="para3" style="
    margin-left: 360px;
    margin-top: -425px;
    
    ">
       <h3><i><b><u>Treatment:</b></i></u></h3>
      <table>
        <tr>
          <td><img src="stay.png" height="50" width="50">  </td>
          <td><h4><b>Stay home:</b></h4> Don't go to work, school, or public places. </td>
        </tr>
        <tr>
        <td><img src="sleep.png" height="50" width="50"></td>
        <td><h4><b>Rest:</b></h4>It can make you feel better and may speed your recovery.</td>
        </tr>
        <tr>
        <td><img src="doctor.png" height="50" width="50"></td>
        <td><h4><b>Consult Doctor:</b></h4>Ask your doctor about over-the-counter medicines that may help, like acetaminophen to lower your fever.</td>
        </tr>
        <tr>
        <td><img src="water-bottle.png" height="50" width="50"></td>
        <td><h4><b>Drink water:</b></h4>You lose more water when you're sick. Dehydration can make symptoms worse and cause other health problems.</td>
        </tr>
        </table>
        <a href="https://mohfw.gov.in/">
          <button>Read more</button>
          </a>

        </div>


<div id="para4">
        <div class="para4" style="
        margin-left: 270px;
        margin-top: -425px;
        
        
        ">
           <h3><i><b><u>Vaccination:</b></i></u></h3>
          <table>
            <tr>
              <th>Vaccine Name:</th>
              <th>Covisheild</th>
             
            </tr>
            <tr>
              <th>Approved by:</th>
              <td>Indian government </td>
            </tr>
            <tr>
              <th>Manufactured By:</th>
              <td>Central Drugs Standard Control Organization </td>
            </tr>
            <tr>
              <Th>Total Dose:</Th>
              <td>2 Dose</td>
             </tr>
             <tr>
               <th>Registeration Age:</th>
               <td>18+</td>
             </tr>
          </table>
          
</div>
<div class="para4" style="
margin-left: 838px;
margin-top: -349px;">
          <table>
            <tr>
              <th>Vaccine name:</th>
              <th>Covaxin</th>
        
            </tr>
            <tr>
              <th>Approved by:</th>
              <td>Indian government </td>
            </tr>
            <tr>
              <th>Manufactured By:</th>
              <td>Bharat Biotech </td>
            </tr>
            <tr>
              <Th>Total Dose:</Th>
              <td>2 Dose</td>
             </tr>
             <tr>
               <th>Registeration Age:</th>
               <td>18+</td>
             </tr>
          </table>
            </div>
  </div>
</div>
</div>
<!--cases-->
<div id="cases">
  <div class="titles">
  <h4>Cases&nbsp;&nbsp;&nbsp;</h4>
  </div>
  

<center>
<button class="casesbutton casesbutton1" ><h3>Total Cases</h3><div class="async-population smooth-populate" id="total-cases-in-india">-----
</div></button><br>
<button class="casesbutton casesbutton2"><h3>Active</h3><div class="async-population smooth-populate" id="active-cases-in-india">-----</div></button>
<button class="casesbutton casesbutton3"><h3>Discharged</h3><div class="async-population smooth-populate" id="discharged-cases-in-india">-----</div> </button>
<button class="casesbutton casesbutton4"><h3>Death</h3><div class="async-population smooth-populate" id="deaths-due-to-covid-in-india">-----</div></button><br>
<button class="casesbutton casesbutton5"><h3>Vaccinated Cases</h3><div class="async-population smooth-populate" id="vaccinated-cases-in-india">-----</div></button>
  </center>
  <script src="populate.js"></script>
  <br>
  <br>
  <div style="background-color: #4444;color: #05164c;">
  <marquee width="100%" direction="right" height="50px" >
  
  <h5><b><br>COVID-19 INDIA AS ON:12 july,2021&nbsp;&nbsp;
  COVID-19 VACCINATION AS ON:12 july,2021</b></h5>
  
  </div>
</marquee>
</div>
<!--services-->

<div id="services">
<div class="titles">
  <h4> Services&nbsp;&nbsp;&nbsp;</h4>
  </div>
  <div class="mainservices">
  <section class="services">
    <div class="services2">
      <a href="food.php" style="text-decoration: none; color: #05164c;">
      <img src="dish.png" height="50" width="50">
      <h1><b>Food</b></h1>
      <p>You will  get the contact details providing <br>free food delieveries as well as restaurant food.</p>
    </a>
  </div>
    <div class="services2">
      <a href="qurantine.php" style="text-decoration: none; color: #05164c;">
      <img src="stay-home.png" height="50" width="50">
      <h1><b>Quarantine Camp</b></h1>
      <p>You will get the contact details of hospitals<br> and hotels where rooms are available<br> for Quarantine </p>
      </a>
    </div>
    <div class="services2">
      <a href="doctor.php" style="text-decoration: none; color: #05164c;">
      <img src="laptop.png">
      <h1><b>Doctor's Meeting</b></h1>
      <p>You will contact the doctors online through<br> calling,vedio calling and even text.</p>
      </a>
    </div>
    
  </section>
  <br>
  <section class="services3">

    <div class="services4">
      <a href="vaccine.php" style="text-decoration: none; color: #05164c;">
      <img src="syringe.png" height="50" width="50">
      <h1><b>Vaccine Centre</b></h1>
      <p>You can register for the vaccine in your<br> locality according to your wish </p>
    </a>
    </div>
    <div class="services5">
      <a href="accesory.php" style="text-decoration: none; color: #05164c;">
      <img src="oxygen-mask.png" height="100" width="100">
      <h1><b>Accessories</b></h1>
      <p>You can buy all the essentials for the covid <br>such as mask,oxygen cylinders, PPE Kit,etc</p>
    </a>
    </div>
   </section>
</div>
</div>
<!--donations-->
<div id="donations">
  <div class="titles">
  <h4>Donations&nbsp;&nbsp; </h4>
  </div>
  <div class="donate">
  <img src="donations.jpg" height="300" width="300"> 
  <h2>Help Power Our Work </h2>
  <p><h4>In order to stay independent and do the important work we do, COVITE-19 never takes any money from corporations or government. We rely entirely on support from members like you.</h4></p>
  
  <button class="dbutton">₹100</button>
  <button class="dbutton">₹200</button>
  <button class="dbutton">₹500</button>
  <button class="dbutton">₹1000</button>
  <button class="dbutton">+ More</button>
  <br>
  <form>
    <input type="checkbox" name="monthly" value="monthly"> &nbsp; Make it monthly
  </form>
  <br>
  <a href="payment.php">
  <button class="dbutton2"> Pay with Card</button></a>

    
    <div class="dropdown">
      <button class="dropbtn">Pay with UPI</button>
      <div class="dropdown-content">
        <a href="https://www.phonepe.com/">PhonePe</a>
        <a href="https://pay.google.com/">GPay</a>
        <a href="https://paytm.com/">Paytm</a>
      </div>
    </div>
</div>
</div>


<!--contactus-->
<div id= "contact" > 
  <div class="titles">
  <h4> Contact Us &nbsp;&nbsp;&nbsp;</h4>
  </div>
<div class="details">
    <img class="image" src="pin.png" ><font>Location</font><br>
  <h6>w.g 525 suraj ganj <br> N.N.624 Gopal Nagar</h6>
  <br>
    <img src="mail.png" class="image"><font>Email</font> <br/>
     <h6><a href="mailto:ra98152@gmail.com">ra98152@gmail.com</a><br>
     <br><br>
    <img src="phone-call.png" class="image"> <font>Call</font><br/>
        <h6>9056978524<br>6239075578</h6>
</div>

<div class="forms"  >
<form action="contactus.php" method="POST">
  <input type="text" name="name" placeholder="Your Name" class="formbox" >&nbsp;&nbsp;
  <input type="text" name="email" placeholder="Enter Email" class="formbox" >
<br>
    <input type="text" name="phno" placeholder="Phone Number" class="phno">
<br>
      <textarea id="textarea" name="message" placeholder="Message" rows="6" cols="8" class="message"></textarea>
      <br>
    
    <button class="formsbutton" name="submit"> Send Message</button>
    
    </div>
</div>


    <!---footer-->
<footer id="footer">
  <center>
    <img src="COVIDLOGO.png" height="100" width="150">
    <h5>"corona virus a drasastic disease"</h5>
    <a href="https://www.facebook.com/"> <img src="facebook.png" height =35 width=35> </a>
    <a href="https://www.instagram.com/"> <img src="instagram.png" height =35 width=35> </a>
    <a href="https://twitter.com/?lang=en"> <img src="twitter.png" height =35 width=35> </a>
    <a href="https://in.linkedin.com/"> <img src="linkedin.png" height =35 width=35> </a>
    <a href="https://www.skype.com/en/"> <img src="skype.png" height =35 width=35> </a>
    <BR><BR>
    <h6>Copyright <B>COVITE-19</B>All rights reserved</h6>
    <h6>Designed by HTML,CSS and BOOTSTRAP</h6>
    </center>
</footer>


        </body>


</html>