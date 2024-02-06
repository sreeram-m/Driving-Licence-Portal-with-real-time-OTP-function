<?php 
session_start();
$otp=$_SESSION['otp'];
		$mobotp=$_POST['mobotp'];
	$verify=$_POST['submit'];
		if(isset($verify)){
        	if($mobotp==$otp){
          	header("location:changeofaddress2.php");
        }
        else{
          echo "Incorrect otp";
          echo "<script>setTimeout(\"location.href = 'llrcorrection.html';\",1500);</script>";
        }
    }
	?>