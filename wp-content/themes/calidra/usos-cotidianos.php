<?php
    /*
    Template Name: Usos cotidianos
    */
    global $calidra_base_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/usos_cotidianos/';
    $imageSectionHero = $templateUriSection . 'usos-cotidianos.jpg';
    $imageSectionHero = $templateUriSection . 'usos-cotidianos-mobile.jpg';
    $copySide = 'derecho';
    include 'section-header-2.php';
    @include 'usos-array.php';
?>
<div class="usos-cotidianos section">
    <div class="usos-cotidianos-desc">
        <p>La cal es un producto que ha estado presente a lo largo de la historia del ser humano, desde el ámbito constructivo hasta el culinario.</p>
        <p>Conoce los diferentes usos que puedes realizar en tu hogar.</p>
    </div>
    <div class="usos-cotidianos-acordeon">
        <div class="usos-cotidianos-acordeon-item">
            <div class="columns is-mobile is-vcentered usos-cotidianos-acordeon-item-header">
                <div class="column is-2-mobile is-2-tablet is-1-desktop">
                    <img src="<?=$templateUriSection ?>hogar.png" alt="">
                </div>
                <div class="column is-8-mobile is-8-tablet is-9-desktop">
                    <p>Hogar</p>
                </div>
                <div class="column is-2 is-flex is-justify-content-flex-end">
                    <div class="acordeon-down-arrow" data-uso="hogar">
                        <div class="flecha_down"></div>
                    </div>
                </div>
            </div>
            <div class="usos-cotidianos-acordeon-item-body">
                <div id="hogar" class="usos-carousel usos-carousel-cont">
                    <?php $cont = 1; foreach($usosCotidianos->hogar as $uso): ?>
                        <div class="item-<?=$cont ?>">
                            <div class="columns">
                                <div class="column is-5">
                                    <h2><?=$uso->titulo ?></h2>
                                </div>
                                <div class="column is-5 usos-cotidianos-acordeon-item-body-circulo">
                                    <div class="play-button" data-src="<?=$uso->videoURL ?>"><div class="play-arrow" data-src="<?=$uso->videoURL ?>"></div></div>
                                    <img src="<?=$templateUriSection ?>slider/hogar-<?=$cont ?>.png" alt="">
                                </div>
                                <div class="column is-3 is-align-self-flex-end usos-cotidianos-acordeon-item-body-texto">
                                    <p><?=$uso->texto ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $cont = $cont+1; endforeach; ?>
                </div>
            </div>
        </div>
        <div class="usos-cotidianos-acordeon-item">
            <div class="columns is-mobile is-vcentered usos-cotidianos-acordeon-item-header">
                <div class="column is-2-mobile is-2-tablet is-1-desktop">
                    <img src="<?=$templateUriSection ?>limpieza.png" alt="">
                </div>
                <div class="column is-8-mobile is-8-tablet is-9-desktop">
                    <p>Limpieza / Desinfección</p>
                </div>
                <div class="column is-2 is-flex is-justify-content-flex-end">
                    <div class="acordeon-down-arrow" data-uso="limpieza">
                        <div class="flecha_down"></div>
                    </div>
                </div>
            </div>
            <div class="usos-cotidianos-acordeon-item-body">
                <div id="limpieza" class="usos-carousel usos-carousel-cont">
                    <?php $cont = 1; foreach($usosCotidianos->limpieza as $uso): ?>
                        <div class="item-<?=$cont ?>">
                            <div class="columns">
                                <div class="column is-5">
                                    <h2><?=$uso->titulo ?></h2>
                                </div>
                                <div class="column is-5 usos-cotidianos-acordeon-item-body-circulo">
                                    <div class="play-button" data-src="<?=$uso->videoURL ?>"><div class="play-arrow" data-src="<?=$uso->videoURL ?>"></div></div>
                                    <img src="<?=$templateUriSection ?>slider/limpieza-<?=$cont ?>.png" alt="">
                                </div>
                                <div class="column is-3 is-align-self-flex-end usos-cotidianos-acordeon-item-body-ficha">
                                <p><?=$uso->texto ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $cont = $cont +1; endforeach; ?>
                </div>
            </div>
        </div>
        <div class="usos-cotidianos-acordeon-item">
            <div class="columns is-mobile is-vcentered usos-cotidianos-acordeon-item-header">
                <div class="column is-2-mobile is-2-tablet is-1-desktop">
                    <img src="<?=$templateUriSection ?>mascotas.png" alt="">
                </div>
                <div class="column is-8-mobile is-8-tablet is-9-desktop">
                    <p>Mascotas</p>
                </div>
                <div class="column is-2 is-flex is-justify-content-flex-end">
                    <div class="acordeon-down-arrow" data-uso="mascotas">
                        <div class="flecha_down"></div>
                    </div>
                </div>
            </div>
            <div class="usos-cotidianos-acordeon-item-body">
                <div id="mascotas" class="usos-carousel-cont">
                    <?php $cont = 1; foreach($usosCotidianos->mascotas as $uso): ?>
                        <div class="item-<?=$cont ?>">
                            <div class="columns">
                                <div class="column is-5">
                                    <h2><?=$uso->titulo ?></h2>
                                </div>
                                <div class="column is-5 usos-cotidianos-acordeon-item-body-circulo">
                                    <div class="play-button" data-src="<?=$uso->videoURL ?>"><div class="play-arrow" data-src="<?=$uso->videoURL ?>"></div></div>
                                    <img src="<?=$templateUriSection ?>slider/mascotas-<?=$cont ?>.png" alt="">
                                </div>
                                <div class="column is-3 is-align-self-flex-end usos-cotidianos-acordeon-item-body-texto">
                                    <p><?=$uso->texto ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $cont = $cont+1; endforeach; ?>
                </div>
            </div>
        </div>
        <div class="usos-cotidianos-acordeon-item">
            <div class="columns is-mobile is-vcentered usos-cotidianos-acordeon-item-header">
                <div class="column is-2-mobile is-2-tablet is-1-desktop">
                    <img src="<?=$templateUriSection ?>jardineria.png" alt="">
                </div>
                <div class="column is-8-mobile is-8-tablet is-9-desktop">
                    <p>Jardinería</p>
                </div>
                <div class="column is-2 is-flex is-justify-content-flex-end">
                    <div class="acordeon-down-arrow" data-uso="jardineria">
                        <div class="flecha_down"></div>
                    </div>
                </div>
            </div>
            <div class="usos-cotidianos-acordeon-item-body">
                <div id="jardineria" class="usos-carousel usos-carousel-cont">
                    <?php $cont = 1; foreach($usosCotidianos->jardineria as $uso): ?>
                        <div class="item-<?=$cont ?>">
                            <div class="columns">
                                <div class="column is-5">
                                    <h2><?=$uso->titulo ?></h2>
                                </div>
                                <div class="column is-5 usos-cotidianos-acordeon-item-body-circulo">
                                    <div class="play-button" data-src="<?=$uso->videoURL ?>"><div class="play-arrow" data-src="<?=$uso->videoURL ?>"></div></div>
                                    <img src="<?=$templateUriSection ?>slider/jardineria-<?=$cont ?>.png" alt="">
                                </div>
                                <div class="column is-3 is-align-self-flex-end usos-cotidianos-acordeon-item-body-texto">
                                    <p><?=$uso->texto ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $cont = $cont+1; endforeach; ?>
                </div>
            </div>
        </div>
        <div class="usos-cotidianos-acordeon-item">
            <div class="columns is-mobile is-vcentered usos-cotidianos-acordeon-item-header">
                <div class="column is-2-mobile is-2-tablet is-1-desktop">
                    <img src="<?=$templateUriSection ?>otros.png" alt="">
                </div>
                <div class="column is-8-mobile is-8-tablet is-9-desktop">
                    <p>Otros</p>
                </div>
                <div class="column is-2 is-flex is-justify-content-flex-end">
                    <div class="acordeon-down-arrow" data-uso="otros">
                        <div class="flecha_down"></div>
                    </div>
                </div>
            </div>
            <div class="usos-cotidianos-acordeon-item-body">
                <div id="otros" class="usos-carousel usos-carousel-cont">
                    <?php $cont = 1; foreach($usosCotidianos->otros as $uso): ?>
                        <div class="item-<?=$cont ?>">
                            <div class="columns">
                                <div class="column is-5">
                                    <h2><?=$uso->titulo ?></h2>
                                </div>
                                <div class="column is-5 usos-cotidianos-acordeon-item-body-circulo">
                                    <div class="play-button" data-src="<?=$uso->videoURL ?>"><div class="play-arrow" data-src="<?=$uso->videoURL ?>"></div></div>
                                    <img src="<?=$templateUriSection ?>slider/otros-<?=$cont ?>.png" alt="">
                                </div>
                                <div class="column is-3 is-align-self-flex-end usos-cotidianos-acordeon-item-body-texto">
                                    <p><?=$uso->texto ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $cont = $cont+1; endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include 'contacto-banner.php';
    get_footer();
?>
