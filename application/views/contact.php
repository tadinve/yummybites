<script type="text/javascript">

  function checkPassword(str)
  {
    var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    re1 = /^\w+$/;
    return re.test(str);
    
  }

  function checkForm(form)
  {
    if(form.fullname.value == "" || form.email.value == "" || form.message.value == "") {
      alert("Error: Fill all the fields");
      form.fullname.focus();
      return false;
    }
    
    if(!re1.test(form.fullname.value) || !re.test(form.email.value) || !re.test(form.message.value)) {
      alert("Error: Invalid Name/EmailID/Empty Message");
      form.fullname.focus();
      return false;
    }
    
    return true;
  }

</script>
			
			<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Contact Us</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/home">Home</a></li>
						<li class="active">Contact</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Contact Us Start -->
				
				<div class="contactus">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<!-- Contact Us content -->
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<!-- Contact content details -->
										<div class="contact-details">
											<!-- Heading -->
											<h4>Location</h4><!-- Address / Icon -->
												<i class="fa fa-map-marker br-red"></i> <span>7-1-392/1,<br />Balkampet main road,<br /> SR nagar colony,<br/>Hyderabad-16.</span>											
												<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<!-- Contact content details -->
										<div class="contact-details">
											<!-- Heading -->
											<h4>On-line Order</h4>
											<!-- Contact Number / Icon -->
									<i class="fa fa-phone br-green"></i> <span>+91 9848077734<br>+91 9912235686</span>
											<div class="clearfix"></div>
											<!-- Email / Icon -->
										<i class="fa fa-envelope-o br-lblue"></i> <span><a href="#">yummybitesbakers@gmail.com</a><br/><a href="#">neeraja@yummybites.co.in</a></span>											
										<div class="clearfix"></div>
										</div>
									</div>
								</div><!--/ Inner row end -->
								<!-- Contact form -->
								<div class="contact-form">
									<!-- Heading -->
									<h3>Contact Form</h3>
									<!-- Form -->
                <form method="POST" action="<?php echo $this->config->base_url(); ?>index.php/contact_control/contact_val" onsubmit="return checkForm(this);">
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="text" name="fullname" placeholder="Name" />
										</div>
										<div class="form-group">
											<!-- Form input -->
											<input class="form-control" type="email" name="email" placeholder="Email" />
										</div>
										<div class="form-group">
											<!-- Form text area -->
											<textarea class="form-control" rows="3" name="message" placeholder="Message..."></textarea>
										</div>
										<!-- Form button -->
										<button class="btn btn-danger btn-sm" type="submit">Send</button>&nbsp;
										<button class="btn btn-default btn-sm" type="reset">Reset</button>
									</form>
								</div><!--/ Contact form end -->
							</div>
							<div class="col-md-6">
								<!-- Map holder -->
								<div class="map-container">
									<!-- Google Map -->
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.341783161095!2d78.44852800000004!3d17.443347999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90c134a3fc35%3A0x6cc003961e4ad4fd!2sYummy+Bites!5e0!3m2!1sen!2sin!4v1405071414226" width="600" height="450" frameborder="0" style="border:0"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Contact Us End -->
			