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
$res=mysqli_query($con,$sql1);
$res1=mysqli_fetch_array($res);
$name=$_POST['fname'];
$fname=$_POST['fathername'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$add=$_POST['address'];
$pin=$_POST['pincode'];
$class=$_POST['class'];
$year=$_POST['year'];
$month=$_POST['month'];
$date=$_POST['date'];
$dob=$year.'-'.$month.'-'.$date;
$new_img_name2=$res1['photo'];
if(empty($name)){
	$name=$res1['name'];
}
if(empty($_POST['fathername'])){
	$fname=$res1['father_name'];
}
if(empty($_POST['mobile'])){
	$mobile=$res1['mobile'];
}
if(empty($_POST['year']) && empty($_POST['month']) && empty($_POST['date'])){
	$dob=$res1['dob'];
}
if(empty($_POST['email'])){
	$email=$res1['email'];
}
if(empty($_POST['address'])){
	$add=$res1['address'];
}
if(empty($_POST['pincode'])){
	$pin=$res1['pincode'];
}
if(empty($_POST['class'])){
	$pin=$res1['class'];
}

if( ! empty($_FILES['pic'])){
	$allowed_exs=array("jpg","jpeg","png");
	$img_name2=$_FILES['pic']['name'];
	$img_size2=$_FILES['pic']['size'];
$tmp_name2=$_FILES['pic']['tmp_name'];
$error=$_FILES['pic']['error'];
	$img_ex2=pathinfo($img_name2, PATHINFO_EXTENSION);
	$img_ex_lc2=strtolower($img_ex2);
	if(in_array($img_ex_lc2, $allowed_exs)){
		$new_img_name2=uniqid("IMG-",true).'.'.$img_ex_lc2;
	
		$img_upload_path2='uploads/'.$new_img_name2;
		//move_uploaded_file($tmp_name2, $img_upload_path2);
	}
}
$sql="update llrapplication set name='$name',father_name='$fname',dob='$dob',mobile='$mobile',email='$email',address='$add',pincode='$pin',class='$class', photo='$new_img_name2' where llr_no='$llrno'";
$result=mysqli_query($con,$sql);
if($result){
	echo "LLR details corrected";
	echo "<script>setTimeout(\"location.href = 'home.html';\",1500);</script>";
}else{
	echo "Error".$con->error;
	//echo "<script>setTimeout(\"location.href = 'llrcorrection.html';\",1500);</script>";
}
?>
</body>
</html>