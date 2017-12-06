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
		} ?>
		<?php $this->load->helper('url');
		?>
		

<script src="http://display.rss.com/feedwind.js" data-rss-param=?widget_parameter=%7B%22sources%22%3A%5B%5D%2C%22iframe_height%22%3A500%2C%22iframe_width%22%3A578%2C%22footer_height%22%3A32%2C%22header_color%22%3A%22%23ffffff%22%2C%22font_color%22%3A%22%2303588c%22%2C%22main_bg_color%22%3A%22%23ffffff%22%2C%22main_font_color%22%3A%22%23000000%22%2C%22main_font%22%3A%22Arial%22%2C%22showImages%22%3Atrue%2C%22showContent%22%3Atrue%2C%22showSource%22%3Atrue%2C%22showDate%22%3Atrue%2C%22title_font_size%22%3A13%2C%22content_font_size%22%3A12%2C%22autoScroll%22%3Atrue%2C%22scroll_delay%22%3A3000%2C%22num_entries%22%3A100%2C%22cornerStyle%22%3A1%2C%22separationLine%22%3Atrue%2C%22showBorder%22%3Atrue%2C%22borderStyle%22%3A%22solid%22%2C%22borderColor%22%3A%22%23c6ccd1%22%2C%22borderWidth%22%3A1%2C%22thumbnailResize%22%3A%221%22%2C%22thumbnailSelect%22%3A0%2C%22thumbnailHttps%22%3Afalse%2C%22customFeedTitle%22%3Atrue%2C%22feedTitleText%22%3A%22My%20Feed%22%2C%22feedTitleUrl%22%3A%22http%3A%2F%2Fwww.opennews%2Ccom%22%2C%22feedTitleFontSize%22%3A16%2C%22openLinks%22%3A%22_blank%22%2C%22keywordInclude%22%3A%22%22%2C%22keywordExclude%22%3A%22%22%2C%22keywordEnable%22%3Afalse%2C%22feedBackgroundUrl%22%3A%22http%3A%2F%2F%22%2C%22iframeHeightStyle%22%3A1%2C%22iframeWidthStyle%22%3A0%2C%22feedItemsToDisplay%22%3A3%2C%22calculatedHeight%22%3A498%2C%22calculatedWidth%22%3A576%2C%22date_font_size%22%3A12%2C%22footer_font_size%22%3A12%2C%22source_font_size%22%3A12%2C%22clientDomain%22%3A%22%22%2C%22twitter_sources%22%3A%5B%22Malkhan52%22%5D%7D></script>
		
<script>

