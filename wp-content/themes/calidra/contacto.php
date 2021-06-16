<?php
    /*
    Template Name: Contacto
    */
    global $calidra_base_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/contacto/';
    $imageSectionHero = $templateUriSection . 'contacto.jpg';
    $imageSectionHeroMobile = $templateUriSection . 'contacto-mobile.jpg';
    $color = 'blanco';
    include 'section-header-2.php';
?>
<div class="envio-modal">
    <div class="envio-modal-cont">
        <div class="envio-modal-cont-mensaje">
            <img class="envio-modal-cont-img" src="<?=$templateUriSection ?>send.jpg" alt="">
            <p class="envio-modal-cont-mensaje-gracias"></p>
            <p class="envio-modal-cont-mensaje-msg"></p>
        </div>
    </div>
</div>

<div class="contacto section">
    <p class="contacto-parrafo">En Calidra queremos responder a tus preguntas y escuchar tu opinión acerca de nuestros productos y servicios, siempre a tus ordenes, siempre ahí.</p>
    <div class="contacto-form">
        <form id="contacto-formulario">
            <div class="columns">
                <div class="column">
                    <div class="contacto-form-item reliable-old-lady">
                        <label for="nombre">Nombre*</label>
                        <input type="text" name="nombre" id="nombre" data-required="true">
                        <p class="error">Debe ingresar su nombre</p>
                    </div>
                    <div class="contacto-form-item reliable-old-lady">
                        <label for="correo">Correo electrónico*</label>
                        <input type="text" name="correo" id="correo" data-required="true">
                        <p class="error">Debe ingresar un correo válido</p>
                    </div>
                    <div class="contacto-form-item reliable-old-lady">
                        <label for="ciudad">Ciudad*</label>
                        <input type="text" name="ciudad" id="ciudad" data-required="true">
                        <p class="error">Debe ingresar su ciudad</p>
                    </div>
                </div>
                <div class="column">
                    <div class="contacto-form-item reliable-old-lady-right">
                        <label for="apellido">Apellidos*</label>
                        <input type="text" name="apellido" id="apellido" data-required="true">
                        <p class="error">Debe ingresar su apellido</p>
                    </div>
                    <div class="contacto-form-item reliable-old-lady-right">
                        <label for="telefono">Teléfono*</label>
                        <input type="text" name="telefono" id="telefono" data-required="true">
                        <p class="error">Debe ingresar su teléfono</p>
                    </div>
                </div>
            </div>
            <div class="contacto-form-item reliable-old-lady">
                <div class="select">
                <select name="interesado" id="interesado" data-required="true">
                    <option value="" selected disabled hidden>Estoy interesado en:*</option>
                    <option value="0">&nbspAsesoría técnica</option>
                    <option value="1">&nbspQuiero comprar</option>
                    <option value="2">&nbspQuiero trabajar en Calidra</option>
                    <option value="3">&nbspJóvenes en entrenamiento</option>
                    <option value="4">&nbspQuiero ser proveedor de Calidra</option>
                </select>
                <p class="error">Debe ingresar su interés</p>
                </div>
            </div>
            <div class="contacto-form-item reliable-old-lady comentarios">
                <label for="comentarios">Comentarios</label>
                <input type="text" name="comentarios" id="comentarios" data-required="false">
            </div>
            <div class="contacto-form-terminos reliable-old-lady">
                <label class="checkbox">
                    <input type="checkbox" id="aviso" data-required="true">
                    <span>He leído y aceptado el <a href="<?=$calidra_base_url ?>aviso-de-privacidad">Aviso de privacidad</a>*</span>
                    <p class="error">Debe leer y aceptar el aviso de privacidad</p>
                </label>
            </div>
        </form>
        <button class="contacto_enviar">ENVIAR</button>
    </div>
</div>

<?php 
    get_footer();
?>