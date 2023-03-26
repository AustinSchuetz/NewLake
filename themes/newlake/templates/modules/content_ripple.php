<?php
$ripple = get_sub_field('ripple');
$image_or_video = get_sub_field('image_or_video');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$image_background = ac_get_attachment(get_sub_field('image_background'));
$ripple_image = ac_get_attachment(get_sub_field('ripple_image'));
$video_embed = get_sub_field('video_embed');
$video_background = ac_get_attachment(get_sub_field('video_background'));
?>

<div class="content-stat-section">
    <?php if($image_or_video == 'Image') : ?>
    <div class="stat-background"<?php if($image_background) : ?> style="background: url(<?php echo $image_background['src']; ?>) 50% 50% no-repeat;background-size:cover;"<?php endif; ?>>
        <?php if($title) : ?>
        <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if($subtitle) : ?>
        <h5><?php echo $subtitle; ?></h5>
        <?php endif; ?>
    </div>
    <?php elseif($image_or_video == 'Video') : ?>
    <div class="stat-background video-content-bg"<?php if($video_background) : ?> style="background: url(<?php echo $video_background['src']; ?>) 50% 50% no-repeat;background-size:cover;"<?php endif; ?>>
        <div class="video">
            <?php echo $video_embed; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if($ripple) : ?>
    <img src="<?php echo $ripple_image['src']; ?>" class="ripple-bg" />
    <?php endif; ?>
</div>