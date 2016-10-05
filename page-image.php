<?php
/*
Template Name: Image Page 
*/
$album = get_field('album'); 
get_header(); ?>


<section class="page container-fluid images">
<h1 align="center"><?php echo the_title(); ?></h1>
	<?php get_template_part('content', 'images'); ?>
	
</section>


<?php get_footer(); ?>