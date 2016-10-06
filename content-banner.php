<?php 

$link_to = get_field('link_to');
$banner_image = get_field('banner_image');

?>

<header>
		<a href="<?php echo $link_to; ?>"><img src="<?php echo $banner_image['url']; ?>" alt="banner" class="logo"></a>
</header>