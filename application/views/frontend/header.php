<!DOCTYPE HTML>
<html>
<head>
<title>Job Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="<?php echo $this->config->item('site_url');?>/assets/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo $this->config->item('site_url');?>/assets/js/jquery.min.js"></script>
<script src="<?php echo $this->config->item('site_url');?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo $this->config->item('site_url');?>/assets/js/app.js"></script>

<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo $this->config->item('site_url');?>/assets/css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome-->
<link href="<?php echo $this->config->item('site_url');?>/assets/css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.html"><img src="<?php echo $this->config->item('site_url');?>/assets/images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;text-align:right;margin-top:15px;">
	       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			  Job Seeker
			</button>
			 <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal1">
			  Employer
			</button>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Login</h4>
			      </div>
			      <div class="modal-body">
			          <input placeholder="Username" type="text" required>
					  <input placeholder="Password" type="password" required>
					   <button type="button" class="btn btn-primary">Login</button>
					   Don't have an account <a href="<?php echo $this->config->item('base_url');?><?php echo $this->config->item('index_page');?>/job_seeker/create_account">Create Now</a>
			      </div>
			      <div class="modal-footer">
			        
			       
			      </div>
			    </div>
			  </div>
	</div>
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
			      </div>
			      <div class="modal-body">
			        ...
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
	</div>