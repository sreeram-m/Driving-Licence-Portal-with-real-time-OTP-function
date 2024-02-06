<html>
<body>
<?php
$host="localhost"; 
$username="root"; 
$password="Sreeram@16"; 
$db_name="egov"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$empid=$_POST['empid'];
$pass=$_POST['password'];
$sql=" select * from employee where id='$empid' and password='$pass'";
$result=mysqli_query($con,$sql);
$f=mysqli_affected_rows($con);
if($f==1){
	header("Location:emphome.html");
}
else
	echo "Incorrect Id or password";
	echo "<script>setTimeout(\"location.href = 'emplogin.html';\",3000);</script>";
mysqli_close($con);
?>
</body>
</html>