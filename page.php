<?php get_header(); ?>

<!-- <h1>page.php</h1> -->
<header>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dubline_sigSG.jpg" alt="logo" class="logo"> 
	</a>
</header>
<section class="page container">
	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
</section>

<?php get_footer(); ?>