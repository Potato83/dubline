<?php 

$images = get_field('gallery');

if( $images ): ?>
    <div class="navigation-links">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <img src="<?php echo $image['url']; ?>" class="test-img"alt="<?php echo $image['alt']; ?>" />
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>