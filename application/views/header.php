<!DOCTYPE html>
<html lang="en">
	<head>
		<title>opennews home</title>
		<meta charset="utf-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<?php $this->load->helper('url');
		?>
			<br><br><br>
			<div align="center" class="page-header"><h1><b>OPEN<img src="<?php echo base_url('images/open_news_logo.jpg') ?>">NEWS</b></h1>
				<div class="time" align="center"><i class="fa fa-clock-o"></i>
<noscript class="hidden">Your browser does not support JavaScript!</noscript>


    <script type="text/javascript">
        var d = new Date()

        var weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
        var monthname = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec")
        document.write(weekday[d.getDay()] + ", ")
        document.write(d.getDate() + " ")
        document.write(monthname[d.getMonth()] + ", ")
        document.write(d.getFullYear() + ", ")
        document.write(d.getgettime())
                            </script>
                            Today's News 
			</div>
			</div>
			<nav class="navbar navbar-inverse navbar-info navbar-fixed-top" style="background-color: #073763">
				<div class="container-fluid">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar1">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar1">
					<ul class="nav navbar-nav">
						<li><?php echo anchor('copennews/home','Home'); ?><a data-toggle="tooltip" data-placement="top" title="Home"></a></li>
						<li class="dropdown"><a data-toggle="dropdown">News <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><?php echo anchor('copennews/international','international'); ?></li>
								<li><?php echo anchor('copennews/international','National'); ?></li>
								<li><?php echo anchor('copennews/international','States'); ?></li>
								<li><?php echo anchor('copennews/international','Cities'); ?></li>
							</ul>
						</li>
						<li><a href="#">Opinion</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Entertainment</a></li>
						<li><a href="#">Life & Style</a></li>
						<li><a href="#">Sci-tech</a></li>
						<li><a href="#">Books</a></li>
					</ul>
<?php
if($this->session->userdata('isUserLoggedIn')){
           $data['mopennews'] = $this->mopennews->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('header3');
        }else{
           $this->load->view('header2');
        } ?>