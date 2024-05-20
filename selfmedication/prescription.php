<?php
include 'connection.php';




?>


<!DOCTYPE html>
<html>
<head>
<title>medication</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>

</head>

 <body>
  

  <ul>
      
 <a href="medications.php"><h4 align="margin-left"><img src="/selfmedication/image/hospi.jpg" style="width:5%"><strong>SMART MEDICAL PORTAL</strong></h4></a>
</div>
    <!-- Sidebar/menu -->

<nav class="medical-sidebar medical-collapse medical-white medical-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="medical-container medical-row">
    
  </div>
  <li><a class="active" href="medications.php">Home</a></li>
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
     
 </div>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
 <center><h4><strong>Thank you for booking your appointment, we shall let you know when the Doctor to work <br>on is available via your email or contact</strong></h4>
   <p>&nbsp;</p>
 </center> 
  </div>
</body>
</html>