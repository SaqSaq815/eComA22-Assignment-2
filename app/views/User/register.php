<html>
	<head>
		<title>Register</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</head>

	<body>

		<?php require 'app\views\includes\error.php'; ?>
		
		<h1>Registration</h1>
		<p>Create your profile here</p>

		<form action='' method='post'>
			<label>Username:<input type="text" name="username" required/></label><br>
			<label>Password:<input type="password" name="password" required/></label><br>
			<label>Password Confirmation:<input type="password" name="password_confirm" required/></label><br>
			<input type="submit" name="action" value="Register" />
		</form>
	</body>
</html>