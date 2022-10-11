<html>
	<head>
		<title>Profile View</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</head>

    <body>
        <?php require 'app\views\includes\header.php'; ?>
		<?php require 'app\views\includes\error.php'; ?>

		<h1>Your Profile</h1>
		<?php
			$profile = new \app\models\Profile();
			$profile = $profile->getByUserID($_SESSION['user_id']);

			echo "
				<dl>
					<dt>
						First Name:
					</dt>

					<dd>
						$profile->first_name
					</dd>

					<dt>
						Middle Name:
					</dt>

					<dd>
						$profile->middle_name
					</dd>

					<dt>
						Last Name:
					</dt>
					
					<dd>
						$profile->last_name
					</dd>
				</dl>"	
		?>
		<a href='/Profile/edit'>Edit Profile</a>

	</body>

</html>