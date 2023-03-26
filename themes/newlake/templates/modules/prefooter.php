<?php
$text = get_sub_field('text');
$cta_link = get_sub_field('cta_link');
$cta_text = get_sub_field('cta_text');
$width = get_sub_field('width');
?>
<div class="section-standard section-standard-extra-padding prefooter">
    <?php if($text) : ?>
    <div class="standard-box">
        <h2 class="center" <?php if($width) : ?>style="width: <?php echo $width; ?>;max-width:100%;"<?php endif; ?>><?php echo $text; ?></h2>
        <?php if($cta_link) : ?>
        <div class="btn-holder btn-holder-center btn-holder-connect">
            <a href="<?php echo $cta_link; ?>" class="cta-btn cta-btn-alt"><?php echo $cta_text; ?></a>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>