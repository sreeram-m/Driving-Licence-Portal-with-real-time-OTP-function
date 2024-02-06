<?php
session_start();
		$host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="egov"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$dl=$_SESSION['lno'];
$sql="select * from dl where dl_no='$dl'";
$result=mysqli_query($con,$sql);
//$result=mysqli_query($con,$sql);
if(!$result){
	printf("Error: %s\n",mysqli_error($con));
}
$f=mysqli_fetch_array($result);
$dlresult=$f['result'];
if($dlresult==""||$dlresult==" "){
	$dlresult="No Result Yet";
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		h2{
			color: green;
		}
		table{
			padding-top: 30px;
			margin-right: auto;
			font-size: 20px;
			margin-left: auto;
		}
		body{
			background-color: #f2f2f2;
		}
		fieldset{
			background-color: lightgray;
		}
	</style>
	<link rel="stylesheet" href="menu.css">
	<title>License View</title>
</head>
<body>
<div class="navbar" >
	<h1 style="float: left;color: white;">Driving license portal</h1>
  <a href="emplogin.html">Employee login</a>
  <a href="login.html">Logout</a>
  <a href="https://aprtacitizen.epragathi.org/#!/helpline">Helpline</a>
  <a href="https://aprtacitizen.epragathi.org/#!/ticket">Helpdesk</a>
  <div class="dropdown">
    <button class="dropbtn">Driving License 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="slotbooking.php">DL slot booking</a>
      <a href="changeofaddress.html">Change of address</a>
      <a href="licenseview.html">View license</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Learner's License 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="llrapplication.php">LLR Application</a>
      <a href="llrtestlogin.php">LLR test</a>
      <a href="llrcorrection.html">LLR correction</a>
    </div>
  </div> 
  <a href="home.html">Home</a>
</div>
<h2 align="center" style="color: green; padding-top: 30;">License View</h2>
<fieldset>
<table align="center">
	<tr>
		<td>DL number:</td>
		<td><?php echo $dl; ?></td>
	</tr>
	<tr>
		<td>LLR No:</td>
		<td><?php echo $f['llr_no']; ?></td>
	</tr>
	<tr>
		<td>Class of Vehicle:</td>
		<td><?php echo $f['class']; ?></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><?php echo $f['name']; ?></td>
	</tr>
	<tr>
		<td>Father's Name:</td>
		<td><?php echo $f['father_name']; ?></td>
	</tr>
	<tr>
		<td>Aadhar Number:</td>
		<td><?php echo $f['aadhar']; ?></td>
	</tr>
	<tr>
		<td>DOB:</td>
		<td><?php echo $f['dob']; ?></td>
	</tr>
	<tr>
		<td>Mobile Number:</td>
		<td><?php echo $f['mobile']; ?></td>
	</tr>
	<tr>
		<td>Email Id:</td>
		<td><?php echo $f['email']; ?></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><?php echo $f['address']; ?></td>
	</tr>
	<tr>
		<td>pincode:</td>
		<td><?php echo $f['pincode']; ?></td>
	</tr>
	<tr>
		<td>Result:</td>
		<td><?php echo $dlresult ?></td>
	</tr>
</table>
</fieldset>
</body>
</html>