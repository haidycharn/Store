<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Software Installation" />

	<title>Installation | Store</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <!-- <link href="<?php echo base_url('assets/backend/css/vendor/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/backend/css/vendor/dataTables.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/backend/css/vendor/responsive.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/backend/css/vendor/buttons.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/backend/css/vendor/select.bootstrap4.css');?>" rel="stylesheet" type="text/css" /> -->

	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
</head>
<body class="page-body">
<div class="page-container horizontal-menu">
	<header class="navbar navbar-fixed-top" style="min-height: 80px; background: linear-gradient(135deg,#0F2027 0,#2C5364 60%) !important;">
		<div class="navbar-inner">
			<!-- logo -->
			<div class="navbar-brand">
				<a href="#">
					<!-- <img src="<?php echo base_url('uploads/system/logo-light.png');?>"  style="max-height:40px;"/> -->
				</a>
			</div>
	    	<div class="navbar-brand pull-right" style="margin-top: 13px;color:white;">
	        	<?php echo $page_name;?>
				<br/>
				<p class="pull-right"><?php echo (!empty($user_name) ? 'Hi, '.$user_name:'' )?></p>
	       	</div>
		</div>
	</header>
	<div class="main-content">
		<div class="container">
			<div class="row">