<?php
// (A) PROCESS ORDER FORM
if (isset($_POST["name"])) {
  require "order.php"; 
  echo $result == "" 
    ? "<div class='notify'>Thank You! We have received your order</div>" 
    : "<div class='notify'>$result</div>" ;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>medication</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#F2F2F2;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#585858;
}
#wrapper h1 p
{
 font-size:18px;
}
#searchBox input[type="text"]
{
 width:450px;
 height:45px;
 padding-left:10px;
 font-size:18px; 
 margin-bottom:15px;
 color:#424242;
 border:none;
}
#searchBox input[type="submit"]
{
 width:100px;
 height:45px;
 background-color:#585858;
 color:white;
 border:none;
}
#searchButton:hover{
  background:#f6e049;
}


</style>
</head>
<center>
			<div class="medical-bar medical-top medical-black medical-large" style="z-index:4"width:100px>
 <a href="medications.php"><h4 align="margin-left"><img src="/selfmedication/image/hospi.jpg" style="width:5%"><strong>SMART MEDICAL PORTAL</strong></h4></a> </center>
 <body>
 <div class="topnav">
  <a class="active" href="medications.php">Home</a>
  <a href="staff.php">Admin</a>
  <a href="PatientDetails.php">Patient Form</a>

  <a href="PatientDetails.php">Medication</a>
   <a href="delever.php">Deliveries</a>
  <a href="appointment.php">Appointments</a>
   <a href="contactus.php">contact us</a>
  <a href="aboutus.php">About us</a>
  <a href="index.php">Chat</a>
          <a href="logout.php" class="btn btn-danger ml-3"> LOGOUT </a>
</div>

 
<h4>Please fill in to order for your delevery</h4>
<form id="orderform" method="post" target="_self">
  <table>
 <div> <label for="name">Name:</label>
  <input type="text" name="name" required value="" placeholder="name" /> 
 </div>
 <div>
  <label for="email">Email:</label>
  <input type="email" name="email" required value="" placeholder="email" /> 
 </div>
 <div>
  <label for="Details">Details of the drugs:</label>
  <input type="Details" name="email" required value="" placeholder="Details" /> 
 </div>

 <div>
  <label for="qty">Quantity Needed:</label>
  <input type="number" name="qty" required value="" placeholder="Quantity" /> 
 </div>
  <input type="submit" value="Place Order"/>
  </table>
</form>


</head>
  <body>