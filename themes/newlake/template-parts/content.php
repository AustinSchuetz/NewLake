<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StarterTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom:0;">
		<?php

		if ( 'post' === get_post_type() ) :
			?>    
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
            <div class="single-hero" style="background: url(<?php echo $src[0]; ?>) 50% 50% no-repeat;background-size:cover;">
                <div class="single-hero-text">
                    <h6 class="uppercase"><?php the_date(); ?></h6>
                    <div class="divider"></div>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
		<?php endif; ?>


	<div class="entry-content single-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'newlake' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
        
		?>
        
        <div class="blog-share-holder">
                        <h5>Share on:</h5>
                        <a target="_blank" class="fab fa-facebook-f" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"></a>
                        <a target="_blank" class="fab fa-twitter" href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>%20%40CompanyTwitter"></a>           
                    </div>      
                    <div style="margin:0 auto;text-align:center;">
                        <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                        <script type="IN/Share" data-url="<?php the_permalink(); ?>"></script>
                    </div>
                    
                    <div class="more-blogs">
                        <h4>More Blogs</h4>
                        <div class="blog-nav-holder">
                            <div class="prev-next-nav"><?php next_post_link('<span class="fa fa-chevron-left"></span> %link') ?></div>
                            <div class="prev-next-nav"><?php previous_post_link('%link <span class="fa fa-chevron-right"></span>') ?></div>
                        </div>
                    </div>
        
        
        
        
        
        
        
        
        
        
        
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
