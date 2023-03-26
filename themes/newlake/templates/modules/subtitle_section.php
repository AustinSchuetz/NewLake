<?php
$subtitle = get_sub_field('subtitle');
?>

<div class="section-standard">
    <div class="standard-box">
        <?php if($subtitle) : ?>
        <h2 class="center"><?php echo $subtitle; ?></h2>
        <?php endif; ?>
    </div>
</div>