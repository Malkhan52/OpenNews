<!DOCTYPE html>
<html lang="en">
	<head>
		<title>opennews admin panel</title>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron" style="background-color: #073763">
				<div class="row">
					<div class="col-lg-offset-2 col-lg-8">
				<div class="jumbotron">
					<div class="col-lg-offset-4 col-sm-6">
						<h3><b>Users Opinion</b></h3>
					</div>

					<div class=" col-sm-8">

						<h4><b>poll question:- Rate my website.</b></h4>
					</div>
				<div  id="ballot_form" class="row col-md-12">
				<form method="post" role="form" action="<?php echo site_url('copennews/cast_vote'); ?>" >
					<table class="table table-bordered" id="vote">
						<tbody>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="user_vote" value="1">Excellent</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="user_vote" value="2">Good</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="user_vote" value="3">Awesome</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="user_vote" value="4">Normal</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="user_vote" value="5">Need Changes</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="user_vote" value="6">Copied from others</label>
								</td>
							</tr>
						</tbody>
					</table>

						<div class="row">
							<div class="col-sm-4">
						<div id="submission_div">
						<button type="submit" id="submit" class="btn btn-primary" >Submit Vote</button>
						</div>
					</div>
					<div class="col-sm-4">
						<button type="button" class="btn btn-info"><?php echo anchor('copennews/home','Back');?></button>
					</div>
				</div>
				</form>
				</div>
					<div class="col-lg-offset-2 col-lg-10">
					
					</div>
					<div class="btn-group btn-group-justified">
						<a href="https://twitter.com/login" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="www.twitter.com">Twitter</a>
						<a href="https://facebook.com/" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="www.facebook.com">Facebook</a>
						<a href="https://plus.google.com/" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="www.plus.google.com">Google+</a>
					</div><hr/>
						
				</div>
			</div>

  <script>
  

  
   $(document).ready(function() {
	  
	  $("#submit").click(function(event) {
		  event.preventDefault();  
	    var rating_options = $("input#rating_options").val(); 
	    var votes = $("input#votes").val(); 
	$.ajax({
		method: "POST",
		url: "<?php echo base_url(); ?>index.php/copennews/get_vote",	
		dataType: 'JSON',
		data: {rating_options: rating_options, votes: votes,},
		
		success: function(data) {
			console.log(rating_options, votes);
			$("#data").load(location.href + " #data");
			$("#message").html("You have successfully voted Thank you");
			$("#message").show().fadeOut(3000);
		}
	});
	  });
  });
  		
	 });
  
	</script>		
		</div>
	</body>
</html>