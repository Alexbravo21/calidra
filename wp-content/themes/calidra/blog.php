<?php
    /*
    Template Name: Blog
    */
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/blog/';
    $imageSectionHero = $templateUriSection . 'blog.jpg';
    $color = 'blanco';
    include 'section-header.php';
    $args = array(
        'numberposts'	=> 15,
        'post_type'		=> 'post',
        'orderby'        => 'rand'
    );
    $blog_query = new WP_Query( $args );
?>
<div class="blog-section section">
    <div class="container">
        <div class="columns is-multiline">
            <?php if($blog_query->have_posts()) : ?>
                <?php while($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="column is-one-third">
                        <a href="<?=get_post_permalink(); ?>">
                            <div class="blog-mini-img">
                                <img src="<?=the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="blog-mini-text">
                                <h3><?=get_the_title(); ?></h3>
                                <p><?=get_field('extracto_blog'); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        </div>
    </div>
</div>