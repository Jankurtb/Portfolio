<?php if(count($msg) > 0): ?>
	<div class = "well alert-danger">
		<?php foreach($msg as $errors): ?>
			<p class ="alert alert-danger"> <?php echo $errors; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>