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
            <h1>Publication Detail</h1>
            <dl>
                <dt>
                    Picture:
                </dt>
                <dd>
                <img src="/images/blank.jpg" style="max-width:200px;max-height:200px" id="picture_preview" />
                </dd>
                <dt>
                    Caption:
                </dt>
                <dd>
                    <?= $data['publication']->caption ?>
                </dd>
                <dt>
                    Comments:
                </dt>
                <dd>
                    <?php
                        foreach ($data['comment'] as $item) {
                            echo "<tr>
                                <td type=name>$item->comment_id</td>
                                <td type=name>$item->comment_text</td>
                                </tr><br>";
                        }
                    ?>
                
                </dd>

                <dd>
                    <a href='/Comment/create/<?= $data['publication']->publication_id?>'>add Comment</a>
                </dd>
            </dl>
        </div>
        <script>
            file = "" + "<?= $data['publication']->picture ?>"
            if (file != "") {
                document.getElementById("picture_preview").src = "/images/" + file;
            }
        </script>
    </body>
</html>