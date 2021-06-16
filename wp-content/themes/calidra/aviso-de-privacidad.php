<?php
    /*
    Template Name: Aviso de privacidad
    */
    global $calidra_base_url;
    get_header();
?>

<div class="aviso">
    <h2><?=the_title()?></h2>
    <div class="aviso-contenido">
        <?=the_content();?>
    </div>
</div>



<?php 
    get_footer();
?>