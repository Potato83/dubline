<?php
/*
Template Name: FieldRec Page 
*/
$tracks = get_field('tracks'); 
$no_title = get_field('hide_page_title');
$container = get_field('add_container');
$color = get_field('color');
$text_color = get_field('text_color');
get_header(); ?>

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

	<?php if(!$no_title){ ?>
		<h1 align="center"><?php echo the_title(); ?></h1>
	<?php }?>
<div class="navigation">

	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>

		<ul class="menu-ul">
		<?php
			if($tracks){
				foreach($tracks as $track){ ?>
	
						<li class="soundcloud nav">
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $track['track']; ?>&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>							
						</li>
						<div class="track-desc">
							<?php echo $track['description']; ?></p>
						</div>

			<?php		}
				}
		?>
		</ul>
	</div>
		<div class="go-back back-color">
			<?php wps_parent_post(); ?>
		</div>



<?php get_footer(); ?>