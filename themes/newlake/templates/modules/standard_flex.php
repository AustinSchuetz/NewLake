<?php

$id = get_sub_field('id');
$flex_reverse = get_sub_field('flex_reverse');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$content = get_sub_field('content');
$image = ac_get_attachment(get_sub_field('image'));

?>
<div class="section-standard section-flex <?php if($flex_reverse) : ?>flex-reverse<?php endif; ?>" <?php if($id) : ?>id="<?php echo $id; ?>"<?php endif; ?>>
    <div class="left">
        <div class="text-content">
            <div class="line-break"></div>
            <?php if($title) : ?><h2><?php echo $title; ?></h2><?php endif; ?>
            <?php if($subtitle) : ?><h3><?php echo $subtitle; ?></h3><?php endif; ?>
            <?php if($content) : ?><?php echo $content; ?><?php endif; ?>
        </div>
    </div>
    <div class="right">
        <img class="flex-image" <?php if($flex_reverse) : ?>data-effect="fadeInLeft"<?php else : ?>data-effect="fadeInRight"<?php endif; ?> src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
</div>