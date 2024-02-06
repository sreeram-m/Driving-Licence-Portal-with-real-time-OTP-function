<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
$dl=$_SESSION['dl'];
$sql1="select address,pincode from dl where dl_no='$dl'";
$res1=mysqli_query($con,$sql1);
$f1=mysqli_fetch_array($res1);
$address=$_POST['address'];
$pincode=$_POST['pincode'];
if(empty($_POST['address'])){
	$address=$f1['address'];
}
if(empty($_POST['pincode'])){
	$pincode=$f1['pincode'];
}
$sql="update dl set address='$address',pincode='$pincode' where dl_no='$dl'";
$result=mysqli_query($con,$sql);
if($result){
	echo "Change of Address Successful";
	echo "<script>setTimeout(\"location.href = 'home.html';\",5000);</script>";
}else{
	echo "Error".$con->error;
	echo "<script>setTimeout(\"location.href = 'changeofaddress.html';\",5000);</script>";
}
?>