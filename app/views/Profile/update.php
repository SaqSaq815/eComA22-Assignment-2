<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profile Edit</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/public/css/style.css">
	</head>
	
	<body>
		<?php require 'app\views\includes\header.php'; ?>
		<?php require 'app\views\includes\error.php'; ?>
		<div class="main">
		<h1>Edit Profile</h1>
			<form action='' method='post'>	
				<?php echo "<label>First Name:<input type=\"text\" name=\"first_name\" value=\"$data->first_name\" required/></label><br>
					<label>Middle Name:<input type=\"text\" name=\"middle_name\" value=\"$data->middle_name\"/></label><br>
					<label>Last Name:<input type=\"text\" name=\"last_name\" value=\"$data->last_name\" required/></label><br>
					<input type=\"submit\" name=\"action\" value=\"Edit Profile\" />";
				?>
			</form>
		</div>

	</body>
</html>