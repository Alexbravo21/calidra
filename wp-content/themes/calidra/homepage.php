<?php
    /*
    Template Name: HomePage
    */
    get_header();
?>
<div class="hero-banner" style="background: url(<?php the_field('hero_banner') ?>) center no-repeat; background-size: cover">
    <div class="hero-copy-container">
        <div class="hero-copy">
            <p class="hero-big-copy"><?php the_field('big_copy') ?></p>
            <p><?php the_field('small_copy') ?></p>
            <button class="hero-cta"><?php the_field('cta_banner') ?></button>
        </div>
    </div>
</div>
<div class="section">
    <div class="home-productos container">
        <div class="columns is-vcentered">
            <div class="home-productos-desc column is-4">
                <h2><?php the_field('titulo_productos_home') ?></h2>
                <p><?php the_field('texto_productos_home') ?></p>
            </div>
            <div class="home-productos-item-cont column is-8">
                <div class="columns">
                    <div class="column is-half">
                        <div class="home-productos-item">
                            <p class="productos-numero">1</p>
                            <img src="<?=get_template_directory_uri()?>/assets/img/home/icono_productos.png" class="productos-icono" alt="">
                            <p class="producto-titulo">Alimenticia y Agrícola</p>
                            <div class="producto-separador"></div>
                            <p class="producto-desc">
                                La cal dentro del ramo agrícola se usa para la neutralización de suelos ácidos, además de aportar Calcio y magnesio a los cultivos.
                            </p>
                            <p class="producto-vermas">ver más</p>
                        </div>
                    </div>
                    <div class="column is-half is-hidden-touch">
                        <div class="home-productos-item">
                            <p class="productos-numero">2</p>
                            <img src="<?=get_template_directory_uri()?>/assets/img/home/icono_productos.png" class="productos-icono" alt="">
                            <p class="producto-titulo">Alimenticia y Agrícola</p>
                            <div class="producto-separador"></div>
                            <p class="producto-desc">
                                La cal dentro del ramo agrícola se usa para la neutralización de suelos ácidos, además de aportar Calcio y magnesio a los cultivos.
                            </p>
                            <p class="producto-vermas">ver más</p>
                        </div>
                    </div>
                </div>
                <div class="productos-navegador">
                    <div class="productos-navegador-izq">
                        <span><</span>
                    </div>
                    <div class="productos-navegador-der">
                        <span>></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-resto-contenido section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="usos-cotidianos">
                    <h3>Usos Cotidianos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quibus rebus efficiuntur voluptates, eae non sunt in potestate sapientis. Nam, ut paulo ante docui.</p>
                </div>
            </div>
            <div class="column">
                <div class="home-blog">
                    <h3>Blog</h3>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="home-asesor column">
                    <h3>Busca tu asesor</h3>
                </div>
            </div>
        </div>
        <div class="go-down-arrow">
            <div class="flecha_down"></div>
        </div>
    </div>
</div>

<?php 
    include 'contacto.php';
    get_footer();
?>