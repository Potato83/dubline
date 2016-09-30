<?php get_header(); 
$custom_text = get_field('text_above');
?>

<!-- <h1>page.php</h1> -->
<header>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dubline_sigSG.jpg" alt="logo" class="logo"> 
	</a>
</header>
<section class="page container">
	<h1 align="center"><?php echo the_title(); ?></h1>
	<?php  if(has_post_thumbnail()){ ?>
	<div class="custom-text">
	<?php	echo $custom_text; ?>
	</div>
	
	<div class="center"><div class="page-feat">
		
		
	<?php
		echo the_post_thumbnail( 'large');
		echo '</div></div>';
	} else{
		echo '';
	}
  ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
	
	 
	
</section>
<div class="padder"></div>
<?php get_footer(); ?>