<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_POST['sendotp'])){}
require('textlocal.class.php');
require ('credential.php');

$textlocal = new Textlocal(false,false,API_KEY);

$numbers = array($_POST['mobile']);
$sender = 'Driving license portal';
$otp = mt_rand(0001,9999);
$message = "Hello ".$_POST['fname']." This is your OTP: ".$otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    setcookie('otp',$otp);
    echo "OTP sent..";
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}

	if(isset($_POST['verify'])){
		$otp=$_POST['otp'];
		if($_COOKIE['otp']==$otp){
			echo "Verfication successfull";
		}else{
			echo "Please enter correct otp";
		}
	}
?>
<h2>Verification</h2>
<form name="ver" method="post">
	<table>
		<tr>
			<td><input type="button" name="sendotp" value="Send OTP"></td>
		</tr>
		<tr>
			<td><input type="text" name="otp"></td>
		</tr>
		<tr>
			<td><input type="button" name="verify" value="Verify"></td>
		</tr>
	</table>
</form>
</body>
</html>