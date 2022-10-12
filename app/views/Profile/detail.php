<html>
	<head>
		<title>Profile View</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/public/css/style.css">
	</head>

    <body>
        <?php require 'app\views\includes\header.php'; ?>
		<?php require 'app\views\includes\error.php'; ?>
		<div class="main">
			<?php
				$profile = new \app\models\Profile();
				$profile = $profile->getByUserID($_SESSION['user_id']);
				echo "<h1>$profile->first_name $profile->middle_name $profile->last_name</h1>";
			?>
		
			<table id=owned_publication>
				<tr>
					<th>Publication ID</th>
					<th>Caption</th>
					<th>Actions</th>
				</tr>
				<?php
					foreach ($data as $item) {
						echo "<tr>
							<td type=name>$item->publication_id</td>
							<td type=name>$item->caption</td>
							<td type=action>
							<a href='/Publication/update/$item->publication_id'>edit</a> | 
							<a href='/Publication/detail/$item->publication_id'>details</a> |
							<a href='/Publication/delete/$item->publication_id'>delete</a> |
							</td>
							</tr><br>";
					}
					echo "</table>";
				?>
			</table>
			<a style="text-align: center" href='/Profile/update'>Edit Profile</a>
		</div>
	</body>

</html>