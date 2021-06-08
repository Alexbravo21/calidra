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
    include 'section-header-2.php';
    $seccion = get_field('tag_seccion');
    $args = array(
        'numberposts'	=> 4,
        'post_type'		=> 'producto',
        'orderby'        => 'rand',
        'meta_key'		=> 'tipo_producto',
        'meta_value'	=> $seccion
    );
    $productos_query = new WP_Query( $args );
    $videos = json_decode(json_encode([
        "alimenticia" => ['D12MlWtzUE0'],
        "quimica" => ['U3yUJkGUbgE'],
        "mineria" => ['nMBzT1alKxg', 'XnTJfH3q2VQ'],
        "estabilizacion" => ['QflDe0W470s', 'hNS--mhuuXI', 'biynAo7RBzY'],
        "construccion" => ['gm3RDq1hTQU', 'SOFdvebKSX8', 'gFqjVxlCgMg', 'gx1IPAvIbGA', 'bxc3dFvYxn0', 'PaDnweI1OJw', 'AJj7T5rQoLg']
    ]));
?>
<div class="seccion-template section">
    <div class="seccion-template-desc reliable-old-lady">
        <?php the_field('descripcion_de_seccion'); ?>
    </div>
    <div class="seccion-template-productos">
        <h3 class="reliable-old-lady">NUESTROS PRODUCTOS</h3>
        <div class="columns is-justify-content-space-between">
            <?php if($productos_query->have_posts()) : ?>
                <?php while($productos_query->have_posts()) : $productos_query->the_post(); ?>
                    <div class="column is-one-quarter is-flex">
                        <div class="seccion-template-productos-cont reliable-old-lady-up">
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
                <div class="template-localizador-cta reliable-old-lady">
                    <h3><strong>Encuentra</strong> tu distribuidor</h3>
                    <p>Comparte tu ubicación y localiza a tu distribuidor más cercano</p>
                    <button>LOCALIZAR</button>
                </div>
            </div>
            <div class="column">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/seccion_template/localizador_icon.png" alt="" class="reliable-old-lady-right">
            </div>
        </div>
    </div>
    <div class="template-videos container">
        <h3>Videos</h3>
        <div class="template-videos-cont">
            <div class="columns">
                <div class="column <?php if (isset($videos->$seccion[1]) && $videos->$seccion[1] !== null): ?>is-8 <?php endif; ?> ">
                    <div class="video-big video-cont reliable-old-lady" style="background-image: url(https://img.youtube.com/vi/<?=$videos->$seccion[0]?>/maxresdefault.jpg">
                        <div class="black-screen">
                            <div class="play-button" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[0] ?>">
                                <div class="play-arrow" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[0] ?>"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (isset($videos->$seccion[1]) && $videos->$seccion[1] !== null): ?>
                    <div class="column">
                        <div class="video-small video-cont reliable-old-lady-right" <?php if (isset($videos->$seccion[1]) && $videos->$seccion[1] !== null): ?>style="background-image: url(https://img.youtube.com/vi/<?=$videos->$seccion[1]?>/maxresdefault.jpg" <?php endif; ?>>
                            <div class="black-screen">
                                <div class="play-button" <?php if (isset($videos->$seccion[1]) && $videos->$seccion[1] !== null): ?> data-src="https://www.youtube.com/embed/<?=$videos->$seccion[1] ?>" <?php endif; ?>>
                                    <div class="play-arrow" <?php if (isset($videos->$seccion[1]) && $videos->$seccion[1] !== null): ?> data-src="https://www.youtube.com/embed/<?=$videos->$seccion[1] ?>" <?php endif; ?>></div>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($videos->$seccion[2]) && $videos->$seccion[2] !== null): ?>
                            <div class="video-small video-cont reliable-old-lady-right" <?php if (isset($videos->$seccion[2]) && $videos->$seccion[2] !== null): ?>style="background-image: url(https://img.youtube.com/vi/<?=$videos->$seccion[2]?>/maxresdefault.jpg" <?php endif; ?>>
                                <div class="black-screen">
                                    <div class="play-button" <?php if (isset($videos->$seccion[2]) && $videos->$seccion[2] !== null): ?> data-src="https://www.youtube.com/embed/<?=$videos->$seccion[2] ?>" <?php endif; ?>>
                                        <div class="play-arrow" <?php if (isset($videos->$seccion[2]) && $videos->$seccion[2] !== null): ?> data-src="https://www.youtube.com/embed/<?=$videos->$seccion[2] ?>" <?php endif; ?>></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php 
    include 'blog-thumbnails.php';
    get_footer();
?>
