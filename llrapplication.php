<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="menu.css">	<body>
	<title>LLR Application</title>
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
	<h2 style="text-align: center;color: green;">LLR Application</h2>
	<form name="llr" method="post" action="llrupload.php" enctype="multipart/form-data">
		<fieldset>
		<table>
			<tr>
				<td>Full Name:</td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<td>Father's Name:</td>
				<td><input type="text" name="fathername"></td>
			</tr>
			<tr>
				<td>Aadhar Number:</td>
				<td><input type="text" name="aadhar"></td>
			</tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mobile" id="mobile"></td>
			</tr>
			<tr>
				<td>Email Id:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>DOB:</td>
				<td><select name="year">
				  <option value="">---Select year---</option>
				  <?php for ($i = 1980; $i < date('Y'); $i++) : ?>
				  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				  <?php endfor; ?>
				</select>

				<select name="month">
				  <option value="">---Select month---</option>
				  <?php for ($i = 1; $i <= 12; $i++) : ?>
				  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
				  <?php endfor; ?>
				</select>

				<select name="date">
				  <option value="">---Select date---</option>
				  <?php for ($i = 1; $i <= 31; $i++) : ?>
				  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
				  <?php endfor; ?></select></td>
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
				<td>Select type of LLR</td>
				<td><select type="dropdown" name="class">
					<option value="LMV-NT">LMV-NT</option>
					<option value="MCWG">MCWG</option>
					<option value="FVG">FVG</option>
				</select> </td>
			</tr>
			<tr>
				<td>Address Proof:</td>
				<td><input type="file" name="image" accept="image/*"></td>
			</tr>
			<tr>
				<td>10th Mark list:</td>
				<td><input type="file" name="mark" accept="image/*"></td>
			</tr>
			<tr>
				<td>Photo:</td>
				<td><input type="file" name="pic" accept="image/*"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="Submit" name="submit"></td>
			</tr>
		</table>
</fieldset>
	</form>
</body>
</html>