	<?php get_header(); 
$custom_text = get_field('text_above');
$bancamp = get_field('bandcamp');
$embed = get_field('embed');
$no_title = get_field('hide_page_title');
$container = get_field('add_container');
$color = get_field('color');
$text_color = get_field('text_color');
$add_more = get_field('add_more');
$more_vids = get_field('more_vids');
$margin = get_field('margin');
$margin_top = get_field('margin_top');
?>

<!-- <h1>page.php</h1> -->
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

<?php if($margin) { ?>
	<style>
	@media (min-width: 767px){
		.custom-margin {
				padding-left: <?php echo $margin . 'px'; ?>;
				padding-right: <?php echo $margin . 'px'; ?>;
			}
		}		
		.custom-margin {
				padding-top: <?php echo $margin_top . 'px'; ?>;
			}
	</style>
<?php } ?>

<?php get_template_part('content', 'banner'); ?>
<div class="padder"></div>
<section class="page container<?php if($container){echo " bg-container";}?>">
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

	<div class="custom-margin">

	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
	</div>

	<!-- video embed -->
	<?php
		if($embed){ ?>
			<div class="padder"></div>
			<div class="videoWrapper">
				<?php echo $embed; ?>
			</div>
	<?php	} ?> 

	<!-- video extra / repeater -->
	<?php 
		if($add_more == true){
			if($more_vids){
				foreach ($more_vids as $vid) { ?>
					<div class="padder"></div>
					<div>
						<?php echo $vid['more_content']; ?>
					</div>
					<div class="padder"></div>
					<div class="videoWrapper">
						<?php echo $vid['next_embed']; ?>
					</div>
				<?php }
			}
		}else{
			echo '';
		}

	?>


<div class="go-back back-color">
	<?php wps_parent_post(); ?>
</div>

</section>
<div class="padder"></div>
<div class="padder"></div>
<?php get_footer(); ?>