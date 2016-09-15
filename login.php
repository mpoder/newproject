<?php
	//var_dump($_POST);
	//does stuff exist?
	$signupEmailError = "";
	if (isset ($_POST["signupEmail"] ) ) {
		//somebody PRESSED THE BUTTON
		if (empty($_POST["signupEmail"])){
			$signupEmailError = "Please enter your e-mail";		
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>

		<h1>Log into the system</h1>
		<form method="POST">
		<label>E-mail address</label>	
		<br>
		<input name="loginEmail" type="email">
		<br><br>
		<label>Password</label>
		<br>
		<input name="loginPassword" type="password">
		<br><br>
		<input type="submit" value="Log in">
		</form>

		<h1>Create a user</h1>
		<form method="POST">
		<label>E-mail address</label>
		<br>
		<input name="signupEmail" type="email"><?php echo $signupEmailError; ?>
		<br><br>
		<label>Password</label>
		<br>
		<input name="signupPassword" type="password">
		<br><br>
		<input type="submit" value="Create user">
		</form>
	</body>
</html> 
