<?php 
include 'connection.php'; 

$Fname =  $Email = $phone = $Comments ="";
$FnameErr =  $EmailErr = $phoneErr = $CommentsErr  = "";
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   header("location: medications.php");
  if (empty($_POST["Name"])) {
  $FnameErr = " Name is required";
  } else {
   $Fname= test_input($_POST["Name"]);
  }

  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
  }

  if (empty($_POST["phone"])) {
     $phoneErr = "phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["Comments"])) {
     $CommentsErr = "Comments  is required";
  } else {
  $Comments = test_input($_POST["Comments"]);
  }


if (!preg_match("/^[a-zA-Z ]*$/",$Fname)) {
  $FnameErr = "Only letters and white space allowed";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

$insert_query= "INSERT INTO `contactus`( `Name`, `Email`, `phone`, `comment`) VALUES ('$Fname','$Email','$phone','$Comments')";
$sql_insert=mysqli_query($connect, $insert_query);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>medication</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/selfmedication/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<style type="text/css">
* {
  box-sizing: border-box;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}
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
  background-color: #4CAF50;
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
.al {
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
  .al, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

* {box-sizing: border-box}

.container {
  width: 100%;
  background-color: #ddd;
}

.cat {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.Deleveries {width: 80%; background-color: #4CAF50;}
.Appointments {width: 60%; background-color: #2196F3;}
.supplies {width: 50%; background-color: #f44336;}
.containerB {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}


</style>

</head>
	

<body>


	<ul>
			
 <a href="medications.php"><h4 align="margin-left"><img src="/selfmedication/image/hospi.jpg" style="width:10%"><strong>SMART MEDICAL PORTAL</strong></h4></a>
</div>
		<!-- Sidebar/menu -->

<nav class="medical-sidebar medical-collapse medical-white medical-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="medical-container medical-row">
    
  </div>
  <li ><a class="active" href="#home">Home</a></li>
  <li><a href="staff.php">Admin</a></li>
  <li><a href="PatientDetails.php">Patient Form</a></li>
  <li><a href="PatientDetails.php">Medications</a></li>
  <li><a href="delever.php">Deliveries</a></li>
   <li><a href="emergency.php">Emergency Cases</a></li>
  <li><a href="appointment.php">Appointments</a></li>
  <li> <a href="contactus.php">contact us</a></li>
  <li><a href="aboutus.php">About us</a></li>
   <li><a href="index.php">Chat</a></li>
     <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a><br><br>
    <li>  <a href="logout.php" class="btn btn-danger ml-3"> LOGOUT </a></li>
    <p>
     
    
    </p>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">

  <!-- page content -->
	<div class="mediacl-main" style="margin-left:10px;margin-top:0px;">

  <!-- Header -->
  <header class="medical-container" style="padding-top:22px">
   <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to smart medication platform.</h1>
  
 
<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>90+</h3>
      <p>patients</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>5+</h3>
      <p>Deliveries</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>10+</h3>
      <p>Appointments</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>10+</h3>
      <p>Emergency cases received</p>
    </div>
  </div>
</div>
</div>
<hr>
<!--container for comments-->


<p align="left">Deleveries</p>
<div class="container">
  <div class="cat Deleveries">80%</div>
</div>

<p align="left">Appointments</p>
<div class="container">
  <div class="cat Appointments">60%</div>
</div>

<p align="left">supplies</p>
<div class="container">
  <div class="cat supplies">50%</div>
</div>
<hr>
<P> Testimonials</P>
<p>Some of the testiminilas from some of our patients.</p>

<div class="containerB">
 <img src="../w3images/bandmember.jpg" alt="Avatar" style="width:90px">
  <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
  <p>John Doe saved us from a web disaster.</p>
</div>

<div class="containerB">
  <img src="../w3images/avatar_g2.jpg" alt="Avatar" style="width:90px">
  <p><span>Rebecca Flex.</span> CEO at Company.</p>
  <p>No one is better than John Doe.</p>
</div>

<hr>

    <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>For more information you can call us on +2560775063295, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="al">
      <img src="/selfmedication/image/jp.png.jpg" style="width:100%">
    </div><br><br>
    <div class="al">
      <form name="contact-form" action="" method="post" id="contact-form">
    <div class="form-group">
          <label for="Name">Name</label>
    <input type="text" class="form-control" name="Name" placeholder="Name" required value="<?php echo $Fname;?>
                ">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="Email" placeholder="Email" required  value="<?php echo  $Email;?>
                ">
    </div>
    <div class="form-group">
    <label for="Phone">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Phone" required  value="<?php echo   $phone;?>
                ">
    </div>
    <div class="form-group">
    <label for="comments">Comments</label>
    <textarea name="comment" class="form-control" rows="3" cols="28" rows="5" placeholder="Comments"  value="<?php echo $Comments;?>
                "></textarea> 
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
  
    </form>
    <div class="response_msg"></div>
    </div>
    </div>
    </div>
  
 <!-- End page content -->
<script>

// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function medical_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function medical_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>


</body>
</html>
