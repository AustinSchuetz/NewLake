<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StarterTheme
 */

$linkedin = get_field('linkedin_link');
$job_title = get_field('job_title');
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$image_alt = get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom:0;">
    <div class="section-standard blank-hero">
        
    <?php if ( has_term( 'management-team', 'team-category' ) ) { ?>
        <a class="news-date uppercase return-team" href="/who-we-are/#team">< Return to Team</a>
<?php } elseif ( has_term( 'board-of-directors', 'team-category' ) ) { ?>
        <a class="news-date uppercase return-team" href="/who-we-are/#board">< Return to Team</a>
<?php } ?>
        <div class="section-flex team-member-flex">
            <div class="team-member-text-content">
                <h1><?php the_title(); ?></h1>
                <p class="news-date"><?php echo $job_title; ?></p>
                <?php if($linkedin) : ?><a class="linkedin-logo" href="<?php echo $linkedin; ?>" target="_blank"><img src="/wp-content/uploads/2023/02/LinkedIn-Logo.svg" alt="LinkedIn Logo" /></a><?php endif; ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="team-member-ripple-wrap">
                <?php echo '<img class="team-image" src="';
                if($feat_image) echo $feat_image; elseif($feat_image == null) echo '/wp-content/uploads/2023/02/news-placeholder.jpg';
                echo '" alt="';
                echo $image_alt;
                echo '" />' ; ?>
                <img src="/wp-content/uploads/2023/02/team-ripple.png" class="team-ripple-bg" />
            </div>
        </div>
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
<div class="section-standard section-standard-extra-padding prefooter">
    <div class="standard-box">
        <h2 class="center">Balancing the Diversity and Longevity of a REIT with the High Growth of U.S. Cannabis</h2>
                <div class="btn-holder btn-holder-center btn-holder-connect">
            <a href="/contact/" class="cta-btn cta-btn-alt">Let's Connect</a>
        </div>
    </div>
</div>