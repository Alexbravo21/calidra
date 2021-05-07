<?php
    /*
    Template Name: Seccion template
    */
    global $site_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/seccion_template/';
    $imageSectionHero = get_field('hero_image');
    $copySide = 'derecho';
    $color = 'blanco';
    include 'section-header.php';
?>
<div class="seccion-template section">
    <div class="seccion-template-desc">
        <?php the_field('descripcion_de_seccion'); ?>
    </div>
    <div class="seccion-template-productos">
        <h3>NUESTROS PRODUCTOS</h3>
    </div>
    <div class="seccion-template-localizador">
        <div class="columns is-vcentered">
            <div class="column">
                <div class="seccion-template-localizador-cta">
                    <h3><strong>Busca</strong> a tu asesor</h3>
                    <p>Comparte tu ubicación y localiza a tu distribuidor más cercano</p>
                    <button>LOCALIZAR</button>
                </div>
            </div>
            <div class="column">
                <img src="<?=$templateUriSection ?>localizador_icon.png" alt="">
            </div>
        </div>
    </div>
    <div class="seccion-template-videos container">
        <h3>Videos</h3>
        <div class="seccion-template-videos-cont">
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
    get_footer();
?>
