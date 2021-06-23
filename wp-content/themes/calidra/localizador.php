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
            <input type="text" placeholder="INGRESA ESTADO, LOCALIDAD Y/O CÓDIGO POSTAL" class="localizador_input">
            <button class="localizador_enviar" type="button">BUSCAR</button>
            <p class="error error_localizador">Debe ingresar su nombre</p>
        </div>
    </div>
    <div class="localizador-mapa">
        <div class="localizador-mapa-gmaps"></div>
        <div class="localizador-mapa-info">
            <div class="cerrar"><span>X</span></div>
            <div class="container localizador-mapa-info-display">
                <div class="localizador-mapa-info-display-tels">
                    <div class="columns is-flex is-align-items-flex-end">
                        <div class="column region">
                            <p>REGIÓN NORTE</p>
                            <p>REGIÓN CENTRO</p>
                            <p>REGIÓN PACÍFICO</p>
                            <p>REGIÓN ORIENTE</p>
                        </div>
                        <div class="column telefonos">
                            <img src="<?=$templateUriSection ?>tel.png" alt="">
                            <p>800 880 4372</p>
                            <p>800 500 0499</p>
                            <p>800 999 9225</p>
                            <p>800 122 5437</p>
                        </div>
                        <div class="column mails">
                                <img src="<?=$templateUriSection ?>correo.png" alt="">
                            <p>atencionaclientesnorte@calidra.com.mx</p>
                            <p>atencionaclientescentro@calidra.com.mx</p>
                            <p>atencionaclientesoccidente@calidra.com.mx</p>
                            <p>atencion_clientes_oriente@calidra.com.mx</p>
                        </div>
                    </div>
                </div>
                <div class="localizador-mapa-info-display-marker">
                    <div class="columns">
                        <div class="column localizador-mapa-info-display-marker-texto is-6 reliable-old-lady">
                            <h3 class="info-nombre">CALIDRA DE ORIENTE S.A. DE C.V.</h3>
                            <p class="info-direccion-1">Corporativo Angelópolis, Oficina 201, Calle Opera #2</p>
                            <p class="info-direccion-2">Lomas de Angelópolis, Puebla, Puebla, C.P. 72830</p>
                        </div>
                        <div class="column localizador-mapa-info-display-marker-tel reliable-old-lady-right">
                            <img src="<?=$templateUriSection ?>tel.png" alt="">
                            <p>Teléfono: 01 (222) 309 1400</p>
                            <p>Extensiones: 1430-1431</p>
                        </div>
                        <div class="column localizador-mapa-info-display-marker-correo reliable-old-lady-right">
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
</div>

<?php 
    include 'contacto-banner.php';
    get_footer();
?>