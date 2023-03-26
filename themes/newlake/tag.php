<?php get_header(); ?>



<div class="category-wrap">
    <div class="category-hero">
        <div class="text-content">
            <h1 class="uppercase"><?php single_tag_title( __( 'Tag: ', 'textdomain' ) ); ?>
            </h1>
            <div class="divider"></div>
            <h2>A subtitle for the tag page, specific or not specific</h2>
        </div>
    </div>

<div class="blog-wrap">
<?php $current_tag = get_queried_object()->slug;
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
        $args = array (
        'nopaging'               => false,
        'paged'                  => $paged,
        'posts_per_page'         => '9',
        'post_type'              => array('any'),
            'tag' => $current_tag
    );
    
    
    // The Query
    $query = new WP_Query( $args );     
            
            
    // The Loop
    if ( $query->have_posts() ) {



        while ( $query->have_posts() ) {
            $query->the_post();
            echo '<div class="blog-item">';
            echo '<a class="blog-link" href="';
            echo the_permalink(). '">';
            echo '<div style="background: url(';
            echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full")[0];
            echo ')  50% 50% no-repeat; background-size: cover;width:100%;height:150px;"></div>';     
            echo '<div class="blog-item-text">';    
            echo '<div>';
            echo '<h5>';
            echo the_title(). '</h5>';
            echo '<p>';     
            echo the_excerpt();
            echo '</p>';  
            echo '</div>';
            echo '<div class="date">';
            echo get_the_date();
            echo '</div>';         
            echo '</div>';   
            echo '</a>';
            echo '</div>'; 
        }  
    } else {
        // no posts found
        echo '<h1 class="page-title">No Posts Found</h1>';
    } 
    ?>
    <?php 
    previous_posts_link( '« Newer Entries' );

    next_posts_link( 'Older Entries »', $query->max_num_pages );
    ?>      
    
</div>
        
</div>
<?php get_footer(); ?>