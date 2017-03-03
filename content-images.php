<?php

$first_image = get_field('first_image');
$images = get_field('gallery');	

?>

<?php if($first_image) { ?>

<div class="carousel-container">

		

	<div id="album" class="carousel slide" data-interval="4500" data-pause="false">
		      
		<div class="carousel-inner" role="listbox">
		  <div class="item active">
		    <img src="<?php echo $first_image['url']; ?>" alt="First Slide" >
		  </div>

			<?php 
				if($images){
					foreach($images as $image){
						$foo = $image['sizes']['large'];		      				
						echo '<div class="item"><img src="' . $foo . '"></div>';		      				
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

	

<div class="go-back img" id="img-back">
	

	<?php wps_parent_post(); ?>
	
</div>
  
</div><!-- .carousel-container -->
<?php } ?>
<!-- <div class="padder"></div> -->


