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

						<li class="custom-menu-link nav-link" id="<?php echo $linky['slug']; ?>">
							 
								 
									<a href="<?php echo $linky['url']; ?>" target="_blank"><div class="inner-link <?php echo $linky['hover_color'][0]; ?>"><span class="linky-text"><?php echo $linky['name']; ?></span></div></a>	
									
								

						</li>
			<?php		}
				}
		?>
		</ul>
	</div>