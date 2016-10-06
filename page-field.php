<?php
/*
Template Name: FieldRec Page 
*/
$tracks = get_field('tracks'); 
get_header(); ?>

<?php get_template_part('content', 'banner'); ?>
<section class="page container">

	<h1 align="center"><?php echo the_title(); ?></h1>
<div class="navigation">
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




<?php get_footer(); ?>