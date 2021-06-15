<?php
    /*
    Template Name: Localizador
    */
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/localizador/';
    $imageSectionHero = $templateUriSection . 'localizador.jpg';
    $imageSectionHeroMobile = $templateUriSection . 'localizador-mobile.jpg';
    $color = 'blanco';
    include 'section-header-2.php';
?>

<div class="localizador section">
    <div class="localizador-buscador">
        <h2 class="reliable-old-lady">Localizador</h2>
        <p class="reliable-old-lady-right">Encuentra tu distribuidor más cercano a lo largo de toda la República Mexicana, Calidra siempre ahí.</p>
        <div class="localizador-buscador-input reliable-old-lady-down">
            <input type="text" placeholder="INGRESA ESTADO, LOCALIDAD Y/O CÓDIGO POSTAL">
            <button type="button">BUSCAR</button>
        </div>
    </div>
    <div class="localizador-mapa">
        <div class="localizador-mapa-info">
            <div class="cerrar"><span>X</span></div>
            <div class="container localizador-mapa-info-display">
                <div class="columns">
                    <div class="column localizador-mapa-info-texto is-6 reliable-old-lady">
                        <h4>REGIÓN ORIENTE</h4>
                        <h3>CALIDRA DE ORIENTE S.A. DE C.V.</h3>
                        <p>Corporativo Angelópolis, Oficina 201, Calle Opera #2</p>
                        <p>Lomas de Angelópolis, Puebla, Puebla, C.P. 72830</p>
                    </div>
                    <div class="column localizador-mapa-info-tel reliable-old-lady-right">
                        <img src="<?=$templateUriSection ?>tel.png" alt="">
                        <p>Teléfono: 01 (222) 309 1400</p>
                        <p>Extensiones: 1430-1431</p>
                    </div>
                    <div class="column localizador-mapa-info-correo reliable-old-lady-right">
                        <a href="mailto:atencion_clientes_oriente@calidra.com.mx">
                            <img src="<?=$templateUriSection ?>correo.png" alt="">
                            <p>atencion_clientes_oriente@calidra.com.mx</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'contacto-banner.php';
    get_footer();
?>