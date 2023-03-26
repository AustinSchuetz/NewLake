<?php

$title = get_sub_field('title');
$image_repeater = get_sub_field('image_repeater');

?>
<div class="section-standard">
    <div class="standard-box">
        <?php if($title) : ?>
        <div class="line-break"></div>
        <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <div class="multiple-wide-flex multiple-wide-flex-logo">
        <?php foreach($image_repeater as $image_item) :

            $company_url = $image_item['company_url'];
            $image = ac_get_attachment($image_item['image']);
            ?>
            <a class="flex-five-image-wrap"  <?php if($company_url) : ?>href="<?php echo $company_url; ?>" target="_blank"<?php endif; ?>>
                <img class="flex-five-image" src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>"/>
            </a>
        <?php endforeach; ?>
        </div>
    </div>    
</div>