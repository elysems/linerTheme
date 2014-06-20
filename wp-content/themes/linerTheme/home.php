<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="blogMain">

			<h1><?php _e( 'Resources' ); ?></h1>

			<?php get_template_part('loop'); ?> 
			

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

