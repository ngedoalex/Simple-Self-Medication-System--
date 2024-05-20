
<!DOCTYPE html>
<html>
<head>
<title>medication</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
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
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
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

</style>



</head>

 <body>
  <center>
 
 <a href="medications.php"><h4 align="margin-left"><img src="/selfmedication/image/hospi.jpg" style="width:5%"><strong>SMART MEDICAL PORTAL  </strong></h4></a>
 
 </center>
<div class="topnav">
  <a class="active" href="medications.php">Home</a>
  <a href="staff.php">Admin</a>
  <a href="PatientDetails.php">Patient Form</a>
  
  <a href="PatientDetails.php">Medication</a>
   <a href="delever.php">Deliveries</a>
 <a href="emergency.php">Emergency Cases</a>
  <a href="appointment.php">Appointments</a>
   <a href="contactus.php">contact us</a>
  <a href="aboutus.php">About us</a>
  <a href="index.php">Chat</a>
        <a href="logout.php"  class="btn btn-danger ml-3"> LOGOUT </a></div>

  </div>

</div>
<center>

<center>
  <h2>Meet The Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <center><img  align="center" src="/selfmedication/image/Female.png" alt="Jane" style="width:50%"></center>
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">MANAGING DIRECTOR</p>
        <p>For general inquires about all issues corncerning<br> health</p>
        <p>jane@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <center><img src="/selfmedication/image/Doctor-Male.png" alt="alex" style="width:50%"></center>
      <div class="container">
        <h2>Alex</h2>
        <p class="title">DENTISIT</p>
        <p>Iam a specialist in carryingout treatment of<br> the teeth</p>
        <p>alex@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <center><img src="/selfmedication/image/Pharmacist.png" alt="fred" style="width:50%"></center>
      <div class="container">
        <h2> Fred </h2>
        <p class="title">Pharmacist</p>
        <p>Iam a specialist in medicine</p>
        <p>fred@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <center><img src="/selfmedication/image/Female.png" alt="cathy" style="width:50%"></center>
      <div class="container">
        <h2> Cathy </h2>
        <p class="title">LAB TECHNICIAN</p>
        <p>Iam a specialist in lab test <br>tests</p>
        <p>cathy@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <center><img src="/selfmedication/image/Female.png" alt="fred" style="width:50%"></center>
      <div class="container">
        <h2> Barbra </h2>
        <p class="title">DOCTOR</p>
        <p>Iam a doctor </p>
        <p>fred@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
     <center> <img src="/selfmedication/image/Doctor-Male.png" alt="mike" style="width:50%"></center>
      <div class="container">
        <h2>Mike charles</h2>
        <p class="title">SURGEON</p>
        <p>Iam a specailist in carryingout surgery of <br>the muslces</p>
        <p>mike@gmail.com</p>
        <p><button class="button"><a href="tel:+256705712856">Call me at +256705712856</a></button></p>
      </div>
    </div>
  </div>
</div>

</center>
</body>


</html>
</center>
</body>
</html>