<?php include('public_header.php'); ?>
<div class="container-fluid" style="
    padding: 0;max-height: 500px;height: 500px;">
    <div style='height: 20%;width: 100%;height: 100%;background-position: center;background-image: url("<?= base_url().'uploads/bg-post.jpg' ?>"');>
    	<div style="padding:100px;">
        <?php echo img(['src'=>'assets/images/0.png','class'=>'img-circle img-responsive','style'=>'margin:0 auto;','width'=>100,'height'=>100]); ?>
        <h1 style="text-align:center;color:black;margin: 0;font-family: cursive;">Welcome to My Blog</h1>
        </div>
    </div>
</div>

<div class="container">


        <?= form_error('search_query'); ?>
    <div class="container" style="width: 80%;">
	<ul class="list-group" >
		<?php if (count($articles)): 
			$count = $this->uri->segment(3,0);
			foreach ($articles as $article): ?>
				<li class='list-group-item' style='border:0;padding: 3px 20px;'><h2 style='border:0;font-family: cursive;font-weight: bold;'><?= $article->title ?></h2></li>
				<li class='list-group-item' style='border:0;padding: 3px 20px;'><i>Posted on: <?= date('d M Y h:i:s',strtotime($article->created_at ));?></i></li>
				<li class='list-group-item' style='border:0;padding: 3px 20px;'>
					<p style="font-size: 25px;font-family: cursive;"><?= strlen($article->body) > 200 ? substr($article->body, 0, 200) . '...' : $article->body ?>
						<?= anchor("users/article_find/{$article->id}",'<br><button class="btn btn-primary">READ MORE</button>',[]) ?>		
					</p>
				</li>
				<hr>
			<?php endforeach; ?>
			<?php else: ?>
				<li class='list-group-item'>No records found</li>
			<?php endif; ?>
	</ul>
	</div>
	<div class="text-center">
		<?= $this->pagination->create_links(); ?>
	</div>
</div>



<?php include('public_footer.php'); ?>