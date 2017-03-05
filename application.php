<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?php echo @$title; ?></title>
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/img/logo.png" width="35">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/admin/img/logo.png" width="35">
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap2.min.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>assets/admin/css/animate.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>assets/admin/css/employer.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/admin.css" rel="stylesheet">
	
  </head>
    <body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo base_url('admin/home')?>">LifeStyle</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo base_url('admin/home')?>">Home</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-left">
      		  	<li class="dropdown">
       	   			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="<?php echo base_url('admin/home')?>">Nutritionist</a></li>
            			<li><a href="<?php echo base_url('admin/staff')?>">Staff</a></li>
          			</ul>
        		</li>
			</ul>
		    <ul class="nav navbar-nav navbar-right">
      		  	<li class="dropdown">
       	   			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrator<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Logout</a></li>
          			</ul>
        		</li>
			</ul>
		    </div>
		  </div>
		</nav>
		<div class="animated fadeIn">
			<section>
					<?php echo $yield ?>
			</section>
		</div>
		<script src="<?php echo base_url();?>assets/vendors/js/jquery.js"></script>
	    <script src="<?php echo base_url();?>assets/vendors/js/bootstrap.min.js"></script>
  </body>
</html>