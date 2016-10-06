<?php
/*
Template Name: Hearing There
 */
$menu = get_field('menu_item');
get_header(); ?>
<?php get_template_part('content', 'banner'); ?>
<section class="page container">
	<?php while ( have_posts() ) : the_post(); ?>
						
		<?php the_content(); ?>
		
	<?php endwhile; ?>
</section>
<section class="hearing container">
<table width="100%" border="0" cellspacing="10" cellpadding="1">
  <tr>
    <td width="0%" height="416" valign="top"><p class="style1">&nbsp;</p>
      
    <td width="100%"><img name="MAPwebHotspots" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carte-map.gif" width="750" height="1941" border="0" id="MAPwebHotspots" usemap="#m_MAPwebHotspots" alt="" />
      <map name="m_MAPwebHotspots" id="m_MAPwebHotspots">
        <area background-style="red" shape="rect" coords="20,153,239,237" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Bagel Etc' ) ) ); ?>" alt="" />
        <area shape="rect" coords="482,314,720,396" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Garderie la Cloche' ) ) ); ?>" alt="" />
        <area shape="rect" coords="17,417,240,504" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Divan Orange' ) ) ); ?>" alt="" />
        <area shape="rect" coords="18,684,238,756" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Colabrijai' ) ) ); ?>" alt="" />
        <area shape="rect" coords="491,438,720,525" href="<?php echo esc_url( get_permalink( get_page_by_title( 'A. Dallaire Memoria' ) ) ); ?>" alt="" />
        <area shape="rect" coords="12,900,237,997" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Too Zoo' ) ) ); ?>" alt="" />
        <area shape="rect" coords="23,1137,263,1202" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Kitsch n\' Swell' ) ) ); ?>" alt="" />
        <area shape="rect" coords="28,1224,252,1304" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Bain Schubert' ) ) ); ?>" alt="" />
        <area shape="rect" coords="24,1356,272,1427" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Berson & Sons' ) ) ); ?>" alt="" />
        <area shape="rect" coords="30,1577,280,1641" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Moog Guitar' ) ) ); ?>" alt="" />
        <area shape="rect" coords="36,1820,288,1896" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Coupe Bizarre' ) ) ); ?>" alt="" />
        <area shape="rect" coords="504,1584,746,1656" href="<?php echo esc_url( get_permalink( get_page_by_title( 'La Vieille Europe' ) ) ); ?>" alt="" />
        <area shape="rect" coords="498,1458,743,1512" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Janos' ) ) ); ?>" alt="" />
        <area shape="rect" coords="497,1392,750,1456" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Schwartz\'s Deli' ) ) ); ?>" alt="" />
        <area shape="rect" coords="493,1173,736,1260" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Seho d\'Afrique' ) ) ); ?>" alt="" />
        <area shape="rect" coords="493,1116,750,1172" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Cinema l\'Amour' ) ) ); ?>" alt="" />
        <area shape="rect" coords="491,1044,746,1102" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Bijouterie Portugais' ) ) ); ?>" alt="" />
        <area shape="rect" coords="504,915,744,983" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Zed Objets' ) ) ); ?>" alt="" />
        <area shape="rect" coords="498,707,745,776" href="<?php echo esc_url( get_permalink( get_page_by_title( 'H. Fisher & Sons' ) ) ); ?>" alt="" />
    </map></td>
  </tr>
</table>
</section>

<?php get_footer(); ?>