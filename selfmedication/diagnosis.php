<?php
$connect =mysqli_connect("localhost","root", "", "selfmedication");
$output="";
if(isset($_POST['search'])){
  $input =$_POST['input'];
  if(!empty($input)){
$query ="SELECT *FROM test WHERE signs LIKE '%$input%' or symptoms LIKE '%$input%'";
$res =mysqli_query($connect, $query);

$output="

<table class='table table-bordered table-striped'>

<tr>

<th>signs</th>
<th>symptoms</th>
<th>dose</th>
<th>drugs administered</th>
</tr>
";

if(mysqli_num_rows($res)<1){
  $output .="
<tr>
<td colspan='6' class='text-center'>No Data found you can please contact a doctor for further inquuries</td>
</tr>


  ";
  }else{
    while($row =mysqli_fetch_array($res)){
         

         $output .="
              
              <tr>
               <td>".$row['signs']."</td>
                <td>".$row['symptoms']."</td>
                 <td>".$row['dose']."</td>
                    <td>".$row['drugsAdministered']."</td>


         ";

    }
  }
}

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
.searchBox{
  float:left;
}
input[type=text]{
  padding:6px;
  margin: 8px;
}
#searchButton:hover{
  background:#f6e049;
}
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
</style>
</head>
<center>
			<div class="medical-bar medical-top medical-black medical-large" style="z-index:4"width:100px>
 <a href="medications.php"><h4 align="margin-left"><img src="/selfmedication/image/hospi.jpg" style="width:10%"><strong>SMART MEDICAL PORTAL</strong></h4></a> </center>
 <body>
 <div class="topnav">
  <a class="active" href="medications.php">Home</a>
  <a href="staff.php">Admin</a>
  <a href="PatientDetails.php">Patient Form</a>
  <a href="staff.php">staff</a>
  <a href="PatientDetails.php">Medication</a>
   <a href="delever.php">Deliveries</a>
  <a href="appointment.php">Appointments</a>
   <a href="#contact">contact us</a>
  <a href="#about">About us</a>
  <a href="index.php">Chat</a>
          <a href="logout.php" class="btn btn-danger ml-3"> LOGOUT </a>
</div>


</head>
  <body>
<p><strong>Please fill in the signs & symptoms:</p></strong>
<div class="container d-flex justify-content-center">
  <div class="col-md-12">
    <form method="POST">
      <div class="col-md-9">
         <center> 
        <div class="searchBox">
        <form>
      <input type="text" name="input" class="form-contol" placeholder="Search...">

          <input type="submit" name="search" class="btn btn-info" value="Search">
      </form>
    </div>

       
    </form>
    
  </center>
    <br><br><br>
<?php

echo $output;

?>

  </div>
</div>
 </body>
</html>
