<?php
    /*
    Template Name: HomePage
    */
    get_header();
    $productos_slider = [
        'alimenticia-y-agricola' => ['Alimenticia y Agrícola', 'La cal dentro del ramo agrícola se usa para la neutralización de suelos ácidos, además de aportar Calcio y magnesio a los cultivos.'],
        'quimica' => ['Química', 'Se usa como materia prima en muchos procesos químicos y como coadyuvante en los procesos del cuidado del medio ambiente.'],
        'mineria' => ['Minería', 'Dentro de la industria Minera, la cal juega un papel importante en la estabilización de pH en procesos de lixiviación dinámica y estática.'],
        'siderurgica' => ['Siderúrgica', 'Dentro de la industria siderúrgica facilita la purificación del acero y asegura la protección de recubrimiento refractario de los hornos fundidores del acero.'],
        'estabilizacion-de-suelos' => ['Estabilización de suelos', 'La estabilización con cal es un proceso químico entre los minerales de arcilla presentes en el suelo y el calcio, que propicia la disminución de plasticidad gracias a las reacciones puzolánicas.'],
        'construccion' => ['Construcción', 'Es utilizado para la elaboración de mezclas de albañilería, morteros a base de cal, repellos, acabados finos, acabados gruesos, pegado de block, pegado de ladrillo, pegado de adobe.']
    ];
?>
<div class="hero-banner" style="background: url(<?php the_field('hero_banner') ?>) center no-repeat; background-size: cover">
    <div class="hero-copy-container">
        <div class="hero-copy reliable-old-lady">
            <p class="hero-big-copy"><?php the_field('big_copy') ?></p>
            <p><?php the_field('small_copy') ?></p>
            <a href="<?=$calidra_base_url ?>corporativo"><button class="hero-cta"><?php the_field('cta_banner') ?></button></a>
        </div>
    </div>
</div>
<div class="section">
    <div class="home-productos container">
        <div class="columns is-vcentered">
            <div class="home-productos-desc column is-4 reliable-old-lady">
                <h2><?php the_field('titulo_productos_home') ?></h2>
                <p><?php the_field('texto_productos_home') ?></p>
            </div>
            <div class="home-productos-item-cont column is-8 reliable-old-lady-right">
                <div class="home-carousel">
                <?php $cont = 1; foreach($productos_slider as $key => $cat) :?>
                    <div class="item-<?=$cont ?> productos-carousel-item">
                        <div class="home-productos-item">
                            <p class="productos-numero"><?=$cont ?></p>
                            <img src="<?=get_template_directory_uri()?>/assets/img/home/icono_productos-<?=$cont ?>.png" class="productos-icono" alt="">
                            <p class="producto-titulo"><span><?=$cat[0] ?></span></p>
                            <div class="producto-separador"></div>
                            <p class="producto-desc"><?=$cat[1] ?></p>
                            <p class="producto-vermas"><a href="<?=$calidra_base_url.$key?>">ver más</a></p>
                        </div>
                    </div>
                <?php $cont = $cont +1; endforeach; ?>
                </div>
                <div class="productos-navegador">
                    <div class="productos-navegador-izq slider-navigation-previous-calidra">
                        <span><</span>
                    </div>
                    <div class="productos-navegador-der slider-navigation-next-calidra">
                        <span>></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-resto-contenido section">
    <div class="contenedor">
        <div class="columns">
            <div class="column">
                <div class="usos-cotidianos-home reliable-old-lady">
                    <h3>Usos Cotidianos</h3>
                </div>
            </div>
            <div class="column">
                <a href="<?=$calidra_base_url ?>blog"><div class="home-blog reliable-old-lady-right">
                    <h3>Blog</h3>
                </div></a>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <a href="<?=$calidra_base_url ?>localizador"><div class="home-asesor column reliable-old-lady">
                    <h3>Busca tu asesor</h3>
                </div></a>
            </div>
        </div>
        <div class="go-down-arrow">
            <div class="flecha_down"></div>
        </div>
    </div>
</div>

<?php 
    include 'contacto-banner.php';
    get_footer();
?>