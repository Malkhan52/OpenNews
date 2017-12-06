			<?php
			foreach ($results as $row) {
			$title = $row->title;
			$text1 = $row->text1;
			$text2 = $row->text2;
			$text3 = $row->text3;
			$text4 = $row->text4;
			$text5 = $row->text5;
			$text6 = $row->text6;
			$text7 = $row->text7;
			$text8 = $row->text8;
			$text9 = $row->text9;
			$text10 = $row->text10;
			$text11 = $row->text11;
			$text12 = $row->text12;
			$text13 = $row->text13;
			$text14 = $row->text14;
			$text15 = $row->text15;
			$text16 = $row->text16;
			$text17 = $row->text17;
		}?>
		<?php $this->load->helper('url');
		?>
			<!-- Start of body -->
			<div class="row">
				<div class="col-lg-8">
						<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="440" width="720"></img>
				</div>
					<div class="col-lg-4">
						<h3>Other popular Articles</h3>
						<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="200" width="300"></img><br/><br/>
				<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$text1);?></p>
				<p>--------------------------------------------------------------------</p><br/>
					</div>
			</div>

			<div class="row">
			<div class="col-lg-8">
				
				<h3><b><?php echo $text2; ?></b></h3>
				<h4><?php echo $text3; ?></h4>
				<h3><b><?php echo $text4; ?></b></h3>
				<h4><?php echo $text5; ?></h4>
			<h3><b><?php echo $text6; ?></b></h3>
			<h4><?php echo $text7; ?></h4>
			<h3><b><?php echo $text8; ?></b></h3>
			<h4><?php echo $text9; ?></h4>
			<h3><b><?php echo $text10; ?></b></h3>
			<h4><?php echo $text11; ?></h4>
			</div>

			<div class="col-lg-4">
						
						<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="200" width="300"></img><br/><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$text12);?></p>
					<p>--------------------------------------------------------------------</p><br/>
					</div>

					<div class="col-lg-4">
						
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="200" width="300"><br/><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$text13);?></p>
					<p>--------------------------------------------------------------------</p><br/>
					</div>

					<div class="col-lg-4">
						
				<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="200" width="300"></img><br/><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$text14);?></p>
					<p>--------------------------------------------------------------------</p><br/>
					</div>
				<?php
if($this->session->userdata('isUserLoggedIn')){
            $this->load->view('opennews_article_comment_page');
        }else{
           $this->load->view('opennews_article_login_comment_page');
        } ?>
			</div>
			<h2>Gallery</h2>
			<div class="row">
			<div class="col-lg-3">
			<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img>
				
			</div>
			<div class="col-lg-3">
<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img>
				
			</div>
			<div class="col-lg-3">
				<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img>
				
			</div>
			<div class="col-lg-3">
				<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img>
				
			</div>
			</div>
			
			<div class="row">
				<h3>You may also like</h3>
			<div class="col-lg-3">
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$text15);?></p>

			</div>
			<div class="col-lg-3">
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$text16);?></p>

			</div>
			<div class="col-lg-3">
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$text17);?></p>
					
			</div>
			<div class="col-lg-3">
					<?php $this->load->helper('url'); ?>
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" height="184" width="280"></img><br/>
					<p><b><?php $this->load->helper('url');
		echo anchor('copennews/international','National');?> | </b><?php $this->load->helper('url');
		echo anchor('copennews/article',$text17);?></p>
					
			</div>

			</div>
		</div>