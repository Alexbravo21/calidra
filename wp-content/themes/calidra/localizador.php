<?php
    /*
    Template Name: Localizador
    */
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/localizador/';
    $imageSectionHero = $templateUriSection . 'localizador.jpg';
    $color = 'blanco';
    include 'section-header-2.php';
?>

<div class="localizador section">
    <div class="localizador-buscador">
        <h2>Localizador</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur; Etenim semper illud extra est, quod arte comprehenditur. Te ipsum, dignissimum maioribus tuis, voluptasne induxit,</p>
        <div class="localizador-buscador-input">
            <input type="text" placeholder="INGRESA ESTADO, LOCALIDAD Y/O CÓDIGO POSTAL">
            <button type="button">BUSCAR</button>
        </div>
    </div>
    <div class="localizador-mapa">
        <div class="localizador-mapa-info">
            <div class="cerrar"><span>X</span></div>
            <div class="container localizador-mapa-info-display">
                <div class="columns">
                    <div class="column localizador-mapa-info-texto is-6">
                        <h4>REGIÓN ORIENTE</h4>
                        <h3>CALIDRA DE ORIENTE S.A. DE C.V.</h3>
                        <p>Corporativo Angelópolis, Oficina 201, Calle Opera #2</p>
                        <p>Lomas de Angelópolis, Puebla, Puebla, C.P. 72830</p>
                    </div>
                    <div class="column localizador-mapa-info-tel">
                        <img src="<?=$templateUriSection ?>tel.png" alt="">
                        <p>Teléfono: 01 (222) 309 1400</p>
                        <p>Extensiones: 1430-1431</p>
                    </div>
                    <div class="column localizador-mapa-info-correo">
                        <img src="<?=$templateUriSection ?>correo.png" alt="">
                        <p><a href="mailto:atencion_clientes_oriente@calidra.com.mx">atencion_clientes_oriente@calidra.com.mx</a></p>
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