function notifyMe() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("Hi Notifications Allowed!!");
  }

  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== "denied") {
    Notification.requestPermission(function (permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
        var notification = new Notification("Hi Notifications denied!");
      }
    });
  }

  // At last, if the user has denied notifications, and you 
  // want to be respectful there is no need to bother them any more.
}

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '109846793049674',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
		<div class="row">
				<div class="col-lg-9">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg') ?>" width="1200" height="700" alt="Los Angeles">
									<div class="carousel-caption">
											
											<h4><?php echo anchor('copennews/article_1','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article_1','LA is always so much fun!');?></p>
											
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg') ?>" width="1200" height="700" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article_2','Chicago');?></h4>
										<p><?php echo anchor('copennews/article_2','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/sulkhan.jpg') ?>" width="1200" height="700" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article_3','Chicago');?></h4>
										<p><?php echo anchor('copennews/article_3','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg') ?>" width="1200" height="700" alt="New York">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article_4','New York');?></h4>
										<p><?php echo anchor('copennews/article_4','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="jumbotron">
					<h4><?php echo anchor('copennews/location','Know your Location');?> </h4>
					</div>
				</div>
				<div class="col-lg-3">
				<div class="jumbotron">
					<button onclick="notifyMe()">Notify me!</button>
					
				</div>
				</div>
				
			</div><br/>
			<div class="row">
			<div class="col-sm-11">
				<h4><b>International top news</b></h4>
			</div>
			<div class="col-sm-1">
				<p><?php echo anchor('copennews/international','See All');?></p>
			</div>
		</div>
		
			<div class="row">
				<div class="col-lg-3">
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel1" data-slide-to="1"></li>
							<li data-target="#myCarousel1" data-slide-to="2"></li>
							<li data-target="#myCarousel1" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg'); ?>" width="280" height="184" alt="Los Angeles">
									<div class="carousel-caption">
											<h4><?php echo anchor('copennews/article_1','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article_1','LA is always so much fun!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/sulkhan.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg'); ?>" width="280" height="184" alt="New York">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','New York');?></h4>
										<p><?php echo anchor('copennews/article','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel1" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel1" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div id="myCarousel2" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel2" data-slide-to="1"></li>
							<li data-target="#myCarousel2" data-slide-to="2"></li>
							<li data-target="#myCarousel2" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg'); ?>" width="280" height="184" alt="Los Angeles">
									<div class="carousel-caption">
											<h4><?php echo anchor('copennews/article','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article','LA is always so much fun!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/sulkhan.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg'); ?>" width="280" height="184" alt="New York">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','New York');?></h4>
										<p><?php echo anchor('copennews/article','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel2" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div id="myCarousel3" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel3" data-slide-to="1"></li>
							<li data-target="#myCarousel3" data-slide-to="2"></li>
							<li data-target="#myCarousel3" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg'); ?>" alt="Los Angeles">
									<div class="carousel-caption">
											<h4><?php echo anchor('copennews/article','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article','LA is always so much fun!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago"/>
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/sulkhan.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg'); ?>" width="280" height="184" alt="New York">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','New York');?></h4>
										<p><?php echo anchor('copennews/article','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel3" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel3" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div id="myCarousel4" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel4" data-slide-to="1"></li>
							<li data-target="#myCarousel4" data-slide-to="2"></li>
							<li data-target="#myCarousel4" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg'); ?>" width="280" height="184" alt="Los Angeles">
									<div class="carousel-caption">
											<h4><?php echo anchor('copennews/article','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article','LA is always so much fun!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/sulkhan.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg'); ?>" width="280" height="184" alt="New York">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','New York');?></h4>
										<p><?php echo anchor('copennews/article','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel4" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel4" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
			</div>
		<br/>
		<div class="row">
			<div class="col-sm-11">
				<h4><b>National top news</b></h4>
			</div>
			<div class="col-sm-1">
				<p><?php echo anchor('copennews/international','See All');?></p>
			</div>
		</div>
		
			<div class="row">
				<div class="col-lg-3">
					<div id="myCarousel5" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel5" data-slide-to="1"></li>
							<li data-target="#myCarousel5" data-slide-to="2"></li>
							<li data-target="#myCarousel5" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg'); ?>" width="280" height="184" alt="Los Angeles">
									<div class="carousel-caption">
											<h4><?php echo anchor('copennews/article','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article','LA is always so much fun!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/sulkhan.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg'); ?>" width="280" height="184" alt="New York">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','New York');?></h4>
										<p><?php echo anchor('copennews/article','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel5" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel5" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div id="myCarousel6" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel6" data-slide-to="1"></li>
							<li data-target="#myCarousel6" data-slide-to="2"></li>
							<li data-target="#myCarousel6" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg'); ?>" width="280" height="184" alt="Los Angeles">
									<div class="carousel-caption">
											<h4><?php echo anchor('copennews/article','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article','LA is always so much fun!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/sulkhan.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg'); ?>" width="280" height="184" alt="New York">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','New York');?></h4>
										<p><?php echo anchor('copennews/article','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel6" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel6" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div id="myCarousel7" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel7" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel7" data-slide-to="1"></li>
							<li data-target="#myCarousel7" data-slide-to="2"></li>
							<li data-target="#myCarousel7" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg'); ?>" width="280" height="184" alt="Los Angeles">
									<div class="carousel-caption">
											<h4><?php echo anchor('copennews/article','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article','LA is always so much fun!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg'); ?>" width="280" height="184" alt="New York">
									<div class="carousel-caption">

										<h4><?php echo anchor('copennews/article','New York');?></h4>
										<p><?php echo anchor('copennews/article','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel7" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel7" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
				<div class="col-lg-3">
					<div id="myCarousel8" class="carousel slide" data-ride="carousel">
				
					
							<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel8" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel8" data-slide-to="1"></li>
							<li data-target="#myCarousel8" data-slide-to="2"></li>
							<li data-target="#myCarousel8" data-slide-to="3"></li>
						</ol>
							<!--Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo base_url('images/la.jpg'); ?>" width="280" height="184" alt="Los Angeles">
									<div class="carousel-caption">
											<h4><?php echo anchor('copennews/article','LOs Angeles');?></h4>
										<p><?php echo anchor('copennews/article','LA is always so much fun!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/chicago.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/sulkhan.jpg'); ?>" width="280" height="184" alt="Chicago">
									<div class="carousel-caption">
										<h4><?php echo anchor('copennews/article','Chicago');?></h4>
										<p><?php echo anchor('copennews/article','Thank you Chicago!');?></p>
									</div></a>
								</div>
								<div class="item">
									<img src="<?php echo base_url('images/ny.jpg'); ?>" width="280" height="184" alt="New York">
									<div class="carousel-caption">
										
										<h4><?php echo anchor('copennews/article','New York');?></h4>
										<p><?php echo anchor('copennews/article','We love the big apple!');?></p>
									</div></a>
								</div>
							</div>
							<!--Left and right controls -->
							<a class="left carousel-control" href="#myCarousel8" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel8" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
				</div>
			
		</div><br/>
			<div class="row">
			<div class="col-sm-8">
				<h3><b>Sports</b></h3>
			</div>
			<div class="col-sm-4">
				<p><b><?php echo anchor('copennews/international','See All');?></b></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>"  width="280" height="184" ></img><br/>
				<p><b><?php echo anchor('copennews/international','National');?> | </b>
					<?php echo anchor('copennews/article',$text17);?></p>	
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
				<p><b><?php	echo anchor('copennews/international','National');?> | </b>
					<?php echo anchor('copennews/article',$text2);?></p>	
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
				<p><b><?php	echo anchor('copennews/international','National');?> | </b>
					<?php echo anchor('copennews/article',$text3);?></p>	
			</div>

			<div class="col-lg-3">
					<div class="jumbotron">
					<h4>Opinion</h4></a>
					<p>Look over here!</p>
					</div>
				</div>
			</div>
				<div class="row">
			<div class="col-sm-8">
				<h3><b>Business</b></h3>
			</div>
			<div class="col-sm-4">
				<p><b><?php echo anchor('copennews/international','See All');?></b></p>
			</div>
		</div>
			<div class="row">
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
				<p><b><?php	echo anchor('copennews/international','National');?> | </b>
					<?php echo anchor('copennews/article',$text4);?></p>	
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
				<p><b><?php echo anchor('copennews/international','National');?> | </b>
					<?php echo anchor('copennews/article',$text5);?></p>	
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
			<p><b><?php echo anchor('copennews/international','National');?> | </b>
				<?php echo anchor('copennews/article',$text6);?></p>		
			</div>
			<div class="col-lg-3">
					<div class="jumbotron">
					<h5><?php echo anchor('copennews/poll',"Today's Poll question");?></h5>
					<p>Look over here!</p>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-sm-8">
				<h3><b>Entertainment</b></h3>
			</div>
			<div class="col-sm-4">
				<p><b><?php echo anchor('copennews/international','See All');?></b></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
				<p><b><?php echo anchor('copennews/international','National');?> | </b>
					<?php echo anchor('copennews/article',$text7);?></p>	
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
				<p><b><?php echo anchor('copennews/international','National');?> | </b>
					<?php echo anchor('copennews/article',$text8);?></p>	
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
				<p><b><?php echo anchor('copennews/international','National');?> | 
				</b><?php echo anchor('copennews/article',$text9);?></p>	
			</div>
			<div class="col-lg-3">
					<div class="jumbotron">
					
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-sm-8">
				<h3><b>LIfe & Style</b></h3>
			</div>
			<div class="col-sm-2">
				<p><b><?php echo anchor('copennews/international','See All');?></b></p>
			</div>
			<div class="col-sm-2">
				<b><h3>Pic of the day<h3></b>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
			<p><b><?php echo anchor('copennews/international','National');?> | </b>
				<?php echo anchor('copennews/article',$text10);?></p>		
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
			<p><b><?php echo anchor('copennews/international','National');?> | </b>
				<?php echo anchor('copennews/article',$text11);?></p>		
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
			<p><b><?php echo anchor('copennews/international','National');?> | 
			</b><?php echo anchor('copennews/article',$text12);?></p>		
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/top_pic_1.jpg'); ?>" width="280" height="184"></img>
				</div>
			</div>
			<div class="row">
			<div class="col-sm-8">
				<h3><b>Sci-Tech</b></h3>
			</div>
			<div class="col-sm-4">
				<p><b><?php echo anchor('copennews/international','See All');?></b></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
			<p><b><?php echo anchor('copennews/international','National');?> | </b>
				<?php echo anchor('copennews/article',$text13);?></p>		
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
					<p><b><?php echo anchor('copennews/international','National');?> | </b>
						<?php echo anchor('copennews/article',$text14);?></p>
			</div>

			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>	
			<p><b><?php echo anchor('copennews/international','National');?> | </b>
				<?php echo anchor('copennews/article',$text15);?></p>		
			</div>

			<div class="col-lg-3">
					<div class="jumbotron">
					<h4>Movies</h4>
					<p><?php echo anchor('copennews/article','Look Over Here');?></p>
					</div>
				</div>
			</div>
		<div class="row">
			<div class="col-sm-8">
				<h3><b>Featured</b></h3>
			</div>
			<div class="col-sm-4">
				<p><b><?php echo anchor('copennews/international','See All');?></b></p>
			</div>
		</div>
			<div class="row">
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
					<p><b><?php echo anchor('copennews/article','National');?> | </b>
						<?php echo anchor('copennews/article',$text16);?></p>
					
			</div>
			<div class="col-lg-3">
					<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img></a><br/>
				<p><b><?php echo anchor('copennews/international','National');?> | </b>
					<?php echo anchor('copennews/article',$text17);?></p>	
			</div>

			<div class="col-lg-3">
						<img src="<?php echo base_url('images/international_article.jpg'); ?>" width="280" height="184"></img><br/>
			<p><b><?php echo anchor('copennews/international','National');?> | </b>
				<?php echo anchor('copennews/article',$text17);?></p>		
			</div>

			<div class="col-lg-3">
					<div class="jumbotron">
					<h4>Citizen journalist</h4>
					<p>Send your entries to me.</p>
					</div>
			</div>
		</div>
<!-- End of body -->