<?php 
    $posts = get_posts();
?>
<section class="blog-thumbnails section">
    <h2 class="container">Blog</h2>
    <div class="slider-navigation-previous-calidra"><div class="flecha"></div></div>
    <div class="slider-navigation-next-calidra"><div class="flecha"></div></div>
    <div class="blog-thumbnails-contenedor">
        <!-- Start Carousel -->
        <div id="carousel-demo" class="carousel">
            <?php $cont = 1; foreach($posts as $post): ?>
                <div class="item-<?=$cont ?> car-item">
                    <a href="<?=get_post_permalink(); ?>">
                        <img src="<?=get_the_post_thumbnail_url($post->ID)?>" alt="">
                        <p><?=$post->post_title ?></p>
                    </a>
                </div>
            <?php $cont = $cont + 1; endforeach; ?>
        </div>
        <!-- End Carousel -->
    </div>
</section>