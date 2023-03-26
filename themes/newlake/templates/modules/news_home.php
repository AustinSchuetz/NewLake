<?php 

$title = get_sub_field('title');
$category_choice = get_sub_field('category_choice');


    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
    $args = array (
    'nopaging'               => false,
    'paged'                  => $paged,
    'posts_per_page'         => 3,
    'post_type'              => 'post',
        'category_name' => $category_choice
); ?>
<div class="section-standard">
    <div class="standard-box">
        <div class="line-break"></div>
        <?php if($title) : ?><h2><?php echo $title; ?></h2><?php endif; ?>
        <div class="multiple-wide-flex news-flex-wrap">


<?php

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();  ?>
        <a href="<?php echo the_permalink(); ?>" class="benefit-flex news-flex" target="_blank">
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
            <?php echo '<div class="bg-news-img" style="background: url(';
            if($feat_image) echo $feat_image; elseif($feat_image == null) echo '/wp-content/uploads/2023/02/news-placeholder.jpg';            
            echo ')  50% 50% no-repeat; background-size: cover;width:100%;height:240px;"><img class="external-link" src="/wp-content/uploads/2023/02/external-link-icon.svg" /></div>'; ?>
            <div class="news-info">
                <p class="news-date"><?php echo get_the_date(); ?></p>
                <h4 class="news-title"><?php echo the_title(); ?></h4>
            </div>
        </a>
<?php 

    } } else {
    // no posts found
    echo '<h2>No Posts Found</h2>';
}

// Restore original Post Data
wp_reset_postdata(); ?>

        </div>
    </div>
</div>