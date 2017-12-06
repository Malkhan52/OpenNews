<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>opennews login page</title>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php $this->load->helper('url');
		?>
		<div class="container">
			<div class="jumbotron" style="background-color: #073763">
				<div class="row">
					<div class="col-lg-offset-2 col-lg-8">
				<div class="jumbotron">
				<div class="row">
					<div class="col-lg-offset-5 col-sm-4">
						<h2><b>Login</b></h2>
					</div>
				</div>
					<div class="row">
					 <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
    <script>
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
								<div class="col-lg-offset-3 col-lg-6">
									<form action="" method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<div class="form-group has-feedback">
            						<input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
           							 <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        						</div>
								</div><br/>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<div class="form-group">
          							<input type="password" class="form-control" name="password" placeholder="Password" required="">
          								<?php echo form_error('password','<span class="help-block">','</span>'); ?>
        						</div>
								</div>
								<div class="checkbox">
									<label><input type="checkbox"> remember me</label>
								</div>
									<b><a href="#">Forgot Password ?</a></b>
								<div class="col-lg-6">
									<div class="form-group">
            							<input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
        							</div>
								</div>
									</form>
								</div>
							</div>
						<div class="row">
							<div class="col-lg-offset-2 col-lg-10">
								<p><b>Login</b> with your social media account..</p>
								<br/>
							</div>
						</div>
						<div class="btn-group btn-group-justified">
							<a href="https://twitter.com/login" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="www.twitter.com">Twitter</a>
							<div class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="www.facebook.com"><?php echo anchor('copennews/oauth_facebook',"Facebook");?></div>
							<div class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="www.plus.google.com"><?php echo anchor('copennews/oauth_googleplus',"Google+");?></div>
						</div><hr/>
							<p>Don't have an account?&nbsp;&nbsp;Register now!</p>
						<div class="row">
							<div class="col-lg-offset-5 col-sm-4">
								<div class="btn btn-success btn-lg"><?php echo anchor('copennews/registration','Register');?></div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>