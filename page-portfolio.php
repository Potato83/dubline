<?php
/*
Template Name: Portfolio Page 
 */

get_header(); 
$container = get_field('add_container');
$color = get_field('color');
$text_color = get_field('text_color');
?>
<?php if($container) { ?>
<style>
	.portfolio-container{
		background: <?php echo $color; ?>;
		color: <?php echo $text_color; ?>;
	}
	.back-color a{
		color: <?php echo $text_color; ?>;
	}
</style>
<?php } ?>

<?php get_template_part('content', 'banner'); ?>
<section class="page <?php if($container){echo "portfolio-container bandcamp";}?>">
	<?php get_template_part('content', 'menufort'); ?>
	<div class="go-back back-color">		
		<?php wps_parent_post(); ?>
	</div>
</section>
<div class="padder"></div>
	
<?php get_footer(); ?>