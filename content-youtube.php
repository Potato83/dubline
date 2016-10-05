<?php 
$videos = get_field('videos'); 
?>  

<div class="navigation">
		<ul class="menu-ul">
		<?php
			if($videos){
				foreach($videos as $video){ ?>

						<div class="videoWrapper">
							<?php echo $video['video']; ?>							
						</div>
						<div class="vid-desc"><?php echo $video['description']; ?></div>
			<?php		}
				}
		?>
		</ul>
	</div>