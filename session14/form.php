<!DOCTYPE html>
<html>
<head>
	<title>Form - Session 14</title>
	<style type="text/css">
		.error {color: red;}
	</style>
</head>
<body>
	<?php 
	$errUserName = $errEmail = $errPassword = '';
	$username = $email = $password = '';
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if ($username == '') {
			$errUserName = 'Please input your username';
		}
		if ($email == '') {
			$errEmail = 'Please input your email';
		}
		if ($password == '') {
			$errPassword = 'Please input your password';
		}
	}
?>
	<h1>Register form</h1>
	<form action="#" method="POST">
		<p>Username
			<input type="text" name="username" value="<?php echo $username;?>">
		</p>
		<p class="error"><?php echo $errUserName;?></p>
		<p>Email
			<input type="text" name="email" value="<?php echo $email;?>">
		</p>
		<p class="error"> <?php echo $errEmail;?></p>
		<p>Password
			<input type="password" name="password" value="<?php echo $password;?>">
		</p>
		<p class="error"> <?php echo $errPassword;?></p>
		<p>Gender
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
		</p>
		<p>City
			<select name="city">
				<option value="">Please choose city</option>
				<option value="1">Quang Tri</option>
				<option value="2">Hue</option>
				<option value="3">Da Nang</option>
				<option value="4">Quang Nam</option>
			</select>
		</p>
		<p><input type="submit" name="register"></p>
	</form>

</body>
</html>