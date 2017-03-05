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
	    <link href="<?php echo base_url();?>assets/staff/css/animate.css" rel="stylesheet">
	    <link href="<?php echo base_url();?>assets/staff/css/paper.css" rel="stylesheet">
	    <link href="<?php echo base_url();?>assets/staff/css/employer.css" rel="stylesheet">
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
		      <a class="navbar-brand" href="<?php echo base_url('staff/home')?>">LifeStyle</a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
      		  	<li class="dropdown">
       	   			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gelly Camungao<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Logout</a></li>
          			</ul>
        		</li>
			</ul>
		  </div>
		</nav>
		<div class="animated fadeIn">
			<section>
					<?php echo $yield ?>
			</section>
		</div>
    	<br><br><br>
			<center><footer>
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12">
		                    <ul class="list-inline">
		                        <li>
		                            <a href="#">Home</a>
		                        </li>
		                        <li class="footer-menu-divider">&sdot;</li>
		                        <li>
		                            <a href="#About us">About us</a>
		                        </li>
		                        <li class="footer-menu-divider">&sdot;</li>
		                        <li>
		                            <a href="#Consult">Consult</a>
		                        </li>
		                        <li class="footer-menu-divider">&sdot;</li>
		                        <li>
		                            <a href="#Contact">Contact us</a>
		                        </li>
		                    </ul>
		                    <p class="copyright text-muted small">Copyright &copy; LifeStyle 2017. All Rights Reserved</p>
		                </div>
		            </div>
		        </div>
		    </footer></center>
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		   <script src="<?php echo base_url();?>assets/vendors/js/jquery.js"></script>
		    <!-- Include all compiled plugins (below), or include individual files as needed -->
		    <script src="<?php echo base_url();?>assets/vendors/js/bootstrap.min.js"></script>
  </body>
</html>