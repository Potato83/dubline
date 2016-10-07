<?php
/*
Template Name: Hearing Parent 
 */

get_header(); 
$sp1 = get_field('sponsor_1');
$sp2 = get_field('sponsor_2');
$sp3 = get_field('sponsor_3');
$sp4 = get_field('sponsor_4');


?>
<?php get_template_part('content', 'banner'); ?>

<div class="center ht"><!-- <div class="page-feat"> -->
		
	<?php  if(has_post_thumbnail()){ 
	
		echo the_post_thumbnail( 'large');
		echo '</div>';
	} else{
		echo '';
	}
  ?>
<section class="container-fluid hear">
	<div class="row">
		<div class="col-md-6 img1">
			<p>Hearing There consists of 19 audio tracks each composed in different ways from the sounds of interior spaces along St. Laurent Boulevard in Montreal. Whether soundscape, spoken voice, or collaged elements sampled from the objects in the store window, each track creates a unique portait of these spaces we so often see into, but rarely have the chance to hear.</p>
			<p>The piece is experienced by walking to the different locations and playing back the audio on headphones.The download link below contains the audio files and a map of the locations. To experience the piece, load the sounds into your MP3 player or burn the tracks to CD. The map gives the names and addresses of the locations along with their correponding track number. Simply follow the directions on the map and playback the corresponding track as you reach each location.</p>
		</div>
		<div class="col-md-6 img2">
			<p>L'Outre Écoute rassemblent 19 pistes audio construites à partir de sons pris à l'interieur de batiments qui longent le Boulevard St. Laurent à Montréal. Soient des paysages sonores, des voix et narrations, ou des collages d'echantilons enregistrés à partir de divers objets dans les vitrines. Chaque piste crée un portait unique de ces lieux que nous regardons si souvent mais ecoutons rarement.</p>
			<p>L'oeuvre ce déroule comme une promenade au cours de laquelle nous nous arretons devant differents batiments et ecoutons l'audio qui leur correspond . Le lien 'Download' si dessous contient les pistes audio et une carte qui donne les noms et adresses des lieux ainsi que le numero de la piste correspondante. il sagit simplement de télecharger les sons afin d'etre joués dans un lecteur MP3 ou bien gravés sur CD, et de suivre la carte en écoutant la piste qui corresond a l'endroit.</p>
		</div>
		</div>
		<div class="row">
		<div class="ht-links">

		<?php while ( have_posts() ) : the_post(); ?>
							
			<?php the_content(); ?>
			
		<?php endwhile; ?>
	
		</div>
		<div class="img1 col-md-6 htpic"><img src="<?php echo $sp1['url']?>" alt="<?php echo $sp1['alt']?>" class="img-responsive"></div>
		<div class="img2 col-md-6 htpic"><img src="<?php echo $sp2['url']?>" alt="<?php echo $sp2['alt']?>" class="img-responsive"></div>
		<div class="img3 col-md-6 htpic"><img src="<?php echo $sp3['url']?>" alt="<?php echo $sp3['alt']?>" class="img-responsive"></div>
		<div class="img4 col-md-6 htpic"><img src="<?php echo $sp4['url']?>" alt="<?php echo $sp4['alt']?>" class="img-responsive"></div>
		
		
		
		

	</div>
</section>

<?php get_footer(); ?>