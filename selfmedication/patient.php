<?php 
include 'connection.php'; 
//deleting
//if(isset($_REQUEST['del'])){
//$PKID=$_REQUEST['del'];

//echo $PKID;
//$sql_DELETE="DELETE FROM PatientDetails where  patientID ='$PKID'";

//$sql_query=mysqli_query($connect, $sql_DELETE);
//}

//if(isset($_REQUEST['UPDATE_RECORD'])){
//$PKID=$_REQUEST['UPDATE_RECORD'];
//$sql_query="SELECT *from PatientDetails where patientID='$PKID'";//sql fetchh query
//$sql_update=mysqli_query($connect, $sql_query);//excuting
//$row=mysqli_fetch_assoc($sql_update); //reteiving


//echo $PKID;
?>
<!--<form id="form1" name="form1" method="post" action="">
  <table  border="0" bordercolor="#684ED1" bgcolor="#0033FF">
    <tr>
      <td colspan="2">UPDATE RECORD </td>
    </tr>
    <tr>
      <td><div align="right">FirstName:</div></td>
      <td><label>
        <input type="text" value="<?php echo $row['FirstName'];?>" name="Name" />
      </label></td>
    </tr>
   <tr>
     <td><div align="center">MiddleName </div></td>
     <td><label>
       <input type="text"value="<?php echo $row['FirstName'];?>"  name="MiddleName">
     </label></td>
   </tr>
   <tr>
     <td> <div align="center">LastName </div></td>
     <td><label>
       <input type="text" value="<?php echo $row['FirstName'];?>" name="LastName">
     </label></td>
   </tr>
   <tr>
     <td><div align="center">contact</div></td>
     <td><label>
       <input type="text"value="<?php echo $row['FirstName'];?>"  name="contact">
     </label></td>
   </tr>
   <tr>
     <td><div align="center">Email</div></td>
     <td><label>
       <input type="text"value="<?php echo $row['FirstName'];?>"  name="Email">
     </label></td>
   </tr>
   <tr>
     <td><div align="center">Address</div></td>
     <td><label>
       <input type="text"value="<?php echo $row['FirstName'];?>"  name="Address">
     </label></td>
   </tr>
   <tr>
     <td><div align="center">DateOfBirth </div></td>
      <td><label>
       <input type="text"value="<?php echo $row['FirstName'];?>"  name="DateOfBirth">
     </label></td>
   </tr>
   <tr>
     <td><div align="center">Sex</div></td>
      <td><label>
       <input type="text" value="<?php echo $row['FirstName'];?>" name="Sex">
     </label></td>
   </tr>
   <tr>
     <td><div align="center">MaritalStatus </div></td>
     <td><label>
      
         <input type="text"value="<?php echo $row['FirstName'];?>"  name="MaritalStatus">
        
     </label></td>
   </tr>
   <tr>
     <td><div align="center">EmergencyPersonDetails </div></td>
     <td><form name="form1" method="post" action="">
       Name<br>
       <label>
       <input type="text"value="<?php echo $row['FirstName'];?>"  name="EmergencyPersonDetails">
       </label>
     </form>       
       <form name="form2" method="post" action="">
         Contact<br>
         <label>
         <input type="text" name="EmergencyPersonDetails">
         </label>
       </form>       
       <form name="form3" method="post" action="">
         Address<br>
                     <label>
                     <input type="text" name="EmergencyPersonDetails">
                     </label>
     </form>       <label></label></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td><label>
       <input type="submit" name="Submit" value="Submit">
     </label></td>
   </tr>
  </table>
</form>-->



<?php


//update code
if(isset($_POST['update_students'])){
$Fname=$_POST['FirstName'];
$Lname=$_POST['LastName'];
$contact=$_POST['contact'];
$email=$_POST['Email'];
$address=$_POST['Address'];
$DateOfBirth=$_POST['DateOfBirth'];
$sex=$_POST['Sex'];
$MaritalStatus=$_POST['MaritalStatus'];
$Emergency=$_POST['EmergencyPersonDetails'];


//echo $name;

$insert_query="INSERT INTO `patientdetails`( `FirstName`,`LastName`, `contact`, `Email`, `Address`, `DateOfBirth`, `Sex`, `MaritalStatus`, `EmergencyPersonDetails`) VALUES ('$Fname',$Lname', '$contact', '$email', '$address',  '$DateOfBirth',  '$sex',  '$MaritalStatus',  '$Emergency')";
if($sql_insert==TRUE){
echo 'success';}
else{
echo 'Failed';

}
}


$fetch_query="select *from PatientDetails";
$sql_query=mysqli_query($connect, $fetch_query);
//$result=mysqli_fetch_assoc($sql_query);//arranging attributes
//displaying the results


?>
<!DOCTYPE html>
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



</style><center>
  <a href="dashboard.php" ><img src=""></a>
   <a href="medications.php" ><h4><strong>SMART MEDICAL PORTAL</strong></h4></a>
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
<body>

<a href="patient.php">Patients</a>
<table width="200" border="1">
  <tr>
    <td>FirstName</td>
    <td>LastName</td>
    <td>contact</td>
    <td>Email</td>
    <td>Address</td>
    <td>DateOfBirth</td>
    <td>Sex</td>
    <td>MaritalStatus</td>
    <td>EmergencyPersonDetails</td>

  </tr>
  <?php
  while($result=mysqli_fetch_assoc($sql_query)){
  ?>
  <tr>
    <td><?php echo $result['FirstName']; ?></td>
    <td><?php echo $result['LastName']; ?></td>
    <td><?php echo $result['contact']; ?></td>
      <td><?php echo $result['Email']; ?></td>
    <td><?php echo $result['Address']; ?></td>
    <td><?php echo $result['DateOfBirth']; ?></td>
    <td><?php echo $result['Sex']; ?></td>
    <td><?php echo $result['MaritalStatus']; ?></td>
    <td><?php echo $result['EmergencyPersonDetails']; ?></td>
  <!--<td><a href="?del=<?php echo $result['patientID']; ?>">del</a></td>
  <td><a href="?UPDATE_RECORD=<?php echo $result['patientID']; ?>">update</a></td>-->
  </tr>
  <?php } ?>
</table>

</body>
</html>
