<html>
	<head>
		<title>Profile Creation</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/public/css/style.css">
	</head>

	<body>
		<?php require 'app\views\includes\header.php'; ?>
		<?php require 'app\views\includes\error.php'; ?>
		<div class="main">
			<h1>Profile Creation</h1>
			<p>Before you can do anything, you need to complete your user profile.</p>
			<p>You can always come back to edit your info!</p>

			<form action='' method='post'>
				<label for="first_name">First Name</label>
				<input type="text" id="first_name" name="first_name" required/><br>

				<label for="middle_name">Middle Name</label>
				<input type="text" id="middle_name" name="middle_name" placeholder="Optional" required/><br>

				<label for="last_name">Last Name</label>
				<input type="text" id="last_name" name="last_name" required/><br>

				<input type="submit" name="action" value="Save" />
			</form>
		</div>

	</body>
</html>