<script type="text/javascript">

  function checkPassword(str)
  {
    var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    re1 = /^\w+$/;
    return re.test(str);
    
  }

  function checkForm(form)
  {
    if(form.fullname.value == "" || form.email.value == "") {
      alert("Error: Fill all the fields");
      form.fullname.focus();
      return false;
    }
    
    if(!re1.test(form.fullname.value) || !re.test(form.email.value)) {
      alert("Error: Invalid Name/EmailID");
      form.fullname.focus();
      return false;
    }
    
    return true;
  }

</script>


<!-- Footer Start -->
			
			<div class="footer padd">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/logo.jpg" alt="" />
									<!-- Heading -->
									<h1>Yummy Bites</h1>
								</div>
								<!-- Paragraph -->
								<p>Celebrations add joy to our life's. Make your Celebrations a little Tasteful with our Bakery Products.</p>
								<hr />
								<!-- Heading -->
								<h6>On-line Payment Clients</h6>
								<!-- Images -->
								<a href="#"><img class="payment img-responsive" src="<?php echo $this->config->base_url(); ?>img/payment/2co.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $this->config->base_url(); ?>img/payment/authorizenet.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $this->config->base_url(); ?>img/payment/discover.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $this->config->base_url(); ?>img/payment/egold.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $this->config->base_url(); ?>img/payment/mastercard.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $this->config->base_url(); ?>img/payment/paypal.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $this->config->base_url(); ?>img/payment/visa.gif" alt="" /></a>
								<a href="#"><img class="payment img-responsive" src="<?php echo $this->config->base_url(); ?>img/payment/worldpay.gif" alt="" /></a>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Famous Cakes</h4>
								<!-- Images -->
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/1.png" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/2.png" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/5.png" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/7.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/9.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/22.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/23.png" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/27.jpg" alt="" /></a>
								<a href="#"><img class="dish img-responsive" src="<?php echo $this->config->base_url(); ?>img/galary/26.jpg" alt="" /></a>
							</div> <!--/ Footer widget end -->
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Join Us Today</h4>
								<!-- Paragraph -->
								<p>Buy Sometime To Yourself!!</p>
								<!-- Subscribe form -->

<!--<?php  $error;?> -->

                <form method="POST" action="<?php echo $this->config->base_url(); ?>index.php/subscribe_control/subscribe_val" onsubmit="return checkForm(this);">
 

                          
                        <div class="form-group">
                                        <input title="Enter FullName" type="text" class="form-control" placeholder="FullName" name="fullname"/>
                                        </div>
                                         <div class="form-group">
                                    
                                        <input title="Enter EmailID" type="text" class="form-control" placeholder="EmailID" name="email"/></div>
                                     <input type="submit" value="Subscribe" class="btn btn-danger"/>
                                    </form>

                    

           

							</div> <!--/ Footer widget end -->
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h4>Contact Us</h4>
								<div class="contact-details">
									<!-- Address / Icon -->
									
									<i class="fa fa-map-marker br-red"></i> <span>7-1-392/1,<br />Balkampet main road,<br /> SR nagar colony,<br/>Hyderabad-16.</span>
									<div class="clearfix"></div>
									<!-- Contact Number / Icon -->
									<i class="fa fa-phone br-green"></i> <span>+91-9848077734<br />+91-9912235686</span>
									<div class="clearfix"></div>
									<!-- Email / Icon -->
									<i class="fa fa-envelope-o br-lblue"></i> <span><a href="#">yummybitesbakers@gmail.com</a><br/><a href="#">neeraja@yummybites.co.in</a></span>
									<div class="clearfix"></div>
								</div>
								<!-- Social media icon -->
								<div class="social">
									<a href="https://www.facebook.com/yummybites.bakers" class="facebook"><i class="fa fa-facebook"></i></a>
									<a href="https://plus.google.com/111280716048886279282/about" class="google-plus"><i class="fa fa-google-plus"></i></a>
									<a href="https://twitter.com/Yummybitesbaker" class="twitter"><i class="fa fa-twitter"></i></a>
								</div>
							</div> <!--/ Footer widget end -->
						</div>
					</div>
					<!-- Copyright -->
					<div class="footer-copyright">
						<!-- Paragraph -->
						<p>&copy; Copyright 2014 <a href="#">YummyBites</a></p>
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
						
	