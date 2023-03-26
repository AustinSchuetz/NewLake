<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterTheme
 */

?>

	</div><!-- #content -->

	<footer>
        <img class="wave" src="/wp-content/themes/newlake/assets/Wave-Darkblue.png" alt="Wave decorative" />
        <div class="footer-bg">
            <div class="footer-wrapper">
                <div class="top-footer">
                    <div class="footer-left">
                        <a href="/">
                            <img class="main-logo" src="/wp-content/themes/newlake/assets/Logo-White.svg" alt="New Lake Logo">
                        </a>
                        <div class="sub-footer">
                            <p>Ticker: NLCP</p>
                            <p>50 Locust Avenue<br>New Canaan, CT 06840</p>
                            <p>Main Office: (203) 594-1402<br>Email: <a href="mailto:info@newlake.com">info@newlake.com</a></p>
                            <p>© Copyright <script type="text/javascript">
                                    document.write(new Date().getFullYear());
                                    </script> NewLake Capital Partners, Inc.</p>
                        </div>
                    </div>
                    <div class="footer-content">
                        <div class="footer-item">
                            <?php wp_nav_menu( array(

                                    'container' => false,  // remove nav container
                                    'container_class' => 'footer-item',// class of container (should you choose to use it)
                                    'menu' => __( 'Demand Solutions Footer', 'newlake' ),    // nav name
                                    'menu_class' => '',  // adding custom nav classes
                                )
                            ); ?>
                        </div>        
                        <div class="footer-item">
                            <ul>
                                <li><a href="https://twitter.com/NewLakeCapital" target="_blank">Twitter</a></li>
                                <li><a href="https://www.linkedin.com/company/newlake/" target="_blank">LinkedIn</a></li>
                            </ul>
                        </div>   
                        <div class="footer-item">
                            <ul>
                                <li><a href="/privacy-policy/">Privacy Policy</a></li>
                                <li><a href="/terms-and-conditions/">Terms and Conditions</a></li>
                            </ul>
                        </div>            
                    </div>
                </div>
            </div>            
        </div>
    </footer>
        
        
<script>
    $(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
        $('.main-nav').toggleClass('menu-open');
        $('body').toggleClass('mobile-opened');
	});
});
$(function() {
    $(document).on('click', '.request-quote-btn', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('.sticky-header').addClass('sticky-header-locked');
    } else {
        $('.sticky-header').removeClass('sticky-header-locked');
    }
});
    $(document).ready(function(){
    if ($(this).scrollTop()) {
        $('.sticky-header').addClass('sticky-header-locked');
    } else {
        $('.sticky-header').removeClass('sticky-header-locked');
    }
});

// hover onload so menu isn't buggy
$(document).ready(function(){
    $(".main-nav-item").addClass("main-nav-item-ready");
});    

    
    
    
$(document).ready(function(){
  if ($(window).width() <= 850) {
    $(".left-nav .main-nav-item > a").addClass("mobile-top-level");
    $(".inner-nav").addClass("mobile-second-level-ul");
      
    $(".main-nav-item").removeClass("main-nav-item-ready");
    $(".main-nav-item-ready").removeClass("main-nav-item-hovered");    
    $(".mobile-second-level-ul").hide();

$('.mobile-top-level').click(function(){
     $(this).next(".mobile-second-level-ul").slideToggle(200);    
});
  } else {
    $(".main-nav-item-ready").hover(function(){
        $(this).toggleClass("main-nav-item-hovered");  //Toggle the active class to the area is hovered
    });
  }
});    

    
var mql = window.matchMedia('(max-width: 850px)');    
    
function screenTest(e) {
  if (e.matches) {
    $(".left-nav .main-nav-item > a").addClass("mobile-top-level");
    $(".inner-nav").addClass("mobile-second-level-ul");
    $(".main-nav-item").removeClass("main-nav-item-ready");
    $(".mobile-second-level-ul").hide();

$('.mobile-top-level').click(function(){
     $(this).next(".mobile-second-level-ul").slideToggle(200);    
});
    
  } else {     
      
		$('#nav-icon').removeClass('open');
        $('.main-nav').removeClass('menu-open');
        $('body').removeClass('mobile-opened');
      
    $('.mobile-second-level-ul').show();
    $(".main-nav-item").addClass("main-nav-item-ready");  
    $(".left-nav").removeClass("mobile-top-level");
    $(".inner-nav ul").removeClass("mobile-second-level-ul");
    $(".main-nav-item-ready").hover(function(){
        $(this).toggleClass("main-nav-item-hovered");  //Toggle the active class to the area is hovered
    });
  }
}

mql.addListener(screenTest);




</script>






<?php wp_footer(); ?>
<script type="text/javascript" src="https://unpkg.com/animon/dist/animon.iife.js"></script>
<script type="text/javascript">
    Animon.animon();
</script>
</div><!-- #page -->

</body>
</html>
