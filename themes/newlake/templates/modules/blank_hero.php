<?php
$title = get_sub_field('title');
$additional_content = get_sub_field('additional_content');
?>
<div class="section-standard blank-hero">
    <div class="team-member-text-content">
        <?php if($title) : ?><h1><?php echo $title; ?></h1><?php endif; ?>
        <?php if($additional_content) : ?><div class="additional-content"><?php echo $additional_content; ?></div><?php endif; ?>
    </div>
</div>