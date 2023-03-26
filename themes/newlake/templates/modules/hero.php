<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$wave_flow_bottom = get_sub_field('wave_flow_bottom');
$image = ac_get_attachment(get_sub_field('image'));

?>
<div class="hero" <?php if($image) : ?>style="background: url(<?php echo $image['src']; ?>) 100% 50% no-repeat;background-size: cover;"<?php endif; ?>>
    <div class="text-content">
        <?php if($title) : ?><h1><?php echo $title; ?></h1><?php endif; ?>
        <?php if($subtitle) : ?><p><?php echo $subtitle; ?></p><?php endif; ?>
    </div>
    <?php if($wave_flow_bottom) : ?><img class="wave" src="/wp-content/themes/newlake/assets/Wave.png" alt="Wave decorative" /><?php endif; ?>
</div>