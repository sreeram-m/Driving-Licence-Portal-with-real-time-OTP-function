<?php
	session_start();
	$llr=$_SESSION['llrno'];
	$host="localhost"; 
$username="root"; 
$password="Sreeram@16"; 
$db_name="egov"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
  die("cannot connect");
}
$score=0;
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$q16=$_POST['q16'];
$q17=$_POST['q17'];
$q18=$_POST['q18'];
$q19=$_POST['q19'];
$q20=$_POST['q20'];
if($q1=="1"){
	$score++;
}
if($q2=="1"){
	$score++;
}
if($q3=="1"){
	$score++;
}
if($q4=="1"){
	$score++;
}
if($q5=="1"){
	$score++;
}
if($q6=="1"){
	$score++;
}
if($q7=="1"){
	$score++;
}
if($q8=="1"){
	$score++;
}
if($q9=="1"){
	$score++;
}
if($q10=="1"){
	$score++;
}
if($q11=="1"){
	$score++;
}
if($q12=="1"){
	$score++;
}
if($q13=="1"){
	$score++;
}
if($q14=="1"){
	$score++;
}
if($q15=="1"){
	$score++;
}
if($q16=="1"){
	$score++;
}
if($q17=="1"){
	$score++;
}
if($q18=="1"){
	$score++;
}
if($q19=="1"){
	$score++;
}
if($q20=="1"){
	$score++;
}
echo "Your application number is"."$llr"." Your score is $score<br>";
$res="fail";
if($score>=16){
	echo "You have passed the test.";
	echo "<script>setTimeout(\"location.href = 'home.html';\",5000);</script>";
	$res="pass";
}else{
	echo "You have failed the test.";
	echo "<script>setTimeout(\"location.href = 'home.html';\",5000);</script>";
}
$sql="update llrapplication set llr_test_result='$res' where llr_no='$llr'";
$result=mysqli_query($con,$sql);
if(! $result){
	echo "error".$con->error();
}
?>