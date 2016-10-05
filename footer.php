<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dubline
 */

?>

	</div><!-- #main-content -->
</div><!-- .main-container -->
<script>

var pageName = '<?php echo basename( get_page_template() ); ?>';
var back = '<?php echo esc_url( get_permalink( get_page_by_title( 'Images' ) ) ); ?>'
$(function() {
    if(pageName == "page-image.php"){
    	console.log('image-page');
    	$('.main-container').addClass("black");
    	$( document ).on( 'keydown', function ( e ) {
		    if ( e.keyCode === 27 ) { // ESC
		      console.log('escape');
		      window.location.href = back;	
		  	}
			});
    } else{
    	console.log("reg");
    }
});




</script>



<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/build.min.js"></script>

</body>
</html>

</body>
</html>
