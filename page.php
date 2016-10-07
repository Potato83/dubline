<?php get_header(); 
$custom_text = get_field('text_above');
$bancamp = get_field('bandcamp');
$embed = get_field('embed');
$no_title = get_field('hide_page_title');
$container = get_field('add_container');
?>

<!-- <h1>page.php</h1> -->

<?php get_template_part('content', 'banner'); ?>

<section class="page container <?php if($container){echo "bg-container";}?>">
	<?php if(!$no_title){ ?>
		<h1 align="center"><?php echo the_title(); ?></h1>
	<?php }?>
	
	<?php get_template_part('content', 'menu'); ?>
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


	<!-- video embed -->
	<?php
		if($embed){ ?>
			<div class="padder"></div>
			<div class="videoWrapper">
				<?php echo $embed; ?>
			</div>
	<?php	} ?> 


<div class="go-back">
	<?php wps_parent_post(); ?>
</div>

</section>
<div class="padder"></div>
<?php get_footer(); ?>