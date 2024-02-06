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
$llr=$_POST['llr'];
$slot=$_POST['slot'];
$sql1="select * from dl where llr_no='$llr' and slot='$slot'";
$res1=mysqli_query($con,$sql1);
$f1=mysqli_affected_rows($con);
if($f1>0){
	$_SESSION['llr']=$llr;
	$_SESSION['slot']=$slot;
	header("location:dltest2.php");
}
else{
	echo "Incorrect LLR number/ Test is not scheduled today";
	echo "<script>setTimeout(\"location.href = 'emphome.html';\",3000);</script>";
}
?>