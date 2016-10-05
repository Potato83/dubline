<?php 
$links = get_field('links'); 
?>  

<div class="navigation-links">
		<ul class="menu-ul">
		<?php
			if($links){
				foreach($links as $linky){ ?>
					<style>
						#<?php echo $linky['slug']; ?> a
						{	background: url('<?php echo $linky["image"]["url"]; ?>');
							background-size: cover; }
					</style>
						<li class="custom-menu nav-link" id="<?php echo $linky['slug']; ?>">
							<a href="<?php echo $linky['url']; ?>" target="_blank"><?php echo $linky['name']; ?></a>							
						</li>
			<?php		}
				}
		?>
		</ul>
	</div>