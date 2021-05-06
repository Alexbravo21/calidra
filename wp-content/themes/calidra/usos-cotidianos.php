<?php
    /*
    Template Name: Usos cotidianos
    */
    global $site_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/usos_cotidianos/';
    $imageSectionHero = $templateUriSection . 'usos-cotidianos.jpg';
    $copySide = 'derecho';
    include 'section-header.php';
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
                    <div class="acordeon-down-arrow">
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
                    <img src="<?=$templateUriSection ?>limpieza.png" alt="">
                </div>
                <div class="column is-8-mobile is-8-tablet is-9-desktop">
                    <p>Limpieza / Desinfección</p>
                </div>
                <div class="column is-2 is-flex is-justify-content-flex-end">
                    <div class="acordeon-down-arrow">
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
                    <img src="<?=$templateUriSection ?>mascotas.png" alt="">
                </div>
                <div class="column is-8-mobile is-8-tablet is-9-desktop">
                    <p>Mascotas</p>
                </div>
                <div class="column is-2 is-flex is-justify-content-flex-end">
                    <div class="acordeon-down-arrow">
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
                    <div class="acordeon-down-arrow">
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
                    <div class="acordeon-down-arrow">
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
