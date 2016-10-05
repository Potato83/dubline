<?php

$first_image = get_field('first_image');
$images = get_field('images');	

?>

<div class="carousel-container">

		

	<div id="album" class="carousel slide" data-interval="4500" data-pause="false">
		      
		<div class="carousel-inner" role="listbox">
		  <div class="item active">
		    <img src="<?php echo $first_image['url']; ?>" class="img-responsive" alt="First Slide" >
		  </div>

			<?php 
				if($images){
					foreach($images as $bg){
						$foo = $bg['image']['url'];		      				
						echo '<div class="item"><img src="' . $foo . '" class="img-responsive"></div>';		      				
					}
				}
			?>
		
		  
		</div><!-- .carousel-inner -->
		<a class="left carousel-control" href="#album" role="button" data-slide="prev">
	  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#album" role="button" data-slide="next">
	  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
	</div><!-- /.carousel -->

	


  
</div><!-- .carousel-container -->

<div class="padder"></div>
<div class="go-back">
	
	<?php wps_parent_post(); ?>
	
</div>

