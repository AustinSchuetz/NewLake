<?php

$testimonial = get_sub_field('testimonial');

?>
<div class="section-standard home-testimonials company-testimonials">
    <div class="testimonials-wrap">
<?php foreach($testimonial as $testimonial_item) :

    $testimonial_quote = $testimonial_item['testimonial_quote'];
    $testimonial_title = $testimonial_item['testimonial_title'];
    $testimonial_person_image = ac_get_attachment($testimonial_item['testimonial_person_image']);
    $testimonial_person_name = $testimonial_item['testimonial_person_name'];
    $testimonial_person_check = $testimonial_item['testimonial_person_check'];
    ?>
    <div class="testimonial">
        <?php if($testimonial_person_check) : ?>
            <img src="<?php echo $testimonial_person_image['src']; ?>" />
        <?php endif; ?>
        <h5><?php echo $testimonial_quote; ?></h5>
        <?php if($testimonial_person_name) : ?><h2><?php echo $testimonial_person_name; ?></h2><?php endif; ?>
        <p class="title"><?php echo $testimonial_title; ?></p>
    </div>
<?php endforeach; ?>
    </div>
</div>
<script>
    $('.testimonials-wrap').slick({
        infinite: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 7000,
        nextArrow: '<img class="quote-chevron quote-chevron-left" src="/wp-content/themes/newlake/assets/chevron-left.png" />',
        prevArrow: '<img class="quote-chevron quote-chevron-right" src="/wp-content/themes/newlake/assets/chevron-right.png" />'
    });
</script>