
<section class="homepage">
	<div class="navigation">
		<?php
		wp_nav_menu( array(
		  
		  'theme_location'  => 'primary',                
		  'container'     => 'ul',
		  'menu_class'    => 'menu-ul'                
		) );
		?>
	</div>

</section>


<ul>
	<li class="nav custom-menu" id="my-id">
		<a href="http://example.com">Page in question</a>
	</li>



</ul>

<style>
	.projects a  {
	background: url(../img/indexMID.png) 0 0;	
}

.sounds a{
	background: url(../img/indexMID.png) -233.3px 0;
}

.images a{
	background: url(../img/indexMID.png) -466.4px 0;	
}

.text a{
	background: url(../img/indexMID.png) 0 233.3px;
}

.links a{
	background: url(../img/indexMID.png) -233.3px 233.3px;
}

.contact a{
	background: url(../img/indexMID.png) -466.6px 233.3px;
}

.hearing a  {
	background: url(../img/projects.png) 0 0;	
}

.peacelines a{
	background: url(../img/projects.png) -233.3px 0;
}

.earmaps a{
	background: url(../img/projects.png) -466.4px 0;	
}

.mamori a{
	background: url(../img/projects.png) 0 233.3px;
}

.soundpoints a{
	background: url(../img/projects.png) -233.3px 233.3px;
}

.concrete a{
	background: url(../img/projects.png) -466.6px 233.3px;
}

.resume a  {
	background: url(../img/info.png) 0 0;	
}

.dummy1 a{
	background: url(../img/info.png) -233.3px 0;
}

.bio a{
	background: url(../img/info.png) -466.4px 0;	
}

.mail1 a{
	background: url(../img/info.png) 0 233.3px;
}

.mail2 a{
	background: url(../img/info.png) -233.3px 233.3px;
}

.mail3 a{
	background: url(../img/info.png) -466.6px 233.3px;
}
</style>