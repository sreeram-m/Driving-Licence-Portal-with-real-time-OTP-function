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
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="egov"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$llrno=$_SESSION['llrno'];
$sql1="select * from llrapplication where llr_no='$llrno'";
$slot=$_POST['slot'];
$res1=mysqli_query($con,$sql1);
$f1=mysqli_fetch_array($res1);
$dl="DLAP002021".rand(00001,99999);
$name=$f1['name'];
$fname=$f1['father_name'];
$aadhar=$f1['aadhar'];
$mobile=$f1['mobile'];
$email=$f1['email'];
$dob=$f1['dob'];
$address=$f1['address'];
$pincode=$f1['pincode'];
$class=$f1['class'];
$photo=$f1['photo'];
$sql="insert into dl(dl_no,llr_no,name,father_name,aadhar,mobile,email,dob,address,pincode,class,photo,slot)
values('$dl','$llrno','$name','$fname','$aadhar','$mobile','$email','$dob','$address','$pincode','$class','$photo','$slot')";
$result=mysqli_query($con,$sql);
if($result){
	echo "Slot Booking Successfull. Your DL number is $dl. Your slot is $slot";
	//echo "<script>setTimeout(\"location.href = 'home.html';\",5000);</script>";
	?>
	<a href="home.html">Back To Home Page</a>
	<?php
}else{
	echo "Error".$con->error;
	echo "<br><script>setTimeout(\"location.href = 'home.html';\",5000);</script>";
}
?>