<html>
	<head>
		<title>Profile Creation</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</head>

	<body>

		<?php if(isset($_GET['error'])){ ?>
		<div class="alert alert-danger" role="alert">
			<?=$_GET['error']?>
		</div>
		<?php } ?>

		<?php if(isset($_GET['message'])){ ?>
		<div class="alert alert-success" role="alert">
			<?=$_GET['message']?>
		</div>
		<?php } ?>

		<h1>Profile Creation</h1>
		<p>Before you can do anything, you need to complete your user profile</p>
		<p>You can always come back to edit your info</p>

		<form action='' method='post'>
			<label>First Name:<input type="text" name="first_name" /></label><br>
			<label>Middle Name:<input type="text" name="middle_name" /></label><br>
			<label>Last Name:<input type="text" name="last_name" /></label><br>
			<input type="submit" name="action" value="Submit" />
		</form>

		<a href="/User/logout">Log out</a>

	</body>
</html>