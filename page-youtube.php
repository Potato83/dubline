<?php
/*
Template Name: Youtube Page 
*/

get_header(); 
$container = get_field('add_container');
$color = get_field('color');
$text_color = get_field('text_color');
?>
<?php get_template_part('content', 'banner'); ?>
<?php if($container) { ?>
<style>
	.bg-container{
		background: <?php echo $color; ?>;
		color: <?php echo $text_color; ?>;
	}
	.back-color a{
		color: <?php echo $text_color; ?>;
	}
</style>
<?php } ?>
<section class="page container <?php if($container){echo "bg-container";}?>">
	<?php get_template_part('content', 'youtube'); ?>

</section>
<div class="go-back back-color">
	<?php wps_parent_post(); ?>
	
</div>
<?php get_footer(); ?>