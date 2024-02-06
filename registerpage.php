<html>
<head>
	<style type="text/css">
		form{
			padding-top: 10;
		}
		body{
			  background-color: #f2f2f2;
		}
		h3{
			padding-top: 80;
			padding-left: 650;
		}table{
			padding-top: 30px;
			margin-right: auto;
			font-size: 20px;
			margin-left: auto;
		}
		
		fieldset{
			background-color: lightgray;
		}
	</style>
	<script type="text/javascript">
		var age=document.getElementById('age').value;
		var password=document.getElementById('password').value;
		var repassword=document.getElementById('repassword').value;
		function validate(){
		if(test(age))
		{
			if(test2(password,repassword))
			{
				return true;
			}
			
		}
		return false;
	}
		function test(age){
			var n=/\d{1,3}/;
			if(age.match(n)){
				return true;
			}else{
				alert('Enter a valid age');
			}
		}
		function test2(password,repassword){
			if(password.match(repassword)){
				return true;
			}else{
				alert('Re-Enter password must be same as Password');
				return false;
			}
		}
	</script>
</head>
	<body>
		<h1 align="center">Driving License portal</h1>
		<h3> Register Page</h3>
		
		<form name="reg" method="post" action="register.php">
			<fieldset>
		<table align="center">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="uname" id="uname"></td>
			</tr>
			<tr>
				<td>DOB</td>
				<td>:</td>
				<td><select name="year">
				  <option value="">---Select year---</option>
				  <?php for ($i = 1980; $i < date('Y'); $i++) : ?>
				  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				  <?php endfor; ?>
				</select>

				<select name="month">
				  <option value="">---Select month---</option>
				  <?php for ($i = 1; $i <= 12; $i++) : ?>
				  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
				  <?php endfor; ?>
				</select>

				<select name="date">
				  <option value="">---Select date---</option>
				  <?php for ($i = 1; $i <= 31; $i++) : ?>
				  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
				  <?php endfor; ?></select></td>
			</tr>
			<tr>
				<td>Mobile no</td>
				<td>:</td>
				<td><input type="text" name="mobile" id="mobile"></td>
			</tr>
			<tr>
				<td>Email-id</td>
				<td>:</td>
				<td><input type="text" name="email" id="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="Password" id="password" name="password"></td>
			</tr>
			<tr>
				<td>Re-Enter Password</td>
				<td>:</td>
				<td><input type="Password" name="repassword" id="repassword"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit"  name="submit" id="submit" onclick="return validate()"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>