<?php
/*
Template Name: Home Page 
 */
$menu = get_field('menu_item');
get_header(); ?>
<header>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dubline_sigSG.jpg" alt="logo" class="logo"> 
	</a>
</header>
<section class="homepage">
	<div class="navigation">
		<ul>
		<?php
			if($menu){
				foreach($menu as $item){ ?>
					<style>
						#<?php echo $item['slug']; ?> a
						{background: url('<?php echo $item["image"]["url"]; ?>'); }
					</style>
						<li class="custom-menu nav" id="<?php echo $item['slug']; ?>">
							<a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
						</li>
			<?php		}
				}
		?>
		</ul>
	</div>
</section>

<?php get_footer(); ?>