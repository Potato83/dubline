<?php
/*
Template Name: Contact Page 
 */
get_header(); ?>
<header>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/sig_info.png" alt="logo" class="logo"> 
	</a>
</header>
<section class="contact">
	<div class="navigation">
		<?php
		wp_nav_menu( array(
		  
		  'theme_location'  => 'contact',                
		  'container'     => 'ul',
		  'menu_class'    => 'menu-ul'                
		) );
		?>
	</div>

</section>



<?php get_footer(); ?>