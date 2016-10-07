<?php
/*
Template Name: Youtube Page 
*/

get_header(); 
$container = get_field('add_container');
?>
<?php get_template_part('content', 'banner'); ?>
<section class="page container <?php if($container){echo "bg-container";}?>">
	<?php get_template_part('content', 'youtube'); ?>

</section>
<div class="go-back">
	<?php wps_parent_post(); ?>
	
</div>
<?php get_footer(); ?>