<?php

get_header();
$categoryArray = Array(
    'alimenticia' => 35,
    'quimica' => 47,
    'mineria' => 52,
    'estabilizacion' => 57,
    'construccion' => 61,
);
$category = get_field('tipo_producto')["value"];
$templateUriSection = get_template_directory_uri() . '/assets/img/localizador/';
$imageSectionHero = get_field('hero_image', $categoryArray[$category]);
$copySide = 'derecho';
$color = 'blanco';
include 'section-header-2.php';
$args = array(
	'numberposts'	=> 4,
	'post_type'		=> 'producto',
    'orderby'        => 'rand'
	//'meta_key'		=> 'tipo_producto',
	//'meta_value'	=> 'alimenticia'
);
$productos_query = new WP_Query( $args );
$ficha_tecnica = get_field("ficha_tecnica") !== NULL ? get_field("ficha_tecnica") : '#';
?>
<div class="producto-interior section">
    <div class="producto-interior-cont">
        <div class="columns">
            <div class="column is-5">
                <h2><?=get_the_title() ?></h2>
            </div>
            <div class="column is-5 producto-interior-cont-circulo">
                <div class="producto-interior-cont-circulo-int">
                    <img src="<?=the_post_thumbnail_url(); ?>" alt="">
                </div>
            </div>
            <div class="column is-3 is-align-self-flex-end producto-interior-cont-ficha">
                <a href="<?=$ficha_tecnica ?>" target="_blank">
                    <span><i class="far fa-file-alt"></i></span><span>FICHA TÉCNICA</span>
                </a>
            </div>
        </div>
        <div class="producto-interior-cont-desc"><?=get_the_content(); ?></div>
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
    <div class="producto-interior-otros">
        <div class="producto-interior-otros-cont">
            <h2>OTROS PRODUCTOS</h2>
            <div class="columns is-justify-content-space-between">
                <?php if($productos_query->have_posts()) : ?>
                    <?php while($productos_query->have_posts()) : $productos_query->the_post(); ?>
                        <div class="column is-one-quarter">
                            <a href="<?=get_post_permalink(); ?>">
                                <div class="producto-interior-otros-cont-image">
                                    <img src="<?=the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="producto-interior-otros-cont-text">
                                    <h3><?=get_the_title(); ?></h3>
                                    <p><?=get_field('tipo_producto')["label"]; ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>
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
                            <div class="play-button">
                                <div class="play-arrow"></div>
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
    include 'contacto-banner.php';
    get_footer();
?>
