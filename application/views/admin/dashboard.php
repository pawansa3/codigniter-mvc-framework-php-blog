<?php include('admin_header.php'); ?>

<div class="container">
	<a href="<?= base_url('admin/store_article')?>" class="btn btn-primary pull-right">Add Article</a>

    <?php if ($feedback = $this->session->flashdata('feedback')):
    	$feedback_class = $this->session->flashdata('feedback_class');
    ?>
    <div class="alert alert-dismissible <?= $feedback_class ?> pull-left" style='width:50%;'>
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?= $feedback; ?>
    </div>
    <?php endif;?>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Sr.No.</th>
				<th>Title</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if (count($articles)): 
				$count = $this->uri->segment(3,0);
				foreach ($articles as $article): ?>
					<tr>
						<td><?= ++$count ?></td>
						<td><?= $article->title ?></td>
						<td>
							<?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
							<?= anchor("admin/delete_article/{$article->id}",'Delete',['class'=>'btn btn-danger']); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td colspan='3'>No records found</td>
					</tr>
				<?php endif; ?>
		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>

<?php include('admin_footer.php'); ?>