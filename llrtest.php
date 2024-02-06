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
$llrno=$_SESSION['llrno'];
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#clockdiv{
			font-weight: bolder;
			text-align: right;
			font-size: 20px;
			font-family: Times,helvetica;  
			padding-right: 30;
			padding-top: 30;
			position: relative;
		}
		#head{
			color: green;
			text-align: center;
		}
		fieldset{
			background-color: lightgray;
			font-family: Times New Roman;
			font-size: 20px;
			border: 2px solid black;
			margin-left: auto;
			margin-right: auto;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		body{
			background-color: #f2f2f2;
		}
		#sub{
			height: 50px;
			width: 100px;
			font-size: 20px;
			background-color: gray;
			font-weight: bolder;

		}
	</style>
	<title>LLR TEST</title>
</head>
<body>
	<div id="head"><h1>LLR Test</h1></div>
<div id="clockdiv"> </div>
<form method="post" action="llrtestresult.php">
<fieldset>
	<h4>1.YOU HAVE TO MAKE A JOURNEY IN
FOGGY CONDITIONS. YOU SHOULD</h4>
	<input type="radio" name="q1" value="0">FOLLOW CLOSELY
OTHER VEHICLE'S TAIL
LIGHTS<br>
	<input type="radio" name="q1" value="0">NEVER USE DEMISTERS AND WINDSCREEN WIPERS<br>
	<input type="radio" name="q1" value="1">LEAVE PLENTY OF TIME
FOR YOUR JOURNEY<br>
	<input type="radio" name="q1" value="0">KEEP SAFE DISTANCE OF
TWO SECONDS<br>
</fieldset>
<fieldset>
	<h4>2.BE EXTRA CAUTIOUS WHILE
