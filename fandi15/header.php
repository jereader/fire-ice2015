<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

</head>
<body <?php body_class(''); ?>>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
	<script>
	$( document ).ready(function() {
		$(window).stellar();
		});
	</script>