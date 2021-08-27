<?php
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/blog/';
    $imageSectionHero = $templateUriSection . 'blog.jpg';
    $color = 'blanco';
    $post_id = 'Blog';
    include 'section-header-2.php';
?>
<div class="blog-interior section">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third">
                <h2><?=get_the_title() ?></h2>
                <p class="blog-interior-meta">
                    <span><?php print_r(get_the_category()[0]->name); ?></span>
                    <?=get_post_time('d-m-Y'); ?>
                </p>
                <div class="blog-interior-text"><?=get_the_content(); ?></div>
            </div>
            <dic class="column">
                <div class="blog-interior-img">
                    <img src="<?=get_the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="blog-interior-img-mid">
                    <div class="blog-interior-img-mid-item">
                        <?php if(get_field('imagen_blog_1')): ?>
                            <img src="<?=get_field('imagen_blog_1'); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="blog-interior-img-mid-item">
                        <?php if(get_field('imagen_blog_2')): ?>
                            <img src="<?=get_field('imagen_blog_2'); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
            </dic>
        </div>
    </div>
</div>