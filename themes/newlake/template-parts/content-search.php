<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StarterTheme
 */

?>

<article id="post-<?php the_ID(); ?>" class="search-result" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">      
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
        <?php if($src[0]): ?>
            <div class="search-thumbnail" style="background: url(<?php echo $src[0]; ?>) 50% 50% no-repeat;background-size:cover;"></div>
        <?php else: ?>
        <?php endif; ?>
        
        
        <div class="search-result-content">            
            <h2 class="entry-title"><?php the_title(); ?></h2>  


            
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
            
            <div class="tag-search-result">
                    <?php if(has_tag()) {
                        $tags = get_tags();
                        echo '<p>Tags: </p>';

                        foreach($tags as $tag) {
                            echo '<a class="tag-link" href="';
                            echo the_permalink();
                            echo '">';
                            echo $tag->name;
                            echo '</a>';
                       }
                    } ?>
            </div>
        </div>
    </a>
</article>





