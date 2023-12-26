<?php include("database.php"); ?>

 <!DOCTYPE html>
<html>

<head>
  <title>
    Hospital Management
  </title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">

    <link rel="stylesheet " href="css/nav.css">
    <link rel="stylesheet " href="css/style.css">
  <link rel="stylesheet" href="css/about.css" />
  <link rel="stylesheet" href="css/appoint.css" />

  <style>
    body {
      background-image: url("images/background.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      /* height:750px; */
    }
  </style>
</head>

<body>
  <header>
      <div class="container">
          <div class="logo-box">
              <a href="home.html">
                  <img class="logo" src="images/favicon.png">
              </a>
          </div>
          <nav>
              <ul>
                  <li><a href="home.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="service.html">Services</a></li>
                  <li><a href="doctor.html">Doctor</a></li>
                  <li><a href="appointment.php">Appointment</a></li>
                  <li><a href="login.html">Login</a></li>
                  <!-- <li><a href="signup.html">signup</a></li> -->
              </ul>
          </nav>
      </div>
  </header><br><br>


<div>
  <h1 class="appoin_head">Book Your Slot</h1>
</div>
<br>

<!-- <div class="cont"> -->


  <div class="appoin_container">
    <form action="#" method = "POST">
      <div class="row">
        <div class="col-25">
          <label for="name">Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="name" placeholder="Your name..">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="add">Address</label>
        </div>
        <div class="col-75">
          <input type="text" id="add" name="address" placeholder="Your Address..">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="Gender">Gender</label>
        </div>
        <div class="col-75">
          <select id="Gender" name="gender">
          <option value="Not Selected">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="ph_no">Phone no.</label>
        </div>
        <div class="col-75">
          <input type="number" id="ph_no" name="phone_no" placeholder="Your phone no..">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="birth_date">DOB</label>
        </div>
        <div class="col-75">
          <input type = "date" id="birth_date" name="DOB" placeholder="Your date of birth.."></textarea>
        </div>
      </div>

      <div class="row">
        <input type="submit" value="Submit" name = "submit">
      </div>
    </form>
  </div>
  </body>
 <br><br>


<!--PHP CODE-->

<?php
if(isset ($_POST['submit']))
{
  $Name    =  $_POST['name'];
  $Address =  $_POST['address'];
  $Gender  =  $_POST['gender'];
  $Ph_no   =  $_POST['phone_no'];
  $DOB     =  $_POST['DOB'];

 $query =   "INSERT INTO patients_appointment VALUES('$Name', '$Address', '$Gender', '$Ph_no', '$DOB')";

 $data = mysqli_query($conn, $query);

 if($data)
 {
  // echo " Your appoinment book successfully..";
 echo '<script>alert("Your appointment book successfully..")</script>'; 
 }
 else
 {
  echo "Failed";
 }
}
?>



<!--footer section-->
<section class="footer">
  <div class="footer-row">
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul class="links">
          <li><a href="first.html">Home </a></li>
        <li><a href="about.html">About </a></li>
        <li><a href="doctor.php">Doctors</a></li>
        <li><a href="service.html">Service</a></li>
        <li><a href="appointment.php">appointment</a></li>
        <li><a href="appointment.php">Login/Signup</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Explore</h4>
      <ul class="links">
        <li><a href="#">Free Designs</a></li>
        <li><a href="#">Latest Designs</a></li>
        <li><a href="#">Themes</a></li>
        <li><a href="#">Popular Designs</a></li>
        <li><a href="#">Art Skills</a></li>
        <li><a href="#">New Uploads</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Legal</h4>
      <ul class="links">
        <li><a href="#">Customer Agreement</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">GDPR</a></li>
        <li><a href="#">Security</a></li>
        <li><a href="#">Testimonials</a></li>
        <li><a href="#">Media Kit</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Contact us </h4>
      <p>
        Kindly fill all the to connect with us..
      </p>
      <form action="#">
        <input type="email" placeholder="Your email" required><br>
     <input type="number" placeholder="Your Ph no." required>
        <button type="submit">SUBMIT</button>
      </form>
      <div class="icons">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-github"></i>
      </div>
    </div>
  </div>
</section>

</html>