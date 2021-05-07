<?php
    /*
    Template Name: Contacto
    */
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/contacto/';
    $imageSectionHero = $templateUriSection . 'contacto.jpg';
    $color = 'blanco';
    include 'section-header.php';
?>

<div class="contacto section">
    <p class="contacto-parrafo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur; Etenim semper illud extra est, quod arte comprehenditur. Te ipsum, dignissimum maioribus tuis, voluptasne induxit, </p>
    <div class="contacto-form">
        <div class="columns">
            <div class="column">
                <div class="contacto-form-item">
                    <label for="nombre">Nombre*</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div class="contacto-form-item">
                    <label for="correo">Correo electrónico*</label>
                    <input type="text" name="correo" id="correo">
                </div>
                <div class="contacto-form-item">
                    <label for="ciudad">Ciudad*</label>
                    <input type="text" name="ciudad" id="ciudad">
                </div>
            </div>
            <div class="column">
                <div class="contacto-form-item">
                    <label for="apellido">Apellidos*</label>
                    <input type="text" name="apellido" id="apellido">
                </div>
                <div class="contacto-form-item">
                    <label for="telefono">Teléfono*</label>
                    <input type="text" name="telefono" id="telefono">
                </div>
            </div>
        </div>
        <div class="contacto-form-interesado">
            <p class="titulo">Estoy interesado en:</p>
            <p class="opciones">Asesoría técnica</p>
            <p class="opciones">Quiero comprar</p>
            <p class="opciones">Quiero trabajar en Calidra</p>
            <p class="opciones">Jóvenes en entrenamiento</p>
            <p class="opciones">Quiero ser proveedor de Calidra</p>
        </div>
        <button>ENVIAR</button>
    </div>
</div>

<?php 
    get_footer();
?>