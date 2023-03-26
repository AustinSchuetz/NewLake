<?php
/*
Template Name: Contact Us
*/

get_header();
?>

    <div id="primary" class="content-area">
        <div class="hero hero-overflow">
            <div class="text-content">
                <h1>Let’s Connect and Talk Demand</h1>
                <h5>Do you have questions, programs or needs that you’re working on?</h5>
            </div>
            <div class="image-holder">
                <img class="animonItem" data-effect="fadeInRight" src="/wp-content/themes/newlake/assets/Contact-Hero.png" alt="Account Media Let's Talk"/>
            </div>
        </div>
        <div class="section-standard">
            <div class="inner">
                <h5 class="center">Identify your focus area and drop us an email with specific questions and inquiries.</h5>
            </div>
        </div>

        <div class="section-standard">
            <div class="multiple-wide-flex multiple-wide-flex-logo">
                <div class="flex-five-image text-content">
                    <div class="line-break"></div>
                    <h3>Customer Service</h3>
                    <div class="btn-holder">
                        <a href="mailto:customerservice@newlake.com" class="cta-btn">Connect</a>
                    </div>
                </div>
                <div class="flex-five-image text-content">
                    <div class="line-break"></div>
                    <h3>Demand Consultations and Sales</h3>
                    <div class="btn-holder">
                        <a href="mailto:sales@newlake.com" class="cta-btn">Connect</a>
                    </div>
                </div>
                <div class="flex-five-image text-content">
                    <div class="line-break"></div>
                    <h3>Careers and Opportunities</h3>
                    <div class="btn-holder">
                        <a href="mailto:careers@newlake.com" class="cta-btn">Connect</a>
                    </div>
                </div>
                <div class="flex-five-image text-content">
                    <div class="line-break"></div>
                    <h3>Data Protection and Compliance</h3>
                    <div class="btn-holder">
                        <a href="mailto:dataprotection@newlake.com" class="cta-btn">Connect</a>
                    </div>
                </div>
                <div class="flex-five-image text-content">
                    <div class="line-break"></div>
                    <h3>General Enquiries</h3>
                    <div class="btn-holder">
                        <a href="mailto:enquiries@newlake.com" class="cta-btn">Connect</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="demand-delivery-flex-bg">
            <div class="section-standard section-flex demand-flex">
                <div class="left">
                    <div class="text-content">
                        <div class="line-break"></div>
                        <h2>Global Reach</h2>
                        <p><strong>Headquarters:</strong><br>74 Great Suffolk Street, London, SE1 7SJ<br>T (+44) 208 087 325</p>
                    </div>
                </div>
            </div>
            <div>
                <img class="mid-width-image" src="/wp-content/themes/newlake/assets/Global-Reach.png" alt="Global Reach office locations" />
            </div>
        </div>


    </div><!-- #primary -->
    <script>
    $('.testimonials-wrap').slick({
        infinite: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 7000,
        nextArrow: '<img class="quote-chevron quote-chevron-left" src="/wp-content/themes/newlake/assets/chevron-left.png" />',
        prevArrow: '<img class="quote-chevron quote-chevron-right" src="/wp-content/themes/newlake/assets/chevron-right.png" />'
    });
    </script>

<?php
get_footer();
