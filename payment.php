<html>
    <head>
        <title>Payment</title>
        <style>
            .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 0px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
        </style>
        </head>
        <body>
            <div class="row">
                <div class="col-50">
                  <h1>Details</h1>
                  <label for="fname"><img src="man.png" height="20" width="20">&nbsp;Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Enter Your Name">
                  <label for="email"><img src="email.png" height="20" width="20">&nbsp; Email</label>
                  <input type="text" id="email" name="email" placeholder="Enter Your Email">
                  <label for="adr"> <img src="phone.png" height="20" width="20">&nbsp; Phone Number</label>
                  <input type="text" id="Phone" name="phone" placeholder="Enter your Phone Number">
                  <label for="adr"> <img src="house.png" height="20" width="20">&nbsp; Address</label>
                  <input type="text" id="adr" name="address" placeholder="Enter Your Address">
                  <label for="city"> <img src="building.png" height="20" width="20">&nbsp; City</label>
                  <input type="text" id="city" name="city" placeholder="Enter Your City">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="state"> <img src="bank.png" height="20" width="20">&nbsp; State</label>
                      <input type="text" id="state" name="state" placeholder="State">
                    </div>
                    <div class="col-50">
                      <label for="zip"> <img src="zip.png" height="20" width="20">&nbsp; Zip</label>
                      <input type="text" id="zip" name="zip" placeholder="Zip Code">
                    </div>
                  </div>
                </div>
        <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">
            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
              <img src="visa.png" height="40" width="40">&nbsp;
              <img src="credit.png" height="40" width="40">
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="Enter your name">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
  
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
                <div class="col-50">
                  <label for="cvv">Amount</label>
                  <input type="text" id="Amount" name="amount" placeholder="100">
                </div>
              </div>
            </div>
  
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Confirm
          </label>
          </form>
          <button class="btn" onclick="myFunction()">Submit</button>
          <p id="demo"></p>
          <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Your payment is in process";
}
</script>
        
      </div>
    </div>
  </div>
  </body>
  </html>