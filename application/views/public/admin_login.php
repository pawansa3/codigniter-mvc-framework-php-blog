<?php include('public_header.php'); ?>
<div class="container-fluid" style="
    padding: 0;max-height: 500px;height: 500px;">
    <div style='width: 100%;height: 100%;background-position: center;background-image: url("<?= base_url().'uploads/bg-post.jpg' ?>"');>
        <br>
        <div style="padding:100px;">
        <?php echo img(['src'=>'assets/images/2.png','class'=>'img-circle img-responsive','style'=>'margin:0 auto;','width'=>100,'height'=>100]); ?>
        <h1 style="text-align:center;color:black;margin: 0;font-family: cursive;">Log In</h1>
        </div>
    </div>
</div>

<div class="container" >
<div class="row">
 	<!--login form div starts -->
    <div class="col-sm-6 col-sm-offset-3">
    	<div class="form-box">
        	<div class="form-top">
                <br>
                <?php if ($error = $this->session->flashdata('login_fail')):?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?= $error; ?>
                </div>
                <?php endif;?>

            </div>
            <div class="form-bottom">      
            	<?php echo form_open('login/admin_login_req',['class'=>'login-form']); ?>                	
                <div class="form-group">
            		<?php echo form_input(['name'=>'username','class'=>'form-control','value'=>set_value('username'),'placeholder'=>'Username...']); ?>
                    <?php echo form_error('username'); ?>
                    
                </div>
                <div class="form-group">
                    <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password...']); ?>
                    <?php echo form_error('password'); ?>
                </div>

                <?php echo form_submit(['name'=>'lsubmit','value'=>'Login','class'=>'btn btn-primary']); ?> &nbsp;
                <?php echo form_reset(['name'=>'reset','value'=>'Cancel','class'=>'btn btn-default']); ?>
            </div>
            </form>
        </div>
    </div>      
</div><!-- login ends here-->
</div>

</div>

<?php include('public_footer.php'); ?>