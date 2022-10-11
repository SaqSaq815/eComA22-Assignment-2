<html>
	<head>
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</head>

	<body>
		<?php require 'app\views\includes\error.php'; ?>
		
		<h1>Login</h1>
		<p>Log in here</p>

		<form action='' method='post'>
			<label>Username:<input type="text" name="username" /></label><br>
			<label>Password:<input type="password" name="password" /></label><br>
			<input type="submit" name="action" value="Login" />
		</form>
		
		<a href="/User/register">Register</a>

	</body>
</html>