<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo @$title ?></title>
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/nutritionist/img/logo.png" width="35">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/nutritionist/img/logo.png" width="35">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/nutritionist/css/paper.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/nutritionist/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/nutritionist/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/nutritionist/css/animate.css">
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
      <a class="navbar-brand" href="<?php echo base_url('nutritionist/home')?>">LifeStyle</a>
    </div>
    <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('nutritionist/home')?>">Home</a></li>
            <li><a href="<?php echo base_url('nutritionist/clients')?>">Clients</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Inbox<span class="label label-danger">2</span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a class="list-group-item" href="<?php echo base_url('nutritionist/inbox')?>"><p>Jacob Tan</p>
                    <p>Good day, I would Like to consult...</p></a></li>
                    <li><a class="list-group-item" href="<?php echo base_url('nutritionist/inbox2')?>"><p>Sean Batoon</p>
                    <p>Good day! I would Like to consult...</p></a></li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                  <input class="form-control" placeholder="Search" type="text">
                </div>
                <a href="" class="btn btn-default" role="button">Search</a>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href=""></a></li>
              </ul>
        </form>
    </div>
	<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Albert Serenuela <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Log Out</a></li>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="<?php echo base_url();?>assets/vendors/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/vendors/js/bootstrap.min.js"></script>
  </body>
</html>