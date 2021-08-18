<?php
    /*
    Template Name: Seccion template
    */
    global $calidra_base_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/seccion_template/';
    $imageSectionHero = get_field('hero_image');
    $imageSectionHeroMobile = get_field('hero_image_mobile');
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
    $post_count = $productos_query->post_count;
    $videos = json_decode(json_encode([
        "alimenticia" => ['D12MlWtzUE0'],
        "quimica" => ['U3yUJkGUbgE'],
        "mineria" => ['XnTJfH3q2VQ'],
        "siderurgica" => ['nMBzT1alKxg'],
        "estabilizacion" => ['hNS--mhuuXI', 'biynAo7RBzY', 'QflDe0W470s', 'sXeKQH0Xr8w', 'BSaXSqKAcdA', 'KhpUQIQPUhE', '3Vb9rl2Hzag', 'E7BhQDvJQjU', 'HETHXq06TbM', 'b_R9usyxGzs', 'xbouAd10f6U'],
        "construccion" => ['gm3RDq1hTQU', 'SOFdvebKSX8', 'gFqjVxlCgMg', 'gx1IPAvIbGA', 'bxc3dFvYxn0', 'PaDnweI1OJw', 'AJj7T5rQoLg']
    ]));
    $video_cont_max = 3;
    $video_cont_num = count($videos->$seccion);
    $video_cont_div = floor($video_cont_num / $video_cont_max);
    $video_cont_residue = $video_cont_num % $video_cont_max;
?>
<div class="seccion-template section">
    <div class="seccion-template-productos">
        <h3 class="reliable-old-lady">NUESTROS PRODUCTOS</h3>
        <?php if($post_count > 4):?>
            <div class="slider-prods-previous-calidra"><div class="flecha"></div></div>
            <div class="slider-prods-next-calidra"><div class="flecha"></div></div>
            <div class="seccion-template-productos-prods-carousel reliable-old-lady-up">
                <div id="carousel-demo" class="carousel-prods">
                    <?php $contador = 0; if($productos_query->have_posts()) : ?>
                        <?php while($productos_query->have_posts()) : $productos_query->the_post(); ?>
                            <div class="item-<?=$contador ?> car-item">
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
                        <?php $contador = $contador + 1;?>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        <?php else: ?>
            <div class="seccion-template-productos-prods">
                <div class="columns is-justify-content-space-evenly">
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
        <?php endif; ?>
    </div>
    <div class="template-videos container">
        <h3>Videos</h3>
        <div class="template-videos-cont">
            <?php
                $iindex = $video_cont_residue > 0 ? $video_cont_div + 1 : $video_cont_div;
                $video_contador = 0;
                for($i=0; $i < $iindex; $i++):
                ?>
                    <div class="columns">
                        <div class="column<?php if (isset($videos->$seccion[$i+$video_contador+1]) && $videos->$seccion[$i+$video_contador+1] !== null): ?> is-8<?php endif; ?>">
                            <div class="video-big video-cont reliable-old-lady" style="background-image: url(https://img.youtube.com/vi/<?=$videos->$seccion[$i+$video_contador]?>/hqdefault.jpg">
                                <div class="black-screen">
                                    <div class="play-button" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[$i+$video_contador] ?>">
                                        <div class="play-arrow" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[$i+$video_contador] ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($videos->$seccion[$i+$video_contador+1]) && $videos->$seccion[$i+$video_contador+1] !== null): ?>
                            <div class="column">
                                <div class="video-small video-cont reliable-old-lady-right" style="background-image: url(https://img.youtube.com/vi/<?=$videos->$seccion[$i+$video_contador+1]?>/hqdefault.jpg">
                                    <div class="black-screen">
                                        <div class="play-button" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[$i+$video_contador+1] ?>">
                                            <div class="play-arrow"  data-src="https://www.youtube.com/embed/<?=$videos->$seccion[$i+$video_contador+1] ?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php if(isset($videos->$seccion[$i+$video_contador+2]) && $videos->$seccion[$i+$video_contador+2] !== null): ?>
                                    <div class="video-small video-cont reliable-old-lady-right"style="background-image: url(https://img.youtube.com/vi/<?=$videos->$seccion[$i+$video_contador+2]?>/hqdefault.jpg">
                                        <div class="black-screen">
                                            <div class="play-button" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[$i+$video_contador+2] ?>">
                                                <div class="play-arrow" data-src="https://www.youtube.com/embed/<?=$videos->$seccion[$i+$video_contador+2] ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php 
                    $video_contador = $video_contador + 2;
                    endfor;
                ?>
        </div>
    </div>
    <div class="seccion-template-desc reliable-old-lady">
        <?php the_field('descripcion_de_seccion'); ?>
    </div>
    <div class="template-localizador">
        <div class="columns is-vcentered">
            <div class="column">
                <div class="template-localizador-cta reliable-old-lady">
                    <h3><strong>Encuentra</strong> tu Asesor</h3>
                    <p>Contáctanos y localiza a tu asesor más cercano:</p>
                    <a href="<?=$calidra_base_url ?>localizador"><button>LOCALIZAR</button></a>
                </div>
            </div>
            <div class="column">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/seccion_template/localizador_icon.png" alt="" class="reliable-old-lady-right">
            </div>
        </div>
    </div>
</div>
<?php 
    include 'blog-thumbnails.php';
    get_footer();
?>
