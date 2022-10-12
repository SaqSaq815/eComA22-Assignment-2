<html>
	<head>
		<title>Home Page</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</head>

    <body>
        <?php require 'app\views\includes\header.php'; ?>
		<?php require 'app\views\includes\error.php'; ?>

		<h1>Home Page</h1>

		<?php 
			foreach ($data as $item) {
				echo "<a href='/Publication/detail/$item->publication_id'>$item->publication_id: $item->caption</a></br>";
			}
		?>

	</body>

</html>