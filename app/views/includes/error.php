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