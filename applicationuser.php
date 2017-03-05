<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title><?php echo @$title; ?></title>
	    <link rel="shortcut icon" href="<?php echo base_url();?>assets/home/img/logo.png" width="35">
		<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/home/img/logo.png" width="35">
	
    <!-- Bootstrap -->
	    <link href="<?php echo base_url();?>assets/client/css/animate.css" rel="stylesheet">
	    <link href="<?php echo base_url();?>assets/client/css/paper.css" rel="stylesheet">
	    <link href="<?php echo base_url();?>assets/client/css/jumbotron.css" rel="stylesheet">
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
		      <a class="navbar-brand" href="<?php echo base_url('client/home')?>">LifeStyle</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li class="dropdown">
       	   			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification<span class="label label-danger">2</span></a>
          			<ul class="dropdown-menu">
            			 <li><a class="list-group-item" href=""><p>Dr. Albert Serenuela</p>
	                    <p>Good day!</p></a></li>
	                    <li><a class="list-group-item" href=""><p>Dr. Charlse Yancha</p>
	                    <p>Good day!</p></a></li>
	          			</ul>
        		</li>
		      </ul>
		      <ul class="nav navbar-nav navbar-left">
      		  	<li class="dropdown">
       	   			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Logout</a></li>
          			</ul>
        		</li>
        		<li>&nbsp;&nbsp;&nbsp;</li>
				</ul>
		    </div>
		  </div>
		</nav>
		<div class="animated fadeIn">
			<section>
					<?php echo $yield ?>
			</section>
		</div>
    	<br><br><br>
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		   <script src="<?php echo base_url();?>assets/vendors/js/jquery.js"></script>
		    <!-- Include all compiled plugins (below), or include individual files as needed -->
		    <script src="<?php echo base_url();?>assets/vendors/js/bootstrap.min.js"></script>
  </body>
</html>