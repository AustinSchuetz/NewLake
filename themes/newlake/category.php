<?php get_header(); ?>



<div class="category-wrap">
    <div class="category-hero">
        <div class="text-content">
            <h1 class="uppercase"><?php
foreach((get_the_category()) as $category) {
echo $category->cat_name . ' ';
}
?></h1>
            <div class="divider"></div>
            <h2>A subtitle for the category, specific or not specific</h2>
        </div>
    </div>


<?php query_posts( 'posts_per_page=9' ); ?>
<!--Need to change to category specific content if multiple categories-->
<div class="blog-wrap">
<?php $postslist = get_posts('numberposts=9');
 foreach ($postslist as $post) :
    setup_postdata($post); ?>
        <?php
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
        ?>
    



<?php endforeach ?>      
    <?php 
    previous_posts_link( '« Newer Entries' );

    next_posts_link( 'Older Entries »', $query->max_num_pages );
    ?>      
    
</div>
        
</div>
<?php get_footer(); ?>