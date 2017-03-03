<?php 
$menu = get_field('menu_item'); 
?>  

<div class="navigation">
		<ul class="menu-ul">
		<?php
			if($menu){
				foreach($menu as $item){ ?>
					<style>
						#<?php echo $item['slug']; ?> 
						{	background: url('<?php echo $item["image"]["url"]; ?>');
							background-size: cover; }
						/*#<?php echo $item['slug']; ?> a:hover{
							background: rgba(0,0,255,0.1);
						}	*/
					</style>
						<li class="custom-menu nav" id="<?php echo $item['slug']; ?>">
							<div class="inner inner-fort <?php echo $item['hover_color'][0]; ?>">
							<?php if($item['link_or_page'] == 'link') { ?>
								<a href="<?php echo $item['linkypoo']; ?>" target="_blank"> 
								<span>
								<?php if($item['name']){
									echo $item['name'];
								} else {
									echo '&nbsp;';
								}
							} else { ?>				
								<a href="<?php echo $item['page']; ?>">
								<span>
								<?php if($item['name']){
									echo $item['name'];
								} else {
									echo '&nbsp;';
								}
							}	?> 	
								</span>		
								</a>
							</div>
							<?php if($item['description_below']) { ?>
								<div class="album-desc"><span class="padbug"><?php echo $item['description']; ?></span></div>	
							<?php } ?>			
							
						</li>
			<?php		}
				}
		?>
		</ul>
	</div>