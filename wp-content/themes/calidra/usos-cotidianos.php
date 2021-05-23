<?php
    /*
    Template Name: Usos cotidianos
    */
    global $calidra_base_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/usos_cotidianos/';
    $imageSectionHero = $templateUriSection . 'usos-cotidianos.jpg';
    $copySide = 'derecho';
    include 'section-header.php';
    $usosCotidianos = json_decode(json_encode([
        'hogar' => [
            [
                'titulo' => 'Control plagas pequeñas',
                'texto' => 'Por sus características químicas, la cal es un componente eficiente en el control y eliminación de plagas en casa o jardín.'
            ],
            [
                'titulo' => 'Ingrediente de cocina',
                'texto' => 'Usa Nixtacal para una buena nixtamalización, conoce más sobre el uso de la lechada de cal en este proceso culinario.'
            ]       
        ],
        'limpieza' => [
            [
                'titulo' => 'Desodorante y controlador de malos olores',
                'texto' => 'Usa agua de cal para eliminar malos olores en coladeras o céspoles, así mantendrás un ambiente desinfectado y con un control de olores al interior de casa.'
            ],
            [
                'titulo' => 'Eliminador de moho',
                'texto' => 'Elimina moho de tu azulejo con agua de Calidra, y crea una capa protectora de larga duración.'
            ],
            [
                'titulo' => 'Desinfectante en la cocina',
                'texto' => 'El agua de cal es un desinfectante natural con el que puedes limpiar verduras, frutas y legumbres, conoce por qué lo recomendamos y usa Calidra para desinfectar alimentos.'
            ]
        ]
    ]));
?>
<div class="usos-cotidianos section">
    <div class="usos-cotidianos-desc">
        <p>La cal es un producto que ha estado presente a lo largo de la historia del ser humano, desde el ámbito constructivo hasta el culinario.</p>
        <p>Conoce los diferentes usos que puedes realizar en tu hogar.</p>
    </div>
    <div class="usos-cotidianos-acordeon container">
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
                <div class="usos-cotidianos-acordeon-item-body-nav">
                    <div class="slider-navigation-previous-calidra">
                        <span>ANTERIOR</span>
                    </div>
                    <div class="slider-navigation-next-calidra">
                        <span>SIGUIENTE</span>
                    </div>
                </div>
                <div id="hogar" class="usos-carousel">
                    <?php $cont = 1; foreach($usosCotidianos->hogar as $uso): ?>
                        <div class="item-<?=$cont ?>">
                            <div class="columns">
                                <div class="column is-5">
                                    <h2><?=$uso->titulo ?></h2>
                                </div>
                                <div class="column is-5 producto-interior-cont-circulo">
                                    <div class="producto-interior-cont-circulo-int">
                                        <img src="<?=the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                </div>
                                <div class="column is-3 is-align-self-flex-end producto-interior-cont-ficha">
                                    <span><i class="far fa-file-alt"></i></span><span>FICHA TÉCNICA</span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
                <div class="usos-cotidianos-acordeon-item-body-nav">
                    <div class="slider-navigation-previous-calidra">
                        <span>ANTERIOR</span>
                    </div>
                    <div class="slider-navigation-next-calidra">
                        <span>SIGUIENTE</span>
                    </div>
                </div>
                <div id="limpieza" class="usos-carousel">
                    <?php $cont = 1; foreach($usosCotidianos->limpieza as $uso): ?>
                        <div class="item-<?=$cont ?>">
                            <div class="columns">
                                <div class="column is-5">
                                    <h2><?=$uso->titulo ?></h2>
                                </div>
                                <div class="column is-5 producto-interior-cont-circulo">
                                    <div class="producto-interior-cont-circulo-int">
                                        <img src="<?=the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                </div>
                                <div class="column is-3 is-align-self-flex-end producto-interior-cont-ficha">
                                    <span><i class="far fa-file-alt"></i></span><span>FICHA TÉCNICA</span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
                <img src="<?=$templateUriSection ?>/otros/fungicida.png" alt="">
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
                <img src="<?=$templateUriSection ?>/otros/fungicida.png" alt="">
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
                <img src="<?=$templateUriSection ?>/otros/fungicida.png" alt="">
            </div>
        </div>
    </div>
</div>
<?php 
    include 'contacto-banner.php';
    get_footer();
?>
