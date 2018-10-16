<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


            <?php if ( !is_front_page()) : ?>
                </div>
            <?php endif; ?>
<!-- FOOTER -->
            <footer id="footer" style="background-image:url('<?php echo get_template_directory_uri() ;?>/assets/images/backgrounds/purple.jpg');">
                <div class="container">

                    <div class="row">

                        <div class="col-md-8">

                            <!-- Footer Logo -->
                            <img class="footer-logo footer-2" src="<?php echo get_template_directory_uri() ;?>/assets/images/logo-footer.png" alt="" />

                            <!-- Small Description -->
                            <p>Wellness is not a luxury, it’s a necessity</p>

                            <hr />

                            <div class="row">
                                <div class="col-md-6 col-sm-6">

                                    <!-- Newsletter Form -->
                                    <p class="mb-10">Subscribe to Our <strong>Newsletter</strong></p>

                                    <form method="post" action="<?php echo get_home_url() ?>?na=s" onsubmit="return newsletter_check(this)">
                                    <div class="input-group">
                                            <span class="input-group-addon" style="width:50px"><i class="fa fa-user"></i></span>
                                            <input type="text" id="nameTextBox" name="nn" class="form-control" placeholder="Enter your Name" required="required">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:50px"><i class="fa fa-envelope"></i></span>
                                            <input type="email" id="emailTextBox" name="ne" class="form-control" placeholder="Enter your Email" required="required">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width:50px"><i class="fa fa-map-marker"></i></span>
                                            <input type="textaddressTextBox" id="email" name="np1" class="form-control" placeholder="Enter your Address" required="required">
                                        </div> 
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Subscribe</button>                                       
                                    </form>
                                    <!-- /Newsletter Form -->
                                </div>

                                <div class="col-md-6 col-sm-6 hidden-xs-down">

                                    <!-- Social Icons -->
                                    <div class="ml-50 clearfix">

                                        <p class="mb-10">Follow Us</p>
                                        <a href="https://www.facebook.com/cocoonspaamberspringshotel/" class="social-icon social-icon-sm social-icon-transparent social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <!--
                                        <a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        -->
                                        <a href="https://www.instagram.com/cocoonspa_/?hl=en" class="social-icon social-icon-sm social-icon-transparent social-instagram float-left" data-toggle="tooltip" data-placement="top" title="Instagram" target="_blank">
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>

                                    </div>
                                    <!-- /Social Icons -->
                                    <!-- Hotel Logos -->
                                    <div class="mt-20">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <a href="http://www.ambersprings.ie/" target="_blank">
                                                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logos/amber-springs.png" class="img-fluid" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /  Hotel Logos -->                                    
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">
                            <h4 class="letter-spacing-1">OPENING HOURS</h4>

                            Mon – Tues 9am to 6pm<br />
                            Wed - Thurs 9am to 9pm<br />
                            Friday - 9am to 7pm<br />
                            Saturday - 10am to 7pm<br />
                            Sunday - 10am to 6pm<br />

                        </div>

                    </div>

                </div>

                <div class="copyright" style="background-image:url('<?php echo get_template_directory_uri() ;?>/assets/images/backgrounds/purple.jpg');">
                    <div class="container">
                        <ul class="float-right m-0 list-inline mobile-block">
                            <li><a href="https://cocoonspa.ie/privacy-policy/">Privacy</a></li>
                        </ul>
                        &copy; All Rights Reserved, Cocoon Spa &amp; Wellness<br />
                        Website by <a href="https://www.clearsoft.ie" target="_blank">ClearSoft</a>
                    </div>
                </div>
            </footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


        <script>
        function initMap() {
            var uluru = { lat: 52.66815, lng: -6.290622 };
            var map = new google.maps.Map(document.getElementById('map2'), {
                zoom: 12,
                center: uluru,
                scrollwheel: false
            });

            var contentString = '<div id="content">' +
                '<div id="siteNotice">' +
                '</div>' +
                '<strong>Cocoon Spa & Wellness</strong><br/>' +
                'Amber Springs Hotel<br/>' +
                'Wexford Road<br/>' +
                'Knockmullen<br/>' +
                'Gorey<br/>' +
                'Co.Wexford<br/>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                title: 'Cocoon Spa & Wellness'
            });

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArD9J6nci2T70ycnSgL2BklRFB6kNHpNM&callback=initMap">
    </script>


		<!-- JAVASCRIPT FILES -->
		<script>var plugin_path = "<?php echo get_template_directory_uri() ;?>/assets/plugins/";</script>
		<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/jquery/jquery-3.3.1.min.js"></script>

		<!-- SCRIPTS -->
		<script src="<?php echo get_template_directory_uri() ;?>/assets/js/scripts.js"></script>
        <script src="<?php echo get_template_directory_uri() ;?>/assets/js/custom.js"></script>
        <script src="<?php echo get_template_directory_uri() ;?>/assets/js/contact.js"></script>

        <?php wp_footer(); ?>
	</body>
</html>