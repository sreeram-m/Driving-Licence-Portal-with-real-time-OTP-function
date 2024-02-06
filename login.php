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
$uname=$_POST['uname'];
$pass=$_POST['password'];
$sql=" select * from users where username='$uname' and password='$pass'";
$result=mysqli_query($con,$sql);
$f=mysqli_affected_rows($con);
if($f==1){
	header("Location:home.html");
}
else
	echo "Incorrect username or password";
	echo "<script>setTimeout(\"location.href = 'login.html';\",3000);</script>";
mysqli_close($con);
?>
</body>
</html>