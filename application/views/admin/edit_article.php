<?php include('admin_header.php'); ?>


<div class="container" >
<div class="row">
 	<!--login form div starts -->
    <div class="col-sm-6 col-sm-offset-3">
    	<div class="form-box">
        	<div class="form-top">
        		<div class="form-top-left">
					<?php echo img(['src'=>'assets/images/2.png','class'=>'img-circle img-responsive','style'=>'margin:0 auto;','width'=>100,'height'=>100]); ?>
        			<h4 style="margin:1px auto;text-align:center;color:black;">Edit Your Article</h4>
        		</div>

            </div>
            <div class="form-bottom">     

            <?php if (count($article)): ?> 
            	<?php echo form_open("admin/update_article/{$article->id}",['class'=>'login-form']); ?>
                <div class="form-group">
            		<?php echo form_input(['name'=>'title','class'=>'form-control','value'=>set_value('title',$article->title),'placeholder'=>'Article Title...']); ?>
                    <?php echo form_error('title'); ?>
                    
                </div>
                <div class="form-group">
                    <?php echo form_textarea(['name'=>'body','class'=>'form-control','value'=>set_value('body',$article->body),'placeholder'=>'Article Body...']); ?>
                    <?php echo form_error('body'); ?>
                </div>

                <?php echo form_submit(['name'=>'lsubmit','value'=>'Submit','class'=>'btn btn-primary']); ?> &nbsp;
                <?php echo form_reset(['name'=>'reset','value'=>'Cancel','class'=>'btn btn-default']); ?>

                <?php else: ?>
                    <div>
                        No records found.
                    </div>
                <?php endif; ?>
            </div>
            </form>
        </div>
    </div>      
</div><!-- login ends here-->
</div>

</div>


<?php include('admin_footer.php'); ?>