<?php
/*
Template Name: Bandcamp Page 
*/
$album = get_field('album'); 
$no_title = get_field('hide_page_title');
$container = get_field('add_container');
$color = get_field('color');
$text_color = get_field('text_color');
get_header(); ?>

<?php get_template_part('content', 'banner'); ?>
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
<section class="page container <?php if($container){echo "portfolio-container";}?>">

	<?php if(!$no_title){ ?>
		<h1 align="center"><?php echo the_title(); ?></h1>
	<?php }?>
<div class="navigation">
		<ul class="menu-ul">
		<?php
			if($album){
				foreach($album as $item){ ?>
	
						<li class="custom-menu nav">
							<iframe src="https://bandcamp.com/EmbeddedPlayer/album=<?php echo $item['album_id']; ?>/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" frameborder="0" class="album"></iframe>	
							<div class="album-desc">
								<span class="padbug"><?php echo $item['description']; ?></span>
							</div>
						</li>
			<?php		}
				}
		?>
		</ul>
	</div>

<div class="go-back back-color">		
		<?php wps_parent_post(); ?>
	</div>
	
	
</section>
<div class="padder"></div>
<?php get_footer(); ?>