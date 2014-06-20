<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900,200italic,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
       

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body 

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clearfix" role="banner">

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							
							<h1>Your Brand Name</h1>
						</a>
					</div> <!-- end logo -->
					<!-- /logo -->

					
					<?php if (is_front_page()): ?>
        					<h2>One sentence about how you're great.</h2>
					<?php elseif (is_page(8)): ?>

					        <h2>One sentence about your offerings.</h2>
					

					<?php elseif (is_single()): ?>

					        <h2>One sentence about your blog content.</h2>
					
					<?php elseif (is_page(10)): ?>

					        <h2>One sentence about why clients love you.</h2>

					<?php else:?>
						<h2>One sentence about your blog content.</h2>
				
					 <?php endif; ?>
					
					

			</header>
			
			<!-- /header -->
