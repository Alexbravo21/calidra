<?php
    /*
    Template Name: Blog
    */
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/blog/';
    $imageSectionHero = $templateUriSection . 'blog.jpg';
    $color = 'blanco';
    include 'section-header-2.php';
    $args = array(
        'numberposts'	=> 15,
        'post_type'		=> 'post',
        'orderby'        => 'rand'
    );
    $blog_query = new WP_Query( $args );
    $reliableArray = ['', '-right', '-top', '-down'];
?>
<div class="blog-section section">
    <!-- <div class="container"> -->
        <div class="columns is-multiline">
            <?php if($blog_query->have_posts()) : ?>
                <?php while($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="column is-one-third">
                        <a href="<?=get_post_permalink(); ?>" style="display:block;" class="reliable-old-lady<?php $reliable = array_rand($reliableArray); echo $reliableArray[$reliable]; ?>">
                            <div class="blog-section-mini-text">
                                <h3><?=get_the_title(); ?></h3>
                                <p class="blog-section-mini-text-desc"><?=get_field('extracto_blog'); ?></p>
                                <p class="blog-section-mini-text-meta">
                                    <span><?php print_r(get_the_category()[0]->name); ?></span>
                                    <?=get_post_time('d-m-Y'); ?>
                                </p>
                            </div>
                            <div class="blog-section-mini-img">
                                <img src="<?=the_post_thumbnail_url(); ?>" alt="">
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        </div>
    <!-- </div> -->
</div>

<?php 
    include 'blog-thumbnails.php';
    include 'contacto-banner.php';
    get_footer();
?>