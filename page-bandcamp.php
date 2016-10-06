<?php
/*
Template Name: Bandcamp Page 
*/
$album = get_field('album'); 
get_header(); ?>

<?php get_template_part('content', 'banner'); ?>
<section class="page container">

	<h1 align="center"><?php echo the_title(); ?></h1>
<div class="navigation">
		<ul class="menu-ul">
		<?php
			if($album){
				foreach($album as $item){ ?>
	
						<li class="custom-menu nav">
							<iframe src="https://bandcamp.com/EmbeddedPlayer/album=<?php echo $item['album_id']; ?>/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" frameborder="0" class="album"></iframe>	
							<div class="album-desc">
								<?php echo $item['description']; ?></p>
							</div>
						</li>
			<?php		}
				}
		?>
		</ul>
	</div>

























	<!--
	<?php  if(has_post_thumbnail()){ ?>
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
	-->

	
	
</section>
<div class="padder"></div>
<?php get_footer(); ?>