<?php 
    if (isset($category) && $category !== "undefined") {
        $post_id = $categoryArray[$category];
    }else if (isset($post_id) && $post_id !== "undefined"){
        $post_id = $post_id;
    }else{
        $post_id = null;
    }
?>
<div class="seccion-hero" style="background-image:url(<?=$imageSectionHero ?? '' ?>)">
    <div class="container <?=$copySide ?? 'izquierdo'?>">
        <p class="reliable-old-lady <?=$color ?? 'negro' ?>">
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