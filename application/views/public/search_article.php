<?php include('public_header.php'); ?>

<div class="container">

<h1>Search Results</h1>
<hr/>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Sr.No.</th>
				<th>Title</th>
				<th>Date Published</th>
			</tr>
		</thead>
		<tbody>
			<?php if (count($articles)): 
				$count = $this->uri->segment(4,0);
				foreach ($articles as $article): ?>
					<tr>
						<td><?= ++$count ?></td>
						<td><?= anchor("users/article_find/{$article->id}",$article->title,[]) ?></td>
						<td><?= $article->created_at ?></td>
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



<?php include('public_footer.php'); ?>