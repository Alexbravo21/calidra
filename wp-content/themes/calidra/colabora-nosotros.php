<?php
    /*
    Template Name: ColaboraNosotros
    */
    global $calidra_base_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/corporativo/';
    $imageSectionHero = $templateUriSection . 'colabora-nosotros-hero.jpg';
    $copySide = 'derecho';
    $color = 'blanco';
    include 'section-header.php';
?>
<div class="colabora-nosotros-seccion section">
    <div class="colabora-nosotros-titulo-cont">
        <h2>COLABORA CON NOSOTROS</h2>
        <p>Calidra está enfocada en la formación de profesionales y el desarrollo de sus habilidades, como el desempeño de sus funciones y capacitación laboral continua. Cada uno de nuestros colaboradores y empleados sabe que la actitud de servicio es esencial para cumplir con las expectativas de la propia empresa y sus clientes.</p>
    </div>
    <div class="colabora-vacantes-cont">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <a href="<?=$calidra_base_url ?>contacto"><div class="colabora-vacantes">
                        <h3>Vacantes</h3>
                        <img src="<?=$templateUriSection ?>colabora-vacantes.jpg" alt="">
                        <p>Si quieres formar parte de una gran familia, de un gran equipo de trabajo, estás en el lugar correcto. Conoce las vacantes que tenemos para que tu desarrollo laboral comience a crecer junto con nosotros, junto a Calidra.</p>
                    </div></a>
                </div>
                <div class="column">
                <a href="<?=$calidra_base_url ?>contacto"><div class="colabora-vacantes">
                        <h3>Jóvenes en<br>entrenamiento</h3>
                        <img src="<?=$templateUriSection ?>colabora-jovenes.jpg" alt="">
                        <p>Nuestro proyecto jóvenes en entrenamiento quiere ser un punto de contacto entre gente joven que está estudiando y que busca la posibilidad de realizar actividades para renovar la industria de la cal.</p>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="colabora-creciendo-cont">
        <div class="colabora-creciendo">
            <div class="colabora-creciendo-int">
                <h3>Creciendo con Calidra</h3>
                <p>Descubre las oportunidades que tenemos de desarrollo dentro de la empresa. Calidra tiene una oportunidad para ti.</p>
                <p>Cada acción es tan vital como el dedo de tu mano.</p>
                <div class="colabora-creciendo-numeros">
                    <div class="columns">
                        <div class="column">
                            <div class="columns is-mobile is-vcentered colabora-creciendo-numero-cont">
                                <div class="column is-2 colabora-creciendo-numero">
                                    <div class="colabora-creciendo-numero-int">
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="column">Descubro Calidra <span>- Arte y cultura</span></div>
                            </div>
                            <div class="columns is-mobile is-vcentered colabora-creciendo-numero-cont">
                                <div class="column is-2 colabora-creciendo-numero">
                                    <div class="colabora-creciendo-numero-int">
                                        <span>2</span>
                                    </div>
                                </div>
                                <div class="column">Comparto con Calidra <span>- Familia</span></div>
                            </div>
                            <div class="columns is-mobile is-vcentered colabora-creciendo-numero-cont">
                                <div class="column is-2 colabora-creciendo-numero">
                                    <div class="colabora-creciendo-numero-int">
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="column">Me activo con Calidra <span>- Seguridad y salud</span></div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="columns is-mobile is-vcentered colabora-creciendo-numero-cont">
                                <div class="column is-2 colabora-creciendo-numero">
                                    <div class="colabora-creciendo-numero-int">
                                        <span>4</span>
                                    </div>
                                </div>
                                <div class="column">Valoro con Calidra <span>- Compromiso humano y social</span></div>
                            </div>
                            <div class="columns is-mobile is-vcentered colabora-creciendo-numero-cont">
                                <div class="column is-2 colabora-creciendo-numero">
                                    <div class="colabora-creciendo-numero-int">
                                        <span>5</span>
                                    </div>
                                </div>
                                <div class="column">Represento a Calidra <span>- Todos vendemos</span></div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div> 
        </div>
        <div class="colabora-tabs">
            <div class="columns">
                <div class="column"><span>CAPACITACIÓN</span></div>
                <div class="column"><span>UNVICAL</span></div>
                <div class="column"><span>CRECIMIENTO</span></div>
                <div class="column active"><span>EQUIPOS DE TRABAJO</span></div>
            </div>
        </div>
        <div class="colabora-tabs-contenido">
            <div class="columns is-vcentered">
                <div class="column">
                    <h4>Equipos de trabajo</h4>
                    <ul>
                        <li>Cadena de suministro.</li>
                        <li>Administración, finanzas y TI.</li>
                        <li>Recursos Humanos.</li>
                        <li>Desarrollo sustentable.</li>
                        <li>Técnica.</li>
                        <li>Mezclas listas.</li>
                        <li>Ventas Directas Construcción.</li>
                    </ul>
                </div>
                <div class="column">
                    <img src="<?=$templateUriSection ?>equipo.png" alt="">
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