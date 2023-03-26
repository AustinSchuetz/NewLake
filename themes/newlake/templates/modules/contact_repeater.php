<?php
$contact_repeater = get_sub_field('contact_repeater');
?>
<div class="section-standard">
    <div class="multiple-wide-flex contact-repeater-wrap">
        <?php foreach($contact_repeater as $contact_repeater_item) :        
            $info_title = $contact_repeater_item['info_title'];
            $info_content = $contact_repeater_item['info_content'];
            ?>
            <div class="contact-repeater">
                <?php if($info_title) : ?><p class="news-title"><?php echo $info_title; ?></p><?php endif; ?>
                <?php if($info_content) : ?><div class="info-content"><?php echo $info_content; ?></div><?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>