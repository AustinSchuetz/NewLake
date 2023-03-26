<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StarterTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="section-standard blank-hero">
        <div class="team-member-text-content">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

	<div class="entry-content page-wrap section-standard">
        <div class="inner">
            <?php
            the_content();
            ?>
        </div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
<div class="section-standard section-standard-extra-padding prefooter">
</div>
