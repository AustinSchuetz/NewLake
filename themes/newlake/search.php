<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package StarterTheme
 */

get_header();
?>
<?php
/**
 * The template for displaying search
*/?>
<?php get_header(); ?>
<div class="search-wrap">


<?php 
    echo '<div class="search-header"><h1 class="search-title">Search results for: ';
    echo '<form class="searchpage-box-form" role="search" method="get" action="/">';
    echo '<input type="search" class="searchpage-box" value="';
    echo get_search_query();
    echo '" name="s" title="Search" />';
    echo '<button class="cta-btn search-btn" type="submit">Search</button>';    
    echo  '</form></h1></div>';
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		
       get_template_part('template-parts/content', 'search');
        
	
    }  // end while
} // end if
        else {
            echo "<h2 style='margin-top: 30px;padding:25px;color:#4a4a4a;text-align:center;'>Sorry, we didn't recognize your search term.</h2>";
     }
?>

</div>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
