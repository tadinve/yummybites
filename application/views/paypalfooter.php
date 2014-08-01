


					<!-- Copyright -->
					<div class="footer-copyright">
						<!-- Paragraph -->
						<br>
						<br>
						<center><p>&copy; Copyright 2014 <a href="#">YummyBites</a></p></center>
					</div>
				</div>
			</div>
			
			<!-- Footer End -->
			
		
		</div> <!-- wrapper end -->
		
		
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
		
		
			<!-- Javascript files -->
		 <script src="<?php echo $this->config->base_url(); ?>assets/js/jquery.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo $this->config->base_url(); ?>assets/js/bootstrap.min.js"></script>
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>assets/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>
        <!-- FLEX SLIDER SCRIPTS  -->
        <script defer src="<?php echo $this->config->base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
        <!-- Pretty Photo JS -->
        <script src="<?php echo $this->config->base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
        <!-- Respond JS for IE8 -->
        <script src="<?php echo $this->config->base_url(); ?>assets/js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="<?php echo $this->config->base_url(); ?>assets/js/html5shiv.js"></script>
        <!-- Custom JS -->
        <script src="<?php echo $this->config->base_url(); ?>assets/js/custom.js"></script>
        <!-- JS code for this page -->
        <script>
        /* ******************************************** */
        /*  JS for SLIDER REVOLUTION  */
        /* ******************************************** */
                jQuery(document).ready(function() {
                       jQuery('.tp-banner').revolution(
                        {
                            delay:9000,
                            startheight:500,
                            
                            hideThumbs:10,
                            
                            navigationType:"bullet",    
                                                        
                            hideArrowsOnMobile:"on",
                            
                            touchenabled:"on",
                            onHoverStop:"on",
                            
                            navOffsetHorizontal:0,
                            navOffsetVertical:20,
                            
                            stopAtSlide:-1,
                            stopAfterLoops:-1,

                            shadow:0,
                            
                            fullWidth:"on",
                            fullScreen:"off"
                        });
                });
        /* ******************************************** */
        /*  JS for FlexSlider  */
        /* ******************************************** */
        
            $(window).load(function(){
                $('.flexslider-recent').flexslider({
                    animation:      "fade",
                    animationSpeed: 1000,
                    controlNav:     true,
                    directionNav:   false
                });
                $('.flexslider-testimonial').flexslider({
                    animation:      "fade",
                    slideshowSpeed: 5000,
                    animationSpeed: 1000,
                    controlNav:     true,
                    directionNav:   false
                });
            });
        
        /* Gallery */

        jQuery(".gallery-img-link").prettyPhoto({
           overlay_gallery: false, social_tools: false
        });
        
        </script>
</body> 
</html>
						
	