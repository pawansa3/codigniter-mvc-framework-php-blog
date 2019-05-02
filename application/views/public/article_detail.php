<?php include('public_header.php'); ?>

<div class="container-fluid" style="padding: 0;">
	<img src="<?= $article->image_path ?>" alt="image" style="width:100%;height: 500px;">
    <div class="container"  id='para1'>
    	<h3 class="" style="font-family: cursive;font-weight: bold;"><?= $article->title; ?></h3>
		<p>
			<i style="font-size:15px;">Posted on: <?= date('d M Y h:i:s',strtotime($article->created_at)); ?></i>
			<br>
			<?= $article->body; ?>
		</p>
    </div>
</div>



<?php include('public_footer.php'); ?>