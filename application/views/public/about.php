<?php include('public_header.php'); ?>
<div class="container-fluid" style="
    padding: 0;max-height: 500px;height: 500px;">
    <div style='height: 20%;width: 100%;height: 100%;background-position: center;background-image: url("<?= base_url().'uploads/bg-post.jpg' ?>"');>

    	<div style="padding:100px;">
        <?php echo img(['src'=>'assets/images/3.png','class'=>'img-circle img-responsive','style'=>'margin:0 auto;','width'=>100,'height'=>100]); ?>
        <h1 style="text-align:center;color:black;margin: 0;font-family: cursive;">About Me</h1>
        </div>

    </div>
</div>

<div class="container">
	<p style="font-family: cursive;font-size: 25px;">This is about me!!!</p>
</div>

<?php include('public_footer.php'); ?>