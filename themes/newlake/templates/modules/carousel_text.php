<?php

$text_content = get_sub_field('text_content');
$image_repeater = get_sub_field('image_repeater');

?>
<div class="section-standard carousel-standard-wrap">
    <?php if($text_content) : ?><h1></h1>
    <div class="carousel-text-content">
        <h5><?php echo $text_content; ?></h5>
    </div>
    <?php endif; ?>





    <div class="carousel-standard">
        <?php foreach($image_repeater as $image_item) :

            $image = ac_get_attachment($image_item['image']);
            ?>
                <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>"/>
        <?php endforeach; ?>
    </div>
</div>



<script>
    $('.carousel-standard').slick({
        infinite: true,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        centerMode: true,
        slidesToShow: 1,
        nextArrow: '<img class="slick-next" src="/wp-content/themes/newlake/assets/arrow-right.png" />',
        prevArrow: '<img class="slick-prev" src="/wp-content/themes/newlake/assets/arrow-left.png" />'
        
    });
</script>