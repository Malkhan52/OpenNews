<div class="col-lg-4">
					<div class="jumbotron">
					<h4>Comments</h4>			
					<form action="" method="post">
					<div class="form-group">
						<span class="input-group-addon"></span>
            <input type="text" class="form-control" name="comments" placeholder="Type your Comment here!!" required="" value="<?php echo !empty($Comments['Comment'])?$Comments['Comment']:''; ?>">
          <?php echo form_error('Comment','<span class="help-block">','</span>'); ?>
        </div><br/>
        	<div class="form-group">
            <input type="submit" name="commentSubmit" class="btn-primary" value="Submit"/>
        </div>
        		</form>
					
					</div>
				</div>