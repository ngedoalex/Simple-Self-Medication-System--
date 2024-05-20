
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
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
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
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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
<style>

</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>Smart Medical Portal was established in June 2022 by the Ngedo Alex Saul, from kyambogo university Uganda</p>
  <p>The main aim of the portal is to ease access to the medical doctors  from your office, <br>in your sitting room, garden, as you are travelling. It also helps to reduce on the risks<br> of self Medication by use of the search egine included in the portal , it eases <br>making appointments with the and booking the doctor you are intrested to meet.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">

     <center> <img src="/selfmedication/image/Female.png" alt="Jane" style="width:20%"></center>
      <div class="container">
        <h2>Jane Doe</h2>
      <p class="title">MANAGING DIRECTOR</p>
        <p>For general inquires about all issues corncerning health</p>
        <p>jane@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
       <center><img src="/selfmedication/image/Doctor-Male.png" alt="alex" style="width:20%"></center>
     
      <div class="container">
        <h2>Mike Ross</h2>
      <p class="title">DOCTOR</p>
        <p>Iam a doctor </p>
        <p>mike@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
         <center><img src="/selfmedication/image/Pharmacist.png" alt="fred" style="width:20%"></center>
      <div class="container">
        <h2>fred</h2>
        <p class="title">Pharmacist</p>
        <p>Iam a specialist in medicine</p>
        <p>fred@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>
</div>

</body>

</html>
