<?php 
    if (isset($category) && $category !== NULL) {
        $post_id = $categoryArray[$category];
    }else if (isset($post_id) && $post_id !== NULL){
        $post_id = $post_id;
    }else{
        $post_id = null;
    }
    $imageSectionHeroMobile = isset($imageSectionHeroMobile) && $imageSectionHeroMobile !== NULL ? $imageSectionHeroMobile : $imageSectionHero;
?>
<div class="seccion-hero is-hidden-touch" style="background-image:url(<?=$imageSectionHero ?? '' ?>)">
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
<div class="seccion-hero is-hidden-desktop" style="background-image:url(<?=$imageSectionHeroMobile ?? '' ?>)">
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