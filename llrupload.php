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
$name=$_POST['fname'];
$fname=$_POST['fathername'];
$aadhar=$_POST['aadhar'];
$mobile=$_POST['mobile'];
$year=$_POST['year'];
$month=$_POST['month'];
$date=$_POST['date'];
if($year !='' && $month !='' && $date !=''){
	$dob=$year.'-'.$month.'-'.$date;
}
$email=$_POST['email'];
$add=$_POST['address'];
$pin=$_POST['pincode'];
$class=$_POST['class'];
$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$tmp_name=$_FILES['image']['tmp_name'];
$error=$_FILES['image']['error'];
	$img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
	$img_ex_lc=strtolower($img_ex);
	$allowed_exs=array("jpg","jpeg","png");
	if(in_array($img_ex_lc, $allowed_exs)){
		$new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
	
		$img_upload_path='uploads/'.$new_img_name;
		//move_uploaded_file($tmp_name, $img_upload_path);
	}else{
		$em="You can't upload files of this type";
		header("location:llrapplication.php?error=$em");
	}
$img_name1=$_FILES['mark']['name'];
$img_size1=$_FILES['mark']['size'];
$tmp_name1=$_FILES['mark']['tmp_name'];
$error=$_FILES['mark']['error'];
	$img_ex1=pathinfo($img_name1, PATHINFO_EXTENSION);
	$img_ex_lc1=strtolower($img_ex1);
	if(in_array($img_ex_lc1, $allowed_exs)){
		$new_img_name1=uniqid("IMG-",true).'.'.$img_ex_lc1;
	
		$img_upload_path1='uploads/'.$new_img_name1;
		//move_uploaded_file($tmp_name1, $img_upload_path1);
	}else{
		$em="You can't upload files of this type";
		header("location:llrapplication.php?error=$em");
	}
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
	}else{
		$em="You can't upload files of this type";
		header("location:llrapplication.php?error=$em");
	}
$llr="LLRAP002021".rand(0001,9999);
$sql="insert into llrapplication(llr_no,name,father_name,dob,aadhar,mobile,email,address,pincode,class,address_proof,marklist,photo)
values('$llr','$name','$fname','$dob','$aadhar','$mobile','$email','$add','$pin','$class','$new_img_name','$new_img_name1','$new_img_name2')";
$result=mysqli_query($con,$sql);
if($result){
	echo "Application successful";
	echo"<br>";
	echo "Your LLR number is $llr <br>";
	echo "You can attend the llr test anytime now</a>";
	//echo "<script>setTimeout(\"location.href = 'home.html';\",5000);</script>";
}else{
	echo"Error".$con->error();
    echo "<script>setTimeout(\"location.href = 'llrapplication.php';\",3000);</script>";
}
?>
<a href="home.html">Back to Home Page</a>
</body>
</html>