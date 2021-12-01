<?php
/**
 * Template Name: Thankyou
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

    <section class="section-office-hours section-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 offset-md-1 mb-5">
                    <h3 class="mb-4">Office</h3>
                    <p><a href="https://www.google.com/maps/place/First+Page+-+%231+%F0%9F%8F%85Digital+Marketing+%26+SEO+Agency/@-37.8285184,144.997028,15z/data=!4m5!3m4!1s0x0:0xd19eee9ef63d8720!8m2!3d-37.8285485!4d144.99728" title="The SEO Agency Melbourne - Lv 6, 534 Church Street,
Richmond Melbourne VIC 3121">{{ site_address }}</a></p>
                    <p>
                        <strong>Phone</strong><br />
                        <a href="tel:{{ site_phone|replace({' ':''}) }}">{{ site_phone }}</a>
                    </p>
                    <p>
                        <strong>Email</strong><br />
                        <a href="mailto:{{ site_email }}" class="blue">{{ site_email }}</a>
                    </p>
                </div>

                <div class="col-12 col-md-5 mb-5">
                    <h3 class="mb-4">Hours of Operation</h3>
                    <table class="table">
                        <tr>
                            <th scope="row">Monday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Tuesday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Wednesday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Thursday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Friday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <div id="office-map"></div>
    <script>var map_location = JSON.parse('<?php echo $map_location; ?>')</script>
    <script src="/js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3&key={{ map_api_key }}&callback=initMap"></script>

    <section class="section-worldwide-locations section-white">
        <div class="container">
            <h3>Worldwide Locations</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Singapore</h5>
                        <p>
                            120 Robinson Rd,<br>
                            #05-01<br>
                            Singapore 068913
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Hong Kong</h5>
                        <p>
                            Room 3503-07, 35/F, Wu Chung House,<br>
                            213 Queen’s Road East,<br>
                            Wan Chai, Hong Kong
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Thailand</h5>
                        <p>
                            8 T One Building, Floor 21, Office 2,<br>
                            Sukhumvit 40 Alley,<br>
                            Phra Khanong, Khlong Toei,<br>
                            Bangkok 10110, Thailand
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Dubai</h5>
                        <p>
                            2202/2203,<br>
                            JBC1, Cluster G,<br>
                            JLT, Dubai.<br>
                            United Arab Emirates
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Abu Dhabi</h5>
                        <p>
                            902B, Two Four 54 Building 6,<br>
                            Sheikh Zayed Street,<br>
                            Abu Dhabi,<br>
                            United Arab Emirates
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Malaysia</h5>
                        <p>
                            A-03-13 Tropicana Avenue,<br>
                            NO 12 Persiaran Tropicana<br>
                            Tropicana Golf &amp; Country Resort PJU3<br>
                            47410 Petaling Jaya, Selangor,<br>
                            Malaysia
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Panama</h5>
                        <p>
                            Calle 12 Este, Casco Viejo,<br>
                            Panama City, Panama
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Brazil</h5>
                        <p>
                            Selina Vila Madalena,<br>
                            São Paulo
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5>Australia</h5>
                        <p>
                            Level 6, 534 Church Street<br>
                            Cremorne 3121<br>
                            Victoria, Australia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="site__content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
        <?php endwhile; ?>

    </section>
   
    <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: "thankyoupageforads",
            eventCategory: "Form Submission",
            eventAction: "Free Proposal Form Thank You Page",
            eventLabel: "Submitted",
        });
    </script>

    
<?php get_footer(); ?>