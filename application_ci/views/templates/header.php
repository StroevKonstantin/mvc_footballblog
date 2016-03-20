<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title><?php echo $title; ?></title>
		<meta name="description" content= <?php echo $meta_d; ?>>
		<meta name="keywords" content= <?php echo $meta_k; ?>>
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/component.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/default.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    	<script src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body class="body_custom">
		<div class="row header">
			<div class="container">
				<div class="col-md-10 col-sm-9 col-xs-10 top-box">
                	<a href="" class="logo"></a>
                	<p><?php echo $title; ?><br><?php echo $subtitle; ?></p>
                	<div class="clear"></div>
            	</div>
            	<div class="col-md-2 col-sm-3 col-xs-1 country-list">
                    <a href="<?php echo base_url('footballnews/index/russian'); ?>" class="ru">Русский</a>
                    <a href="" class="kz">Kazakh</a>
                    <a href="<?php echo base_url('footballnews/index/english'); ?>" class="en">English</a> 
                </div>
            </div>
		</div>