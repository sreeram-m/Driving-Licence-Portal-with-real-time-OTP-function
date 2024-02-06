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
        header("location:verify.php");
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
  echo "<script>setTimeout(\"location.href = 'llrcorrection.html';\",1500);</script>";
 }
?>