<html>
	<head>
		<title>Post</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/public/css/style.css">
	</head>

	<body>
		<?php require 'app\views\includes\header.php'; ?>
		<?php require 'app\views\includes\error.php'; ?>
		<div class="main">
			<h1>Write a Comment</h1>

			<form action='' method='post' enctype='multipart/form-data'>
				<label for="comment">Comment</label>
				<input type="textarea" id="comment" name="comment_text"/><br>
				<input type="submit" name="action" value="Post Comment" />
			</form>
		</div>
	</body>
</html>