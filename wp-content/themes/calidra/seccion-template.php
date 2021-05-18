<?php
    /*
    Template Name: Seccion template
    */
    global $calidra_base_url;
    get_header();
    $templateUriSection = get_template_directory_uri() . '/assets/img/seccion_template/';
    $imageSectionHero = get_field('hero_image');
    $copySide = 'derecho';
    $color = 'blanco';
    include 'section-header.php';
?>
<div class="seccion-template section">
    <div class="seccion-template-desc">
        <?php the_field('descripcion_de_seccion'); ?>
    </div>
    <div class="seccion-template-productos">
        <h3>NUESTROS PRODUCTOS</h3>
    </div>
    <?php include 'localizador-videos-template.php'; ?>
</div>
<?php 
    include 'blog-thumbnails.php';
    get_footer();
?>
