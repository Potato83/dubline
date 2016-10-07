<?php
/*
Template Name: Blog Page 
 */

get_header(); 
$blog_post = get_field('blog_post');
?>
<?php get_template_part('content', 'banner'); ?>
<h1 align="center">PEACE LINES BELFAST</h1>
<h4 align="center">LISTENING THROUGH THE WALLS</h4>
<section class="container-fluid">
	<div class="blog-container">
<?php foreach ($blog_post as $posty){ ?>
	<h1><?php echo $posty['title']; ?></h1>
	<img src="<?php echo $posty['picture_1']['url']; ?>" alt="<?php echo $posty['picture_1']['alt']; ?>" class="img-responsive">
	<div class="padder"></div>
	<div class="text"><?php echo $posty['text_1']; ?></div>
	<?php if($posty['picture_2']) { ?>
		<img src="<?php echo $posty['picture_2']['url']; ?>" alt="<?php echo $posty['picture_2']['alt']; ?>" class="img-responsive">
	<?php } ?>
	<?php if($posty['text_2']) { ?>
		<div class="text"><?php echo $posty['text_2']; ?></div>
	<?php } ?>
	<hr>
<?php } ?>
		

		<div class="go-back">
			<?php wps_parent_post(); ?>
		</div>
		
	</div>


















<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>


</section>
<?php get_footer(); ?>