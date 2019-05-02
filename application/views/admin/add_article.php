<?php include('admin_header.php'); ?>

<?php
date_default_timezone_set('UTC');
?>

<div class="container" >
<div class="row">
 	<!--login form div starts -->
    <div class="col-sm-6 col-sm-offset-3">
    	<div class="form-box">
        	<div class="form-top">
        		<div class="form-top-left">
					<?php echo img(['src'=>'assets/images/2.png','class'=>'img-circle img-responsive','style'=>'margin:0 auto;','width'=>100,'height'=>100]); ?>
        			<h4 style="margin:1px auto;text-align:center;color:black;">Add Your Article</h4>
        		</div>

            </div>
            <div class="form-bottom">      
            	<?php echo form_open_multipart('admin/store_article',['class'=>'login-form']); ?>
            	<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
                <?php echo form_hidden('created_at',date('Y-m-d h:i:s',strtotime('+ 5 hours 30 minutes'))); ?>
                <div class="form-group">
            		<?php echo form_input(['name'=>'title','class'=>'form-control','value'=>set_value('title'),'placeholder'=>'Article Title...']); ?>
                    <?php echo form_error('title'); ?>
                    
                </div>
                <div class="form-group">
                    <?php echo form_textarea(['name'=>'body','rows'=>4,'class'=>'form-control','value'=>set_value('body'),'placeholder'=>'Article Body...']); ?>
                    <?php echo form_error('body'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_upload(['name'=>'image','class'=>'form-control']); ?>
                        <?php if(isset($upload_error) && !empty($upload_error))
                            echo "<div class='tooltiptext'>$upload_error</div>"; 
                        ?>
                </div>

                <?php echo form_submit(['name'=>'lsubmit','value'=>'Submit','class'=>'btn btn-primary']); ?> &nbsp;
                <?php echo form_reset(['name'=>'reset','value'=>'Cancel','class'=>'btn btn-default']); ?>
            </div>
            </form>
        </div>
    </div>      
</div><!-- login ends here-->
</div>

</div>



<?php include('admin_footer.php'); ?>