<?php
/*
Template Name: Hearing Place 
 */
$menu = get_field('menu_item');
$container = get_field('add_container');
get_header(); ?>
<header>
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Hearing There' ) ) ); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Hearing-there.png" alt="logo" class="logo"> 
	</a>
</header>
<section class="page container <?php if($container){echo "bg-container";}?>">
	<h1 align="center"><?php echo the_title(); ?></h1>
	<?php 
	 
	if(has_post_thumbnail()){ ?>
	<div class="center"><div class="page-thum">
		
		
	<?php
		echo the_post_thumbnail( 'large');
		echo '</div></div>';
	} else{
		echo '';
	}
//echo the_post_thumbnail( 'large'); ?>

	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
	<div class="go-back">
	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Map' ) ) ); ?>">Back</a>
</div>
</section>
<div class="padder"></div>
<div class="padder"></div>

<?php get_footer(); ?>