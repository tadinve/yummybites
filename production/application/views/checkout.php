
			<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Checkout</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/home">Home</a></li>
						<li><a href="<?php echo $this->config->base_url(); ?>index.php/upload/img_display">Shopping</a></li>
						<li class="active">Checkout</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Checkout Start -->
				
				<div class="checkout">
					<div class="container">
					<!-- Heading -->
					<h4>Shipping & Billing Details</h4>
						<div class="row">
							<div class="col-md-7 col-sm-6">
								<!-- Checkout Form -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputName" class="col-md-2 control-label">Name</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="inputName" placeholder="Name">
										</div>
									</div>            
									<div class="form-group">
										<label for="inputEmail1" class="col-md-2 control-label">Email</label>
										<div class="col-md-8">
											<input type="email" class="form-control" id="inputEmail1" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-md-2 control-label">Phone</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="inputPhone" placeholder="Phone">
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-md-2 control-label">Country</label>
										<div class="col-md-8">
											<select class="form-control" id="inputCountry">
												<option>Select Country</option>
												<option>USA</option>
												<option>India</option>
												<option>Canada</option>
												<option>UK</option>
											</select>
										</div>
									</div>              
									<div class="form-group">
										<label for="inputAddress" class="col-md-2 control-label">Address</label>
										<div class="col-md-8">
											<textarea class="form-control" id="inputAddress" rows="3" placeholder="Address"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="inputZip" class="col-md-2 control-label">Zip Code</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="inputZip" placeholder="Zip Code">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-8">
											<div class="checkbox">
												<label>
													<input type="checkbox"> Accept Terms & Conditions
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-8">
											<button type="submit" class="btn btn-danger btn-sm">Confirm Order</button>&nbsp;
											<button type="reset" class="btn btn-default btn-sm">Reset</button>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-5 col-sm-6">
								<!-- Checkout sidebar items -->
								<div class="sidebar-item">
									<!-- Heading -->
									<h5 class="pull-left">Door Delivery</h5>
									<!-- Sidebar content icon -->
									<i class="fa fa-truck br-green pull-right"></i>
									<div class="clearfix"></div>
									<!-- Sidebar Paragraph -->
									<p>We also have service to deliver the product to our customers on request sometimes.</p>
								</div>
								<!-- Checkout sidebar items -->
								<div class="sidebar-item">
									<!-- Heading -->
									<h5 class="pull-left">Complain / Support</h5>
									<!-- Sidebar content icon -->
									<i class="fa fa-headphones br-red pull-right"></i>
									<div class="clearfix"></div>
									<!-- Sidebar Paragraph -->
									<p>You can share your complaints and compliments by subscribing.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Checkout End -->
			
