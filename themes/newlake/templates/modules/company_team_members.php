<?php 

$title = get_sub_field('title');
$category_choice = get_sub_field('category_choice');
$id = get_sub_field('id');


    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
    $args = array (
    'nopaging'               => true,
    'paged'                  => $paged,
    'posts_per_page'         => 9,
    'post_type'              => 'team',
    'order'                  => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'team-category',
            'field'    => 'slug',
            'terms' => $category_choice
        )
    )
); ?>
<div class="section-standard"<?php if($id) : ?> id="<?php echo $id; ?>"<?php endif; ?>>
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
        $query->the_post();  
        $job_title = get_field('job_title');
        $linkedin_link = get_field('linkedin_link');
        $bullet_resume = get_field('bullet_resume');
        ?>
        <a href="<?php echo the_permalink(); ?>" class="benefit-flex company-person-flex">
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $image_alt = get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
            ?>
            <div class="team-image-wrap">
                <?php echo '<img class="team-image" src="';
                if($feat_image) echo $feat_image; elseif($feat_image == null) echo '/wp-content/uploads/2023/02/news-placeholder.jpg';
                echo '" alt="';
                echo $image_alt;
                echo '" />' ; ?>
                <img class="external-link" src="/wp-content/uploads/2023/02/external-link-icon.svg" />;
            </div>            
            <div class="news-info">
                <h4 class="news-title"><?php echo the_title(); ?></h4>
                <p class="news-date"><?php echo $job_title; ?></p>
                <div>
                    <?php echo $bullet_resume; ?>
                </div>
            </div>
        </a>
<?php 

    } } else {
    // no posts found
    echo '<h2>No Team Members Found</h2>';
}

// Restore original Post Data
wp_reset_postdata(); ?>

        </div>
    </div>
</div>

