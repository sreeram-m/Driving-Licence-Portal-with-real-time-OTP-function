<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="menu.css">	<body>
	<title>Change Of Address</title>
	<style type="text/css">
		table{
			padding-top: 30px;
			margin-right: auto;
			font-size: 20px;
			margin-left: auto;
		}
		body{
			
		}
		fieldset{
			background-color: lightgray;
		}
	</style>
</head>
<body>
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
	<h2 style="text-align: center;color: green;">DL Address Change form</h2>
	<form name="dl" method="post" action="changeofaddress3.php" enctype="multipart/form-data">
		<fieldset>
		<table align="center">
			<tr>
				<td colspan="2"><b>Enter the details you want to correct</b></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>Pincode</td>
				<td><input type="text" name="pincode"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="Submit" name="submit"></td></tr>
		</table>
	</fieldset>
	</form>
</body>
</html>