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
			<h1>Publication Creation</h1>

			<form action='' method='post' enctype='multipart/form-data'>

				<label class="file_upload">
					<input type="file" name="picture" id="picture" required/>
					Upload
				</label>
				<img id='picture_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" /><br>
				<label for="caption">Caption</label>
				<input type="textarea" id="caption" name="caption"/><br>
				<input type="submit" name="action" value="Save" />
			</form>

			<script>
				picture.onchange = evt => {
					const [file] = picture.files
					if (file) {
						picture_preview.src = URL.createObjectURL(file)
					}
				}
			</script>
		</div>
	</body>
</html>