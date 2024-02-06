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
$result=$_POST['result'];
$llr=$_SESSION['llr'];
$sql="update dl set result='$result' where llr_no='$llr'";
$result=mysqli_query($con,$sql);
if($result){
	echo "Result Posted Successfully";
	echo "<script>setTimeout(\"location.href = 'emphome.html';\",3000);</script>";
}else{
	echo "Error".$con->error;
	echo "<script>setTimeout(\"location.href = 'emphome.html';\",3000);</script>";
}
?>