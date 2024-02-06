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
if(isset($_POST['submit'])){
$llr=$_POST['llrno'];
$_SESSION['llrno']=$llr;
$sql="select * from llrapplication where llr_no='$llr'";
$result=mysqli_query($con,$sql);
$f=mysqli_affected_rows($con);
if($f>0){
    $f1=mysqli_fetch_array($result);
    $mob=$f1['mobile'];


    $curl = curl_init();
    $api = "4f73c9b3-be02-11eb-8089-0200cd936042";
    $otp=rand(1111,9999);
    $_SESSION['otp']=$otp;
    $url = "http://2factor.in/API/V1/".$api."/SMS/".$mob."/".$otp;
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS => "",
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded"
      ),
    ));
      $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    if ($err) {
      /* Display error */
      echo "cURL Error #:" . $err;
    } else {

      $obj = json_decode($response);
      $status = $obj->{'Status'};


      if ($status == "Success") {
        header("location:llrtestverify.php");
      }else{
        echo "Status:";
        echo $status;
        echo "<br>Details:";
        echo $obj->{'Details'};

        echo "<input type='button' value='Retry' onclick='window.location.reload()'>";
      }  
 }
}else{
  echo "Incorrect application number";
  echo "<script>setTimeout(\"location.href = 'llrtestlogin.php';\",1500);</script>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="menu.css">	<body>
	<title>LLR Test</title>
</head>
<body>
	<body>
<div class="navbar" >
  <h1 style="float: left;color: white;">Driving license portal</h1>
  <a href="emplogin.html">Employee login</a>
  <a href="login.html">Logout</a>
  <a href="https://aprtacitizen.epragathi.org/#!/helpline">Helpline</a>
  <a href="https://aprtacitizen.epragathi.org/#!/ticket">Helpdesk</a>
  <div class="dropdown">
    <button class="dropbtn">Driving License 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="slotbooking.php">DL slot booking</a>
      <a href="changeofaddress.html">Change of address</a>
      <a href="licenseview.html">View license</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Learner's License 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="llrapplication.php">LLR Application</a>
      <a href="llrtestlogin.php">LLR test</a>
      <a href="llrcorrection.html">LLR correction</a>
    </div>
  </div> 
  <a href="home.html">Home</a>
</div>
	<h2 style="text-align: center;color: green;">LLR Test Login</h2>
	<form  method="post" enctype="multipart/form-data">
		<table align="center">
			<tr>
				<td>Enter LLR number:</td>
				<td><input type="text" name="llrno"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>