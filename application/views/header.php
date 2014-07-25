<!DOCTYPE html>
<html dir="ltr" lang="en"> <!-- dir is direction and en is the font style i.e itallic !-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, user-scalable=no"> <!-- inline pagedesigning for mobile,tab and desktop compatibility !-->
	<title>
		Yummy Bites - Order Online Cakes, Eggless Cakes, Pastries, Bread, Cookies, Sweets. Free Delivery
	</title>
		<meta name="description" content="Yummy Bakery online store offers you a great variety of products like Cakes,Eggless Cakes,Pastries,Savories,Cookies,Sweets.">
		<meta name="keywords" content="yummy, bakery, cakes">
		<meta name="author" content="ResponsiveWebInc">
		

		<!-- Styles -->
        <!-- Bootstrap CSS -->
        <?php //echo $this->config->base_url(); ?>
        <link href="<?php echo $this->config->base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link href="<?php echo $this->config->base_url(); ?>assets/css/settings.css" rel="stylesheet">     
        <!-- FlexSlider Css -->
        <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>assets/css/flexslider.css" media="screen" />
        <!-- Portfolio CSS -->
        <link href="<?php echo $this->config->base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="<?php echo $this->config->base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet"> 
        <!-- Custom Less -->
        <link href="<?php echo $this->config->base_url(); ?>assets/css/less-style.css" rel="stylesheet">   
        <!-- Custom CSS -->
        <link href="<?php echo $this->config->base_url(); ?>assets/css/style.css" rel="stylesheet">
        <!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		<!-- Favicon -->

		<link rel="shortcut icon" href="#">
	</head>
	<!-- Shopping cart Modal -->
		<div class="modal fade pull-right" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Shopping Cart</h4>
					</div>
					<div class="modal-body">
						<!-- Items table -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Quantity</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#">Exception Reins Evocative</a></td>
									<td>2</td>
									<td>$200</td>
								</tr>
								<tr>
									<td><a href="#">Taut Mayoress Alias Appendicitis</a></td>
									<td>1</td>
									<td>$190</td>
								</tr>
								<tr>
									<td><a href="#">Sinter et Molests Perfectionist</a></td>
									<td>4</td>
									<td>$99</td>
								</tr>
								<tr>
									<th></th>
									<th>Total</th>
									<th>$489</th>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
						<button type="button" class="btn btn-info">Checkout</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- Model End -->
	
		<!-- Page Wrapper -->
		<div class="wrapper">
			
			<!-- Header Start -->
			
			<div class="header">
				<div class="container">
					<!-- Header top area content -->
					<div class="header-top">
											<div class="row cart">
							
							<div class="col-md-4 col-sm-5 pull-right">
								<!-- Button Kart -->
								<div class="btn-cart-md">
									<a class="cart-link" href="#">
										<!-- Image -->
										<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/cart.png" alt="" />
										<!-- Heading -->
										<h4>Shopping Cart</h4>
										
										<div class="clearfix"></dbtn-cartiv>
									</a>
									<ul class="cart-dropdown" role="menu">
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="<?php echo $this->config->base_url(); ?>img/nav-menu/nav1.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Exception Reins Evocative</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$200/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="<?php echo $this->config->base_url(); ?>img/nav-menu/nav2.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Taut Mayoress Alias Appendicitis</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$190/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<!-- Item remove icon -->
												<a href="#"><i class="fa fa-times"></i></a>
												<!-- Image -->
												<img class="img-responsive img-rounded" src="<?php echo $this->config->base_url(); ?>img/nav-menu/nav3.jpg" alt="" />
												<!-- Title for purchase item -->
												<span class="cart-title"><a href="#">Sinter et Molests Perfectionist</a></span>
												<!-- Cart item price -->
												<span class="cart-price pull-right red">$99/-</span>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Cart items for shopping list -->
											<div class="cart-item">
												<a class="btn btn-danger" data-toggle="modal" href="#shoppingcart1">Checkout</a>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
						
							<!-- Link -->
							<a href="<?php echo $this->config->base_url(); ?>index.php/welcome/home">
								<!-- Logo area -->
								<div class="logo">
									<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/lo.png" alt="" />
									
									
								</div>
							</a>
						</div>
							<div class="col-md-8 col-sm-7">
							<!-- Navigation -->
							<nav class="navbar navbar-default navbar-right" role="navigation">
								<div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse pull-left" id="bs-example-navbar-collapse-1">

										<ul class="nav navbar-nav">
											<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/home"><img src="<?php echo $this->config->base_url(); ?>img/nav-menu/nav1.jpg" class="img-responsive" alt="" /> Home</a></li>
											<li class="dropdown">
												<a href="<?php echo $this->config->base_url(); ?>index.php/welcome/menu" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $this->config->base_url(); ?>img/nav-menu/nav4.jpg" class="img-responsive" alt="" /> Menu <b class="caret"></b></a>
												<ul class="dropdown-menu dropdown-md">
													<li>
														<div class="row">
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Flower Bouquet Cakes</h5>
																	<!-- Image -->
																	<img width="150px" height="50px" src="<?php echo $this->config->base_url(); ?>img/flower.png" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Get your desired flavour in Flower Bouquet Design.</p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/welcome/all_flower" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Fruit Cakes</h5>
																	<!-- Image -->
																	<img src="<?php echo $this->config->base_url(); ?>img/fruit.png" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Get it with your desired flavor and Ingredients. </p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/welcome/all_fruit" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Edible Cakes</h5>
																	<!-- Image -->
																	<img width="150px" height="50px" src="<?php echo $this->config->base_url(); ?>img/edible.png" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Get your desired flavor in Flower Bouquet Design.</p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/welcome/all_edible" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>valentine Cakes</h5>
																	<!-- Image -->
																	<img src="<?php echo $this->config->base_url(); ?>img/valentaine.png" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Get it with your desired flavor and Ingredients. </p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/welcome/all_valentaine" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Engagement Cakes</h5>
																	<!-- Image -->
																	<img src="<?php echo $this->config->base_url(); ?>img/engagement.png" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Get it in your desired flavor. </p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/welcome/all_engagement" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Cartoon Cakes</h5>
																	<!-- Image -->
																	<img src="<?php echo $this->config->base_url(); ?>img/cartoon.png" class="img-responsive" alt="" />
																	<!-- Paragraph -->
																	<p>Get your Favorite Cartoon on your Cake.</p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/welcome/all_cartoon" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li><a href="<?php echo $this->config->base_url(); ?>index.php/gallery_control/img_display"><img src="<?php echo $this->config->base_url(); ?>img/nav-menu/nav3.jpg" class="img-responsive" alt="" /> Gallery</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $this->config->base_url(); ?>img/nav-menu/nav4.jpg" class="img-responsive" alt="" /> Shop <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo $this->config->base_url(); ?>index.php/upload/img_display">Shopping</a></li>
													
													<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/checkout">Checkout</a></li>
													<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/reserve_seats">Reservation</a></li>
													<li><a href="<?php echo base_url() ?>index.php/welcome/contact">Contact Us</a></li>
												</ul>
											</li>
											
											<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/aboutus"><img src="<?php echo $this->config->base_url(); ?>img/nav-menu/nav6.jpg" class="img-responsive" alt="" /> About</a></li>
							
						</div>
					</div>

									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div> <!-- / .container -->
			</div>
			
			<!-- Header End -->