OVERTAKING</h4>
	<input type="radio" name="q2" value="0">SLOW SPEED VEHICLES<br>
	<input type="radio" name="q2" value="1">`L' MARK VEHICLES<br>
	<input type="radio" name="q2" value="0">OLD VEHICLES.<br>
	<input type="radio" name="q2" value="0">LIGHT VEHICLES.<br>
</fieldset>
<fieldset>
	<h4>3.YOU SHOULD NEVER ATTEMPT TO
OVERTAKE A CYCLIST! </h4>
	<input type="radio" name="q3" value="0">WHEN APPROACHING A
ROUNDABOUT<br>
	<input type="radio" name="q3" value="0">ON A NARROW ROAD<br>
	<input type="radio" name="q3" value="1">JUST BEFORE YOU TURN
LEFT<br>
	<input type="radio" name="q3" value="0">ON A RIGHT HAND BEND<br>
</fieldset>

<fieldset>
	<h4>4.WHICH OF THESE LIGHTS WILL COME
AFTER AMBER AT A TRAFFIC LIGHT?</h4>
	<input type="radio" name="q4" value="1">RED<br>
	<input type="radio" name="q4" value="0">GREEN<br>
	<input type="radio" name="q4" value="0">BLUE<br>
	<input type="radio" name="q4" value="0">NONE OF THE ABOVE<br>
</fieldset>
<fieldset>
	<h4>5.YOU ARE MOST LIKELY TO LOSE
CONCENTRATION WHILE DRIVING IF
YOU</h4>
	<input type="radio" name="q5" value="0"> SWITCH ON THE A.C<br>
	<input type="radio" name="q5" value="1">USE A MOBILE PHONE<br>
	<input type="radio" name="q5" value="0">LOOK AT THE REAR
VIEW MIRRORS
<br>
	<input type="radio" name="q5" value="0">ALL OF THE ABOVE<br>
</fieldset>
<fieldset>
	<h4>6.WHICH OF THE FOLLOWING SHOULD
YOU DO BEFORE STOPPING?</h4>
	<input type="radio" name="q6" value="0">SOUND THE HORN<br>
	<input type="radio" name="q6" value="1">USE THE MIRRORS<br>
	<input type="radio" name="q6" value="0">SELECT A HIGHER GEAR<br>
	<input type="radio" name="q6" value="0">FLASH YOUR
HEADLIGHTS<br>
</fieldset>
<fieldset>
	<h4>7.WHEN MAY YOU STOP ON A
MOTORWAY?</h4>
	<input type="radio" name="q7" value="0">IF TRAFFIC SIGNAL IS
RED<br>
	<input type="radio" name="q7" value="0">WHEN TOLD BY THE
POLICE<br>
	<input type="radio" name="q7" value="0">IN AN EMERGENCY
OR A BREAKDOWN<br>
	<input type="radio" name="q7" value="1">ALL OF THE ABOVE<br>
</fieldset>
<fieldset>
	<h4>8.WHEN YOU ARE NOT SURE THAT IT IS
SAFE TO REVERSE YOUR VEHICLE
YOU SHOULD</h4>
	<input type="radio" name="q8" value="0">USE YOUR HORN<br>
	<input type="radio" name="q8" value="0">RAISE YOUR ENGINE<br>
	<input type="radio" name="q8" value="1">GET OUT AND CHECK<br>
	<input type="radio" name="q8" value="0">REVERSE SLOWLY<br>
</fieldset>
<fieldset>
	<h4>9.WHEN APPROACHING ROAD WORKS,
YOU SHOULD NOT
</h4>
	<input type="radio" name="q9" value="1">START TO OVERTAKE &
INCREASE SPEED<br>
	<input type="radio" name="q9" value="0">FLASH YOUR
HEADLIGHTS<br>
	<input type="radio" name="q9" value="0">GIVE ANY SIGNALS<br>
	<input type="radio" name="q9" value="0">NONE OF THE ABOVE<br>
</fieldset>
<fieldset>
	<h4>10.A PEDESTRIAN IS CROSSING THE
STREET AT AN UNMARKED CROSSWALK, YOU SHOULD</h4>
	<input type="radio" name="q10" value="1">YIELD TO THE
PEDESTRIAN THE "RIGHT
OF WAY"<br>
	<input type="radio" name="q10" value="0">PROCEED WITH CARE<br>
	<input type="radio" name="q10" value="0">REDUCE SPEED AND
WARN PEDESTRIAN.<br>
	<input type="radio" name="q10" value="0">WAVE TO THE
PEDESTRIAN TO CROSS
QUICKLY<br>
</fieldset>
<fieldset>
	<h4>11.WHILE DRIVING, YOU WISH TO
CHANGE FROM ONE LANE TO
ANOTHER, YOU SHOULD</h4>
	<input type="radio" name="q11" value="0">GIVE THE PROPER TURN
SIGNAL<br>
	<input type="radio" name="q11" value="1">CHANGE LANES ONLY
WHEN IT IS SAFE TO DO
SO BY GIVING THE
PROPER TURN SIGNAL<br>
	<input type="radio" name="q11" value="0">NEVER CHANGE LANES
AS IT IS AGAINST THE
LAW<br>
	<input type="radio" name="q11" value="0">LANE SHOULD NOT BE
CHANGED<br>
</fieldset>
<fieldset>
	<h4>12.WHEN YOU WANT TO OVERTAKE A
VEHICLE IN FRONT OF YOU, YOU CAN
OVERTAKE</h4>
	<input type="radio" name="q12" value="1">ONLY FROM THE RIGHT
HAND SIDE OF THAT
VEHICLE<br>
	<input type="radio" name="q12" value="0">ONLY FROM THE LEFT
HAND SIDE OF THAT
VEHICLE<br>
	<input type="radio" name="q12" value="0">EITHER FROM RIGHT OR
LEFT HAND SIDE OF THE
VEHICLE<br>
	<input type="radio" name="q12" value="0">NONE OF THE ABOVE<br>
</fieldset>
<fieldset>
	<h4>13.IN WHICH OF THE FOLLOWING
PLACES CAN YOU PARK YOUR
VEHICLE</h4>
	<input type="radio" name="q13" value="0">NEAR A ROAD CROSSING<br>
	<input type="radio" name="q13" value="0">NEAR A BEND ON THE
ROAD<br>
	<input type="radio" name="q13" value="0">ON A FOOT PATH<br>
	<input type="radio" name="q13" value="1">NONE OF THESE<br>
</fieldset>
<fieldset>
	<h4>14.YOU ARE APPROACHING THE
TRAFFIC LIGHTS THAT HAVE BEEN
GREEN FOR SOME TIME. YOU
SHOULD</h4>
	<input type="radio" name="q14" value="0">ACCELERATE HARD<br>
	<input type="radio" name="q14" value="0">MAINTAIN YOUR SPEED<br>
	<input type="radio" name="q14" value="1">BE READY TO STOP<br>
	<input type="radio" name="q14" value="0">BRAKE HARD<br>
</fieldset>
<fieldset>
	<h4>15.A PERSON HERDING SHEEP ASKS YOU
TO STOP. YOU SHOULD</h4>
	<input type="radio" name="q15" value="0">IGNORE THEM AS THEY
HAVE NO AUTHORITY<br>
	<input type="radio" name="q15" value="1">STOP AND SWITCH OFF
YOUR ENGINE<br>
	<input type="radio" name="q15" value="0">CONTINUE ON BUT
DRIVE SLOWLY<br>
	<input type="radio" name="q15" value="0">TRY AND GET PAST
QUICKLY<br>
</fieldset>
<fieldset>
	<h4>16.THERE IS A SLOW-MOVING
MOTORCYCLIST AHEAD OF YOU. YOU
ARE UNSURE WHAT THE RIDER IS
GOING TO DO. YOU SHOULD</h4>
	<input type="radio" name="q16" value="0">PASS ON THE LEFT<br>
	<input type="radio" name="q16" value="0">PASS ON THE RIGHT<br>
	<input type="radio" name="q16" value="1">STAY BEHIND<br>
	<input type="radio" name="q16" value="0">MOVE CLOSER<br>
</fieldset>
<fieldset>
	<h4>17.A LONG, HEAVILY LOADED LORRY IS
TAKING A LONG TIME TO OVERTAKE
YOU. WHAT SHOULD YOU DO?</h4>
	<input type="radio" name="q17" value="0">SPEED UP<br>
	<input type="radio" name="q17" value="1">SLOW DOWN.<br>
	<input type="radio" name="q17" value="0">HOLD YOUR SPEED.<br>
	<input type="radio" name="q17" value="0">CHANGE DIRECTION.<br>
</fieldset>
<fieldset>
	<h4>18.YOU MEET AN OBSTRUCTION ON
YOUR SIDE OF THE ROAD-YOU
SHOULD</h4>
	<input type="radio" name="q18" value="0">CARRY ON, YOU HAVE
PRIORITY.<br>
	<input type="radio" name="q18" value="0">YOU SHOULD WAVE
ONCOMING VEHICLES
THROUGH.
<br>
	<input type="radio" name="q18" value="1">GIVE WAY TO
ONCOMING TRAFFIC.<br>
	<input type="radio" name="q18" value="0">ACCELERATE TO GET
PAST FIRST.<br>
</fieldset>
<fieldset>
	<h4>19.IF A PERSON CARRYING A WHITE
STICK WITH RED RING IS CROSSING
THE ROAD, WHAT SHOULD YOU DO?</h4>
	<input type="radio" name="q19" value="1">WAIT UNTIL HE CROSS
THE ROAD<br>
	<input type="radio" name="q19" value="0">MAN HANDLE HIM<br>
	<input type="radio" name="q19" value="0">GIVE HIM LIFT<br>
	<input type="radio" name="q19" value="0">LET HIM GO UNNOTICED<br>
</fieldset>
<fieldset>
	<h4>20.U TURN IS PROHIBITED ON</h4>
	<input type="radio" name="q20" value="0">A ROAD WITH A "NO U
TURN" SIGN<br>
	<input type="radio" name="q20" value="0">A BUSY ROAD<br>
	<input type="radio" name="q20" value="0">A ROAD WHERE SAFETY
MAY BE COMPROMISED<br>
	<input type="radio" name="q20" value="1">ALL OF THE ABOVE<br>
</fieldset>
<input type="submit" name="submit" id="sub">
</form>
<script type="text/javascript">
	var time_in_minutes = 10;
var current_time = Date.parse(new Date());
var deadline = new Date(current_time + time_in_minutes*60*1000);


function time_remaining(endtime){
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor( (t/1000) % 60 );
	var minutes = Math.floor( (t/1000/60) % 60 );
	var hours = Math.floor( (t/(1000*60*60)) % 24 );
	var days = Math.floor( t/(1000*60*60*24) );
	return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}
function run_clock(id,endtime){
	var clock = document.getElementById(id);
	function update_clock(){
		var t = time_remaining(endtime);
		clock.innerHTML = 'Time left: '+t.minutes+':'+t.seconds;
		if(t.total<=0){ clearInterval(timeinterval); }
	}
	update_clock(); // run function once at first to avoid delay
	var timeinterval = setInterval(update_clock,1000);
}
run_clock('clockdiv',deadline);
</script>
</body>
</html>