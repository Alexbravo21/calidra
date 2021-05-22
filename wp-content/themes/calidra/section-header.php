<?php $post_id = $categoryArray[$category] ?? $post_id ?? null; ?>
<div class="seccion-hero" style="background-image:url(<?=$imageSectionHero ?? '' ?>)">
    <div class="container <?=$copySide ?? 'izquierdo'?>">
        <p class="<?=$color ?? 'negro' ?>">
            <?php 
                if(gettype($post_id) !== 'string'){
                    echo get_the_title($post_id); 
                }else{
                    echo $post_id; 
                }
            ?>
        </p>
    </div>
</div>