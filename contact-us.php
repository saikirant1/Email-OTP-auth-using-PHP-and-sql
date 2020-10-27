<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #697ef5;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="main-home.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="signup-user.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign Up</a>
    <a href="login-user.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
    <a href="contact-us.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="main-home.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="signup-user.php" class="w3-bar-item w3-button w3-padding-large">Sign Uo</a>
    <a href="login-user.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
	 <a href="contact-us.php" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
    
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Swing by for a cup of coffee, or leave us a message:</h1>
  <p class="w3-xlarge">Queries to be resolved within 24 hours</p>
  
</header>

<div class="container">
  <div style="text-align:center">
    <h1>Contact Us</h1>
    
  </div>
  <div class="row">
    <div class="column">
      <img src="map.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Your Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">
        <label for="mobno">Mobile Number</label>
        <input type="text" id="mobno" name="mobno" placeholder="Mobile Number...">
        <label for="country">Country</label>
        <label for="mail">Mail</label>
		<input type="text" id="mail" name="mail" placeholder="Enter mail...">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: Enjoy the moment</h1>
</div>

<!-- Footer -->
 
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32"><pre>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>     <i class="fa fa-instagram w3-hover-opacity"></i>     <i class="fa fa-snapchat w3-hover-opacity"></i>     <i class="fa fa-pinterest-p w3-hover-opacity"></i>     <i class="fa fa-twitter w3-hover-opacity"></i>     <i class="fa fa-linkedin w3-hover-opacity"></i></pre>
 </div>
 <hr/>
 <i class="fa fa-map-marker" style="width:30px"></i>
Tirupati, A.P.
<br><hr>

<i class="fa fa-phone" style="width:30px"></i>
Phone :+91 9632355877
<br><hr>

<i class="fa fa-envelope" style="width:30px"> </i>
Email :saikriant1234@gmail.com
<br><hr>
 
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
