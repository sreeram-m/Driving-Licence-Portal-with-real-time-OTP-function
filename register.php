<?php
$host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="egov"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$name=$_POST['name'];
$uname=$_POST['uname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$year=$_POST['year'];
$month=$_POST['month'];
$date=$_POST['date'];
if($year !='' && $month !='' && $date !=''){
	$dob=$year.'-'.$month.'-'.$date;
}
$sql="insert into users(Name,username,dob,mobile,email,password) 
values('$name','$uname','$dob','$mobile','$email','$password')";
$result=mysqli_query($con,$sql);
if($result){
	echo "successfully registered";
	echo"<br>";
	echo"<a href='login.html'>back to login page</a>";
}else{
	echo"ERROR";

}
mysqli_close($con);
?>