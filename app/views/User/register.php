<html>
	<head>
		<title>Register</title>	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/public/css/style.css">
	</head>

	<body>
		<?php require 'app\views\includes\header.php'; ?>
		<?php require 'app\views\includes\error.php'; ?>
		<div class="main">
			<h1>Sign Up</h1>

			<form action='' method='post'>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" required/><br>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required/></label><br>
				<label for="password_confirm">Password Confirmation</label>
				<input type="password" id="password_confirm" name="password_confirm" required/><br>
				<input type="submit" name="action" value="Register" />
			</form>
		</div>
	</body>
</html>