<?php 
include 'connection.php'; 
$Fname = $Lname = $contact = $email = $address = $DateOfBirth = $Gender = $MaritalStatus = $Emergency ="";
$FnameErr = $LnameErr = $contactErr = $emailErr = $addressErr = $DateOfBirthErr = $GenderErr = $MaritalStatusErr = $EmergencyErr = "";
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   header("location: diagnosis.php");
  if (empty($_POST["FirstName"])) {
  $FnameErr = "Fisrt Name is required";
  } else {
   $Fname= test_input($_POST["FirstName"]);
  }

  if (empty($_POST["LastName"])) {
    $LnameErr = "Last Name is required";
  } else {
    $Lname = test_input($_POST["LastName"]);
  }

  if (empty($_POST["contact"])) {
     $contactErr = "contact is required";
  } else {
    $contact = test_input($_POST["contact"]);
  }

  if (empty($_POST["Email"])) {
     $emailErr = "Email  is required";
  } else {
  $email = test_input($_POST["Email"]);
  }

  if (empty($_POST["Address"])) {
    $addressErr  = "Address is required";
  } else {
     $address = test_input($_POST["gender"]);
  }
   if (empty($_POST["DateOfBirth"])) {
    $DateOfBirthErr = "D.O.B is required";
  } else {
    $DateOfBirth  = test_input($_POST["DateOfBirth"]);
  }
   if (empty($_POST["Gender"])) {
    $GenderErr = "Gender is required";
  } else {
   $Gender = test_input($_POST["Gender"]);
  }
   if (empty($_POST["MaritalStatus"])) {
    $MaritalStatusErr = "Marital Status is required";
  } else {
    $MaritalStatus = test_input($_POST["MaritalStatus"]);
  }
    if (empty($_POST["EmergencyPersonDetails"])) {
    $EmergencyErr = "Emergency Person Details Status is required";
  } else {
    $Emergency = test_input($_POST["EmergencyPersonDetails"]);
  }

if (!preg_match("/^[a-zA-Z ]*$/",$Fname)) {
  $FnameErr = "Only letters and white space allowed";
}
if (!preg_match("/^[a-zA-Z ]*$/",$Lname)) {
  $LnameErr = "Only letters and white space allowed";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

$insert_query= "INSERT INTO `patientdetails`( `FirstName`, `LastName`, `contact`, `Email`, `Address`, `DateOfBirth`, `Gender`, `MaritalStatus`, `EmergencyPersonDetails`) VALUES ('$Fname', '$Lname','$contact','$email','$address','$DateOfBirth','$Gender','$MaritalStatus','$Emergency')";
$sql_insert=mysqli_query($connect, $insert_query);

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
<body>
  <br>
  <h3>Please fill in your details inorder to access the diagnosis form</h3>
<center>
<form  name="Form1" method="post" onsubmit="return validateForm()"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table  border="0" bordercolor="#684ED1" >
    <tr>
       <td><div align="right">  First Name: </div></td>
       <td><input type="text" name="FirstName"  />
        <div class="validation_message"><?php echo $FnameErr ?></div> 
      </label></td>  
    </tr>
    <tr>
      <td><div align="right"> Last Name: </div></td>  
      <td><input type="text" name="LastName" value="<?php echo $Lname;?>" />
         <div class="validation_message"><?php echo $LnameErr ?></div> 
      </label></td> 
    </tr>
   
    <tr>
 <td><div align="right"> contact: </div></td>
       <td><input type="text" name="contact" value="<?php echo $contact;?>"/>
        <div class="validation_message"><?php echo $contactErr ?></div> 
      </label></td>
    </tr>
   
    <tr>
           <td><div align="right">Email:</div></td>
        <td><input type="text" name="Email" value="<?php echo $email;?>"/>
        <div class="validation_message"><?php echo $emailErr ?></div> 
      </label></td>
    </tr>
    
      <tr>
      <td><div align="right"> Address:</div></td>
        <td><input type="text" name="Address" value="<?php echo $address;?>"/>
         <div class="validation_message"><?php echo $addressErr ?></div> 
      </label></td>
    </tr>
    
      <tr>
     <td><div align="right"> D.O.B:</div></td>

        <td><input type="date" id="start" name="DateOfBirth"
       value=""
       min="2022-01-01" max="2022-12-31" placeholder="Enter appointment Date" name="DateOfBirth" value="<?php echo $DateOfBirth;?>
                "> <div class="validation_message"><?php echo $DateOfBirth ?>
              </div>
      </label></td>
      
    </tr>
    <tr>
       <td><div align="right">Gender:</div></td>  
       <td><label>
<input type="radio" name="Gender"  value="<?php echo $Gender;?>">Female
<input type="radio" name="Gender"  value="<?php echo $Gender;?>">Male
<input type="radio" name="Gender"  value="<?php echo $Gender;?>">Other
 </label></td>
</tr>
     
   
      <tr>
      
      <td><div align="right">marital status:</div></td>
       <td><label>
      <input type="radio" name="MaritalStatus"  value="<?php echo $MaritalStatus;?>">Single
       <input type="radio" name="MaritalStatus"  value="<?php echo $MaritalStatus;?>">Married 
      </label></td>
    </tr>
     
     <tr>
     
   <td><div align="right">Emergency Person Details:</div></td>
      <td><label><input type="text" name="EmergencyPersonDetails" value="<?php echo $Emergency;?>"/>
          <div class="validation_message"><?php echo $EmergencyErr ?></div> 
      </label></td> 
    
    </tr>
    <tr>
      <td><label></label></td>
     <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>

</center>
<script type="text/javascript">
  function validateForm() {
  var x = document.forms["Form1"]["FirstName"].value;
  if (x == "") {
    alert("First Name must be filled out");
    return false;
  }
} 
  function validateForm() {
  var y = document.forms["Form1"]["LastName"].value;
  if (y == "") {
    alert("Last Name must be filled out");
    return false;
  }
} 
  function validateForm() {
  var b = document.forms["Form1"]["contact"].value;
  if (b == "") {
    alert("contact must be filled out");
    return false;
  }
} 
  function validateForm() {
  var a = document.forms["Form1"]["Email"].value;
  if (a == "") {
    alert("Email must be filled out");
    return false;
  }
} 
  function validateForm() {
  var m = document.forms["Form1"]["Address"].value;
  if (m == "") {
    alert("Address must be filled out");
    return false;
  }
} 
  function validateForm() {
  var p = document.forms["Form1"]["DateOfBirth"].value;
  if (p == "") {
    alert("D.O.B must be filled out");
    return false;
  }
} 
 function validateForm() {
  var h = document.forms["Form1"]["Gender"].value;
  if (h == "") {
    alert("Gender must be filled out");
    return false;
  }
} 
 function validateForm() {
  var l = document.forms["Form1"]["MaritalStatus"].value;
  if (l == "") {
    alert("Marital Status must be filled out");
    return false;
  }
} 
function validateForm() {
  var l = document.forms["Form1"]["EmergencyPersonDetails"].value;
  if (l == "") {
    alert("Emergency Person Details Status must be filled out");
    return false;
  }
} 




</script>

;
</script>

</body>

</html>
