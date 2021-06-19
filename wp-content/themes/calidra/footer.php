<?php global $calidra_base_url; ?>
<footer class="section">
    <div class="top-footer container">
        <div class="columns">
            <div class="column">
                <ul>
                    <li><a href="<?=$calidra_base_url ?>">Inicio</a></li>
                    <li><a href="<?=$calidra_base_url ?>corporativo">Corporativo</a></li>
                    <li><a href="<?=$calidra_base_url ?>localizador">Localizador</a></li>
                    <li><a href="<?=$calidra_base_url ?>blog">Blog</a></li>
                    <li><a href="<?=$calidra_base_url ?>contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="column has-text-centered footer-correo">
                <i class="fas fa-map-marker-alt"></i>
                <p>Oficinas Corporativas CDMX</p>
                <i class="far fa-envelope"></i>
                <p><a href="mailto:contacto@calidra.com.mx">contacto@calidra.com.mx</a></p>
            </div>
            <div class="column redes">
                <div class="columns is-centered">
                    <div class="column is-4">
                        <div class="columns is-mobile">
                            <div class="column">
                                <a href="https://www.facebook.com/CalidraMexico" target="_blank"><img src="<?=get_template_directory_uri() ?>/assets/img/fb.png" alt="Facebook"></a>
                            </div>
                            <div class="column">
                                <a href="https://www.youtube.com/channel/UCRHcxTzgqfFtRuiSLUy_Qnw" target="_blank"><img src="<?=get_template_directory_uri() ?>/assets/img/yt.png" alt="Youtube"></a>
                            </div>
                            <div class="column">
                                <a href="https://www.linkedin.com/company/grupocalidra/mycompany/" target="_blank"><img src="<?=get_template_directory_uri() ?>/assets/img/in.png" alt="Linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="columns">
                <div class="column is-5">
                    <div class="columns is-vcentered is-mobile">
                        <div class="column is-8-mobile">
                            <p class="footer-aviso-border">2021 Calidra. Todos los derechos reservados</p>
                        </div>
                        <div class="column">
                            <p><a href="<?=$calidra_base_url ?>aviso-de-privacidad">AVISO DE PRIVACIDAD</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?=get_template_directory_uri()?>/assets/js/bulma-carousel.js"></script>
<script src="<?=get_template_directory_uri()?>/assets/js/bulma-carousel-2.js"></script>
<script src="<?=get_template_directory_uri()?>/assets/js/calidra.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK8rOTolosFz9PTVCQcQttvD8t6zOojac&callback=initMap" async defer></script>
    
</body>
</html>