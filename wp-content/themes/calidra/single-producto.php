<?php

get_header();
$category_array = get_the_category();
$templateUriSection = get_template_directory_uri() . '/assets/img/localizador/';
$imageSectionHero = $templateUriSection . 'localizador.jpg';
$color = 'blanco';
include 'section-header.php';

?>
<div class="producto-interior section">
    <h2>Hola <?=get_the_title() ?></h2>
    <p><?php print_r($category_array[0]->name); ?></p>
    <?php include 'localizador-videos-template.php'; ?>
</div>


<?php 
    include 'blog-thumbnails.php';
    include 'contacto-banner.php';
    get_footer();
?>
