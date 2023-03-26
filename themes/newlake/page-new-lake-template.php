<?php
/*
Template Name: New Lake Template
Template Post Type: page
*/

get_header();
?>

<div id="primary" class="content-area">
<?php

if( have_rows('template') ):

    while ( have_rows('template') ) : the_row();

        get_template_part( 'templates/modules/' . get_row_layout() . '', 'none' );

    endwhile;

endif;
?>
</div>

<?php

get_footer();