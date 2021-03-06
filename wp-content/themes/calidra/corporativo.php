<?php
    /*
    Template Name: Corporativo
    */
    global $calidra_base_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/corporativo/';
    $imageSectionHero = $templateUriSection . 'corporativo.jpg';
    $imageSectionHeroMobile = $templateUriSection . 'corporativo-mobile.jpg';
    include 'section-header-2.php';
    $iconos_texto = Array(
        "Integridad y Honestidad",
        "Responsabilidad",
        "Disciplina",
        "Respeto",
        "Austeridad, sencillez y moderación"        
    )
?>
<div class="quienes-somos section">
    <div class="quienes-somos-titulo-cont">
        <div class="pleca-roja">
            <div class="flecha-derecha"></div>
        </div>
        <h2 class="reliable-old-lady">QUIÉNES SOMOS</h2>
    </div>
    <div class="quienes-somos-mini-cont">
        <div class="quienes-somos-texto reliable-old-lady-right">
            <p>Durante un siglo de existencia, grupo Calidra se ha consolidado como líder en la industria de la cal. Con ayuda de estrategias internas y esfuerzos entre colaboradores hemos crecido guiados por el compromiso de ofrecer productos de excelente calidad.</p>
            <p>Calidra está enfocada en la formación de profesionales y el desarrollo de sus habilidades, como el desempeño de sus funciones y capacitación laboral continua. Cada uno de nuestros colaboradores y empleados sabe que la actitud de servicio es esencial para cumplir con las expectativas de la propia empresa y sus clientes.</p>
            <p><strong>Misión:</strong> Ser una empresa competitiva y sustentable a nivel mundial que nos permita satisfacer las necesidades y expectativas razonables de nuestros clientes, del personal, de los accionistas y de la sociedad de forma ejemplar.</p>
            <p><strong>Visión:</strong> Ser la empresa productora de cal, mezclas listas, y carbonatos más competitiva del mundo y la más grande del continente americano</p>
        </div>
        <div class="columns quienes-somos-iconos">
            <?php for ($i = 0; $i < count($iconos_texto); $i++):?>
                <div class="column">
                    <img src="<?=$templateUriSection ?>quienes_somos_icono<?=$i+1 ?>.jpg" alt="" class="quienes-somos-icono reliable-old-lady-down">
                    <p><?=$iconos_texto[$i] ?></p>
                </div>
            <?php endfor;?>
        </div>
    </div>
    <div class="responsabilidad-social">
        <div class="responsabilidad-social-imagen-cont">
            <img src="<?=$templateUriSection ?>responsabilidad-social.jpg" alt="" class="reliable-old-lady-right">
        </div>
        <div class="responsabilidad-social-texto">
            <h2 class="reliable-old-lady">Responsabilidad<br>Social</h2>
            <p class="reliable-old-lady">Grupo Calidra lleva a cabo acciones de responsabilidad social que demuestran nuestro compromiso e interés por mejorar nuestro entorno y colaborar por un bienestar común.</p>
            <p class="reliable-old-lady">Apoyamos a comunidades para la restauración y construcción de calles, escuelas, obras públicas, colaboramos en reforestaciones voluntarias, con fundaciones de asistencia social y campañas de salud internas para nuestro personal.</p>
            <p class="reliable-old-lady">Tenemos muy presente el rol tan importante de las empresas en la creación de valor y fomento al desarrollo en nuestra sociedad.</p>
        </div>
    </div>
    <div class="colabora-nosotros">
        <div class="colabora-imagen">
            <div class="colabora-imagen-over">
                <img src="<?=$templateUriSection ?>colabora-nosotros.jpg" alt="" class="reliable-old-lady-right">
            </div>
            <h2 class="reliable-old-lady">Colabora con nosotros</h2>
        </div>
        <p class="reliable-old-lady">Si quieres formar parte de una gran familia, de un gran equipo de trabajo, estás en el lugar correcto. Conoce las vacantes que tenemos para que tu desarrollo laboral comience a crecer junto con nosotros, junto a Calidra.</p>
        <a href="<?=$calidra_base_url ?>corporativo/colabora-con-nosotros"><p class="colabora-vermas reliable-old-lady">ver más</p></a>
    </div>
    <div class="corporativo-iniciativas-cont" style="display:none;"><!-- Este display es mientras cliente aprueba esta sección -->
        <div class="contenedor">
            <div class="corporativo-iniciativas">
                <h2>Iniciativas</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur; Etenim semper illud extra est, quod arte comprehenditur. Te ipsum, dignissimum maioribus tuis, voluptasne induxit, ut adolescentulus eriperes P. Duo Reges: constructio interrete. Cum autem in quo sapienter dicimus, id a primo rectissime dicitur. Quae qui non vident, nihil umquam magnum ac cognitione dignum amaverunt.</p>
            </div>
        </div>
        <div class="corporativo-iniciativas-slider">
            <div class="columns">
                <div class="corporativo-iniciativas-slider-texto column">
                    <h3 class="slider-anim">Lorem ipsum dolor</h3>
                    <p class="slider-anim">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc de hominis summo bono quaeritur</p>
                </div>
                <div class="corporativo-iniciativas-slider-imagen column">
                    <div class="corporativo-iniciativas-slider-imagen-cont">
                        <img class="slider-anim" src="<?=$templateUriSection ?>iniciativas.jpg" alt="">
                    </div>
                    <div class="corporativo-navegador">
                        <div class="corporativo-navegador-izq">
                            <span><</span>
                        </div>
                        <div class="corporativo-navegador-der">
                            <span>></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include 'blog-thumbnails.php';
    include 'contacto-banner.php';
    get_footer();
?>