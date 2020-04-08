<?php
	include("includes/classes/Account.php");
	echo $_POST['username'];
	
	$account = new Account();
	
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
?><!DOCTYPE html>
<html>
<head>
	<title> Register on TuneBoxx</title>
</head>
<body>
	<div id="inputContainer">
	<?php foreach ($account->getError() as $value) {
		echo "<p>{$value}</p>";
	}
	?>
		<!--sform id="loginForm" action="register.php" method="POST">
			<h1>Login to your TuneBoxx account</h1>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g £m£ka" required>

			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginpassword" name="loginPassword" type="password" required>
			</p>
			
			<button type="submit" name="loginButton"><b>LOG IN</b></button>
		</form-->
		
		<form id="registerForm" action="" method="POST">
			<h1>Create your free TuneBoxx Account</h1>
			<p>
				<?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
				<label for="Username">Username</label>
				<input id="Username" name="username" type="text" placeholder="e.g £m£ka" required />
			</p>
			<p>
				<?php echo $account->getError("Your First Name must be between 2 and 25 Characters"); ?>
				<label for="firstName">First Name</label>
				<input id="firstName" name="firstname" type="text" placeholder="Emeka" required>
			</p>
			<p>
				<?php echo $account->getError("Your Last Name must be between 2 and 25 Characters"); ?>
				<label for="lastName">Last Name</label>
				<input id="lastName" name="lastname" type="text" placeholder="Mike" required>
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="e.g emeka@gmail.com" required>
			</p>
			<p>
				<label for="email2">Confirm Email</label>
				<input id="email2" name="email2" type="email" placeholder="e.g emeka@gmail.com" required>
			</p>
			<p>
				<label for="Password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your password" required>
			</p>
			<p>
				<label for="Password2">Confirm Password</label>
				<input id="password2" name="password2" type="password" placeholder="Confirm your Password" required>
			</p>
			
			<button type="submit" name="registerForm"><b>Sign Up</b></button>
		</form>
	</div>
</body>
</html>














