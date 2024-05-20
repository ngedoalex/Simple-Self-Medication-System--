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
   header("location: contactus.php");
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
<html>
<head>
<title>medication</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
#loading-img{
    display:none;
    }
    .response_msg{
    margin-top:10px;
    font-size:13px;
    background:#E5D669;
    color:#ffffff;
    width:250px;
    padding:3px;
    display:none;
    }

</style>
</head><center>

  <a href="dashboard.php" ><img src=""></a>
   <a href="medications.php" ><h4><img src="/selfmedication/image/hospi.jpg" style="width:5%"><strong>SMART MEDICAL PORTAL</strong></h4></a>
</center>
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
    <img src="img/loading.gif" id="loading-img">
    </form>
    <div class="response_msg"></div>
    </div>
    </div>
    </div>
  
    </body>
    </html>
       