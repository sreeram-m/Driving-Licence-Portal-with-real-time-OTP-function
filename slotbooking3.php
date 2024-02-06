<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slot BOOKING</title>
	<style type="text/css">
		table{
			padding-top: 30px;
			margin-right: auto;
			
			margin-left: auto;
		}
		body{
			font-size: 20px;
			background-color: #f2f2f2;
		}
		fieldset{
			background-color: lightgray;
		}h2{
			text-align: center;
			color: green;
		}
	</style>
</head>
<body>
	<h2>Driving License Slot Booking</h2>
	<form method="post" action="slotupload.php">
		<fieldset>
		<table>
			<tr>
				<td><strong>Select date for driving test:</strong></td>
				<td><input type="date" name="slot"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>

		<p><strong>Note:</strong></p>
		<p>You have to be present at the RTO Office at 10 am on the selected date.</p>
	</fieldset>
	</form>
</body>
</html>