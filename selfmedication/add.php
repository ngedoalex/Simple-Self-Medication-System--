<?php
include 'connection.php';
if (isset($_POST['Submit'])){
//echo 'active';
$Fname=$_POST['FirstName'];
$Lname=$_POST['LastName'];
$contact=$_POST['contact'];
$address=$_POST['Address'];
$DateOfBirth=$_POST['DateOfBirth'];
$position=$_POST['position'];
$sex=$_POST['Sex'];
$language=$_POST['language'];
$email=$_POST['email'];
$MaritalStatus=$_POST['maritalstatus'];



$insert_query="INSERT INTO `staff`( `FirstName`, `LastName`, `contact`, `Address`, `DateOfBirth`, `position`, `Sex`, `language`, `email`, `maritalstatus`) VALUES ('$Fname', '$Lname', '$contact', '$address', '$DateOfBirth', '$position', '$sex', '$language', '$email', '$MaritalStatus')";
$sql_insert=mysqli_query($connect, $insert_query);
//if($sql_insert==TRUE){
//echo 'success';
//}else{
//echo 'failed';
//}

}

?>






<html>
<head>
<title>medication</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
<center>
   <a href="medications.php"><h4 align="margin-left"><strong>SMART MEDICAL PORTAL</strong></h4></a>

 </center>
 <body>
  
  <div class="dropdown">
    <button class="dropbtn">MENU</button>
    <div class="dropdown-content">
    <a href="medications.php">Home</a>
   
     
    <a href="PatientDetails.php">Patient Details</a>
    <a href="prescription.php">Medications</a>
       <a href="delever.php">Deleveries</a>
  <a href="appointment.php">Appointments</a>
   <a href="#contact">contact us</a>
  <a href="#about">About us</a>
          <a href="logout.php" class="btn btn-danger ml-3"> LOGOUT </a>

  </div>
</div>
<center>
 <form id="form1" name="form1" method="post" action="">



  <table width="349">
    <tr>
      <td colspan="2"><div align="center"><strong>Staff Members </strong></div></td>
      </tr>
    <tr>
      <td><div align="center">First Name </div></td>
      <td><label>
        <input type="text" name="FirstName">
      </label></td>
    </tr>
    <tr>
      <td><div align="center">Last Name</div></td>
      <td><label>
        <input type="text" name="LastName">
      </label></td>
    </tr>
    <tr>
      <td><div align="center">Contact</div></td>
      <td><input type="text" name="contact"></td>
    </tr>
    <tr>
      <td><div align="center">Address</div></td>
      <td><input type="text" name="Address"> </td>
    </tr>
    <tr>
      <td><div align="center">Language</div></td>
      <td><input type="text" name="language"></td>
    </tr>
    <tr>
      <td><div align="center">Email</div></td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td><div align="center">Date Of Birth</div></td>
      <td><input type="text" name="DateOfBirth"></td>
    </tr>
    <tr>
      <td><div align="center">Marital Status</div></td>
      <td><input type="text" name="maritalstatus"></td>
    </tr>
    <tr>
      <td><div align="center">Position</div></td>
      <td><input type="text" name="position"></td>
    </tr>
    <tr>
      <td><div align="center">Sex</div></td>
      <td><input type="text" name="Sex"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="save">
      </label></td>
    </tr>
  </table>
  </form>
</center>
 </body>
</html>