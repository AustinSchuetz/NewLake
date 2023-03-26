<?php
$title = get_sub_field('title');
$benefit_card = get_sub_field('benefit_card');

?>
<div class="section-standard">
    <div class="standard-box">
        <div class="line-break"></div>
        <?php if($title) : ?><h2><?php echo $title; ?></h2><?php endif; ?>
        <div class="multiple-wide-flex">
            <?php foreach($benefit_card as $benefit_item) :
                $icon = ac_get_attachment($benefit_item['icon']);
                $benefit_title = $benefit_item['benefit_title'];
                $benefit_bullets = $benefit_item['benefit_bullets'];
                ?>

                <div class="benefit-flex">
                    <img src="<?php echo $icon['src']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    <div class="line-hr"></div>
                    <?php if($benefit_title) : ?><h3><?php echo $benefit_title; ?></h3><?php endif; ?>
                    <?php if($benefit_bullets) : ?>
                    <?php echo $benefit_bullets; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>