<?php
    /*
    Template Name: Seccion template
    */
    global $calidra_base_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/seccion_template/';
    $imageSectionHero = get_field('hero_image');
    $copySide = 'derecho';
    $color = 'blanco';
    include 'section-header.php';
    $args = array(
        'numberposts'	=> 4,
        'post_type'		=> 'producto',
        'orderby'        => 'rand',
        'meta_key'		=> 'tipo_producto',
        'meta_value'	=> 'alimenticia'
    );
    $productos_query = new WP_Query( $args );
    $seccion = get_field('tag_seccion');
    $videos = json_decode(json_encode([
        "alimenticia" => ['D12MlWtzUE0'],
        "quimica" => ['U3yUJkGUbgE'],
        "mineria" => ['U3yUJkGUbgE'],
        "estabilizacion" => ['QflDe0W470s'],
        "construccion" => ['gm3RDq1hTQU']
    ]));
?>
<div class="seccion-template section">
    <div class="seccion-template-desc">
        <?php the_field('descripcion_de_seccion'); ?>
    </div>
    <div class="seccion-template-productos">
        <h3>NUESTROS PRODUCTOS</h3>
        <div class="columns is-justify-content-space-between">
            <?php if($productos_query->have_posts()) : ?>
                <?php while($productos_query->have_posts()) : $productos_query->the_post(); ?>
                    <div class="column is-one-quarter is-flex">
                        <div class="seccion-template-productos-cont">
                            <div class="seccion-template-productos-cont-image">
                                <img src="<?=the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="seccion-template-productos-cont-text">
                                <a href="<?=get_post_permalink(); ?>"><div class="seccion-template-productos-cont-text-mas">
                                    <span></span><span></span>
                                </div></a>
                                <h4><?=get_the_title(); ?></h4>
                                <p><?=get_field('intro_producto'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        </div>
    </div>
    <div class="template-localizador">
        <div class="columns is-vcentered">
            <div class="column">
                <div class="template-localizador-cta">
                    <h3><strong>Busca</strong> a tu asesor</h3>
                    <p>Comparte tu ubicación y localiza a tu distribuidor más cercano</p>
                    <button>LOCALIZAR</button>
                </div>
            </div>
            <div class="column">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/seccion_template/localizador_icon.png" alt="">
            </div>
        </div>
    </div>
    <div class="template-videos container">
        <h3>Videos</h3>
        <div class="template-videos-cont">
            <div class="columns">
                <div class="column is-8">
                    <div class="video-big video-cont">
                        <div class="black-screen">
                            <div class="play-button" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[0] ?>">
                                <div class="play-arrow" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[0] ?>"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="video-small video-cont">
                        <div class="black-screen">
                            <div class="play-button">
                                <div class="play-arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="video-small video-cont">
                        <div class="black-screen">
                            <div class="play-button">
                                <div class="play-arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include 'blog-thumbnails.php';
    get_footer();
?>
