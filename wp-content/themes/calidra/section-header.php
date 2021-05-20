<?php $post_id = $categoryArray[$category] ?? null; ?>
<div class="seccion-hero" style="background-image:url(<?=$imageSectionHero ?? '' ?>)">
    <div class="container <?=$copySide ?? 'izquierdo'?>">
        <p class="<?=$color ?? 'negro' ?>"><?=get_the_title($post_id); ?></p>
    </div>
</div>