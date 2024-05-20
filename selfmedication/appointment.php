<?php 
include 'connection.php';
$Fname =  $phone = $reason = $Email = $date = $area = $city = $district ="";
$FnameErr = $phoneErr = $reasonErr = $EmailErr = $addressErr = $dateErr = $areaErr = $cityErr = $districtErr = "";
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   header("location: prescription.php");
  if (empty($_POST["FullName"])) {
  $FnameErr = "Full Name is required";
  } else {
   $Fname= test_input($_POST["FullName"]);
  }

  if (empty($_POST["Phone"])) {
    $phoneErr = "phone number  is required";
  } else {
    $phone = test_input($_POST["Phone"]);
  }

  if (empty($_POST["reason"])) {
     $reasonErr = "contact is required";
  } else {
    $reason = test_input($_POST["reason"]);
  }

  if (empty($_POST["Email"])) {
     $emailErr = "Email  is required";
  } else {
  $email = test_input($_POST["Email"]);
  }

  if (empty($_POST["date"])) {
    $dateErr  = "date is required";
  } else {
     $date = test_input($_POST["date"]);
  }
   if (empty($_POST["area"])) {
    $areaErr = "area is required";
  } else {
    $area  = test_input($_POST["area"]);
  }
   if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city  = test_input($_POST["city"]);
  }
    if (empty($_POST["district"])) {
    $districtErr = "district is required";
  } else {
    $district  = test_input($_POST["district"]);
  }
  if (!preg_match("/^[a-zA-Z ]*$/",$Fname)) {
  $FnameErr = "Only letters and white space allowed";
}
if (!preg_match("/^[a-zA-Z ]*$/",$district)) {
$districtErr = "Only letters and white space allowed";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
$insert_query= "INSERT INTO `appointment`(`FullName`, `Phone`, `reason`, `Email`, `date`, `area`, `city`, `district`) VALUES ('$Fname','$phone','$reason','$Email',' $date','$area',' $city','$district')";
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

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 10px;
  padding: 0 8px;

}

@media screen and (max-width: 50px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
}

.button:hover {
  background-color: #555;
}
label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}

</style>
</head>
<center>
			<div class="medical-bar medical-top medical-black medical-large" style="z-index:4"width:100px>

 <a href="medications.php"><h4 align="margin-left"><img src="/selfmedication/image/hospi.jpg" style="width:5%"><strong>SMART MEDICAL PORTAL </strong></h4></a> </center>
 <body>
 <div class="topnav">
  <a class="active" href="medications.php">Home</a>
  <a href="staff.php">Admin</a>
  <a href="PatientDetails.php">Patient Form</a>
  <a href="PatientDetails.php">Medication</a>
   <a href="delever.php">Deleveries</a>
  <a href="appointment.php">Appointments</a>
   <a href="contactus.php">contact us</a>
  <a href="aboutus.php">About us</a>
  <a href="index.php">Chat</a>
          <a href="logout.php" class="btn btn-danger ml-3"> LOGOUT </a>
</div>
<body>
  <div class="inner-layer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <div class="content">
           <h4>BOOK YOUR SLOT NOW  FROM OUR PROFESSIONAL DOCTORS ACROSS THE WORLD AND SAVE YOUR TIME AND LIFE</h4>
            <p><strong>Book and manage your appointments securely and <br>conveniently online without the need to call the office.</strong></p>
            <p>In this first phase of our online booking tool launch,available<br>  appointments will   include  the follow-ups and certain doctor  <br>administered treatments.  Other treatments such as IV therapy,<br>injections and blood draws are not at this time bookable online.</p>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="form-data">
            <div class="form-head">
              

            </div>
           <form  name="Form1" method="POST" onsubmit="return validateForm()"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-body">
              <p>APPOINTMENT FORM</p>
              <div class="row form-row">

               Full Name: <input type="text" placeholder="Enter your Full name" class="form-control" name="FullName" value="<?php echo $Fname;?>
                ">
                 <div class="validation_message"><?php echo $FnameErr ?></div> 
              </div><br>
              <div class="row form-row">
              Mobile Number:<input type="text" placeholder="Enter your mobile number" class="form-control" name="Phone" value="<?php echo $phone;?>
                ">
                 <div class="validation_message"><?php echo $phoneErr ?></div> 
              </div><br>
              <div class="row form-row">
                Reason for appointment:<input type="text" placeholder="Reason for your appointment" class="form-control" name="reason" value="<?php echo $reason;?>
                ">
                 <div class="validation_message"><?php echo $reasonErr ?></div> 
              </div><br>
               <div class="row form-row">
                Email:<input type="text" placeholder="Enter your Email" class="form-control" name="Email" value="<?php echo $Email;?>
                ">
                 <div class="validation_message"><?php echo $EmailErr ?></div> 
              </div><br>
                <div class="row form-row">
               
      <div class="row form-row">
        Date:<input type="date" id="start" name="date"
       value=""
       min="2022-01-01" max="2022-12-31" placeholder="Enter appointment Date" name="date" value="<?php echo $date;?>
                "> <div class="validation_message"><?php echo $dateErr ?></div> </div><br>
              </div>

              <h6>Address Details</h6>
              <div class="row form-row">
                <div class="ccol-sm-6">
                   Area you stay:<input type="text" placeholder="Enter your Area" class="form-control" name="area" value="<?php echo $area;?>
                ">
                 <div class="validation_message"><?php echo $areaErr ?></div> 
                </div><br>
                <div class="ccol-sm-6">
                   City:<input type="text" placeholder="Enter your City" class="form-control" name="city" value="<?php echo $city;?>
                ">
                 <div class="validation_message"><?php echo $cityErr ?></div> 
                </div><br>
                  <div class="ccol-sm-6">
                 District/Division:  <input type="text" placeholder="Enter your District" class="form-control" name="district" value="<?php echo $district;?>
                ">
                 <div class="validation_message"><?php echo $districtErr ?></div> 
                </div>
              </div><br>
               <div class="row form-row">
               <input type="submit" name="Submit" value="Submit" />
                 </strong></buttton>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script >
<script type="text/javascript">
  function validateForm() {
  var x = document.forms["Form1"]["FullName"].value;
  if (x == "") {
    alert("Full Name must be filled out");
    return false;
  }
} 
  function validateForm() {
  var y = document.forms["Form1"]["Phone"].value;
  if (y == "") {
    alert("Phone must be filled out");
    return false;
  }
} 
  function validateForm() {
  var b = document.forms["Form1"]["reason"].value;
  if (b == "") {
    alert("reason must be filled out");
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
  var m = document.forms["Form1"]["date"].value;
  if (m == "") {
    alert("date must be filled out");
    return false;
  }
} 
  function validateForm() {
  var p = document.forms["Form1"]["area"].value;
  if (p == "") {
    alert("area of stay must be filled out");
    return false;
  }
} 
 function validateForm() {
  var h = document.forms["Form1"]["city"].value;
  if (h == "") {
    alert("city must be filled out");
    return false;
  }
} 
 function validateForm() {
  var l = document.forms["Form1"]["district"].value;
  if (l == "") {
    alert("district must be filled out");
    return false;
  }
} 



</script>


</body>
</html>