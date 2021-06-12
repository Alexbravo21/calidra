<?php
    /*
    Template Name: Contacto
    */
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/contacto/';
    $imageSectionHero = $templateUriSection . 'contacto.jpg';
    $imageSectionHeroMobile = $templateUriSection . 'contacto-mobile.jpg';
    $color = 'blanco';
    include 'section-header-2.php';
?>

<div class="contacto section">
    <p class="contacto-parrafo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur; Etenim semper illud extra est, quod arte comprehenditur. Te ipsum, dignissimum maioribus tuis, voluptasne induxit, </p>
    <div class="contacto-form">
        <div class="columns">
            <div class="column">
                <div class="contacto-form-item reliable-old-lady">
                    <label for="nombre">Nombre*</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div class="contacto-form-item reliable-old-lady">
                    <label for="correo">Correo electrónico*</label>
                    <input type="text" name="correo" id="correo">
                </div>
                <div class="contacto-form-item reliable-old-lady">
                    <label for="ciudad">Ciudad*</label>
                    <input type="text" name="ciudad" id="ciudad">
                </div>
            </div>
            <div class="column">
                <div class="contacto-form-item reliable-old-lady-right">
                    <label for="apellido">Apellidos*</label>
                    <input type="text" name="apellido" id="apellido">
                </div>
                <div class="contacto-form-item reliable-old-lady-right">
                    <label for="telefono">Teléfono*</label>
                    <input type="text" name="telefono" id="telefono">
                </div>
            </div>
        </div>
        <div class="contacto-form-item reliable-old-lady">
            <div class="select">
            <select name="interesado" id="interesado">
                <option value="" selected disabled hidden>Estoy interesado en:*</option>
                <option value="1">&nbspAsesoría técnica</option>
                <option value="2">&nbspQuiero comprar</option>
                <option value="3">&nbspQuiero trabajar en Calidra</option>
                <option value="4">&nbspJóvenes en entrenamiento</option>
                <option value="5">&nbspQuiero ser proveedor de Calidra</option>
            </select>
            </div>
        </div>
        <div class="contacto-form-item reliable-old-lady comentarios">
            <label for="comentarios">Comentarios</label>
            <input type="text" name="comentarios" id="comentarios">
        </div>
        <div class="contacto-form-terminos reliable-old-lady">
            <label class="checkbox">
                <input type="checkbox">
                <span>He leído y aceptado el <a href="#">Aviso de privacidad</a></span>
            </label>
        </div>
        <button>ENVIAR</button>
    </div>
</div>

<?php 
    get_footer();
?>