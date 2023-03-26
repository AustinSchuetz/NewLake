<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php wp_title( '|', true, 'right' ); ?></title>



    <link rel="icon" type="image/png" href="/wp-content/themes/newlake/assets/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preload" href="/wp-content/themes/newlake/assets/fonts/FreightDispProLight-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/wp-content/themes/newlake/assets/fonts/FreightDispProMedium-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/wp-content/themes/newlake/assets/fonts/FreightDispProBold-Regular.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="<?php get_site_url(); ?>/wp-content/themes/newlake/styles/basic.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3fca15e1a8.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->    
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-N7ZXCWJ"></script>
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N7ZXCWJ');
    </script>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<header id="header">
        <div class="sticky-header">
            <div class="header-frame">
                <a href="/">
                    <img class="main-logo" src="/wp-content/themes/newlake/assets/Logo.svg" alt="New Lake Logo">
                </a>
                <div class="main-nav">
                    <?php wp_nav_menu( array(

                            'container' => false,  // remove nav container
                            'container_class' => 'main-nav',// class of container (should you choose to use it)
                            'menu' => __( 'newlake' ),    // nav name
                            'menu_class' => 'left-nav',  // adding custom nav classes
                            'theme_location' => 'main-nav',                 // where it's located in the theme
                            'add_li_class'  => 'main-nav-item',
                        )
                    ); ?>
                    <div class="stock-symbol-menu"><p>Ticker: NLCP</p></div>





                </div>
                <div class="mobile-menu-btn-holder">
                    <div id="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div id="content" class="site-content">
