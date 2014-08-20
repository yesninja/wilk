<!doctype html>

<html lang="en">
	<head>
	  <meta charset="utf-8">

	  <title><?php get_the_title(); ?></title>
	  
	  <?php get_the_meta(); ?>
	  <?php get_the_css(); ?>
	  <?php get_the_scripts(); ?>
	  <link rel="stylesheet" href="css/bootstrap.css?v=1.0">
	  <link rel="stylesheet" href="css/styles.css?v=1.0">
	  
	  <script src="/js/library/bootstrap.js"></script>
	  <script src="/js/library/masonry.js"></script>
	  
	  <!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
	  
	</head>

	<body>	