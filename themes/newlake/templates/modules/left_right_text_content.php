<?php

$left = get_sub_field('left');
$right = get_sub_field('right');

?>
<div class="section-standard section-flex">
    <?php if($left) : ?>
        <div class="text-content left-text-content">
            <?php echo $left; ?>
        </div>
    <?php endif; ?>
    <?php if($right) : ?>
        <?php echo $right; ?>
    <?php endif; ?>
</div>