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
$lno=$_POST['lno'];
$license=$_POST['license'];
$_SESSION['lno']=$lno;
if($license=="llr"){
	header("location:licenseviewllr.php");
}
if($license=="dl"){
	header("location:licenseviewdl.php");
}
?>
