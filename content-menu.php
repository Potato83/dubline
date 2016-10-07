<?php 
$menu = get_field('menu_item'); 
?>  

<div class="navigation">
		<ul class="menu-ul">
		<?php
			if($menu){
				foreach($menu as $item){ ?>
					<style>
						#<?php echo $item['slug']; ?> a
						{	background: url('<?php echo $item["image"]["url"]; ?>');
							background-size: cover; }
					</style>
						<li class="custom-menu nav" id="<?php echo $item['slug']; ?>">
							
							<?php if($item['link_or_page'] == 'link') { ?>
								<a href="<?php echo $item['linkypoo']; ?>" target="_blank"> 
								<?php if($item['name']){
									echo $item['name'];
								} else {
									echo '&nbsp;';
								}
							} else { ?>				
								<a href="<?php echo $item['page']; ?>">
								<?php if($item['name']){
									echo $item['name'];
								} else {
									echo '&nbsp;';
								}
							}	?> 								
								</a>

							<?php if($item['description_below']) { ?>
								<div class="album-desc"><?php echo $item['description']; ?></div>	
							<?php } ?>			
								
						</li>
			<?php		}
				}
		?>
		</ul>
	</div>