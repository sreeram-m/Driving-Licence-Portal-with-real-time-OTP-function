<?php
session_start();
		$host="localhost"; 
$username="root"; 
$password="Sreeram@16"; 
$db_name="egov"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$llr=$_SESSION['llr'];
$slot=$_SESSION['slot'];
$sql="select * from dl where llr_no='$llr'";
$result=mysqli_query($con,$sql);
if(!$result){
	printf("Error: %s\n",mysqli_error($con));
}
$f=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-color: #f2f2f2;
		}
		h2{
			color: green;
			text-align: center;
		}
		
		table{
			padding-top: 30px;
			margin-right: auto;
			font-size: 20px;
			margin-left: auto;
		}
		
		fieldset{
			background-color: lightgray;
		}
	</style>
	<title>DL TEST</title>
</head>
<body>
	<h2>Driving Test</h2>
	<form method="post" action="dltest3.php">
		<fieldset>
		<table align="center" >
			<tr>
				<td>Dl No:</td>
				<td><?php echo $f['dl_no']; ?></td>
			</tr>
			<tr>
				<td>LLR No:</td>
				<td><?php echo $f['llr_no']; ?></td>
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
				<td>Class of Vehicle:</td>
				<td><?php echo $f['class']; ?></td>
			</tr>
			<tr>
				<td>Mobile Number:</td>
				<td><?php echo $f['mobile']; ?></td>
			</tr>
			<tr>
				<td>Slot:</td>
				<td><?php echo $f['slot']; ?></td>
			</tr>
			<tr>
				<td>Result:</td>
				<td><input type="radio" name="result" value="pass">Pass<br>
					<input type="radio" name="result" value="fail">Fail
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</fieldset>
	</form>
</body>
</html>