<?php
  session_start();
 $host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="egov"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
  die("cannot connect");
}
$res="pass";
$llrno=$_SESSION['llrno'];
$sql1="select * from llrapplication where llr_no='$llrno' and llr_test_result='$res'";
$res1=mysqli_query($con,$sql1);
$f=mysqli_affected_rows($con);
if($f>0){
	header("location:slotbooking3.php");
}else{
	echo "You have not passed the llr test";
	echo "<script>setTimeout(\"location.href = 'home.html';\",3000);</script>";
}
?>