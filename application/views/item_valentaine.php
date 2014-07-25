<script>
function myFunction()
{
var a=document.getElementById("quantity").value;
c=document.getElementById("price_hidden").value;
document.getElementById("price").value='Rs.'+a*c;


}
</script>
			
			<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Order Now</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/home">Home</a></li>
						<li><a href="<?php echo $this->config->base_url(); ?>index.php/upload/img_display">Shopping</a></li>
						<li class="active">Order Now</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
			
				<!-- Single Item Start -->
				
				<div class="single-item">
					<div class="container">
						<!-- Shopping single item contents -->
						<div class="single-item-content">
							<div class="row">
								<div class="col-md-4 col-sm-5">
									<!-- Product image -->
									<img class="img-responsive img-thumbnail" src="<?php echo $this->config->base_url(); ?>img/valentaine.png" alt="" />
								</div>
								<div class="col-md-8 col-sm-7">
									<!-- Heading -->
									<h3>Valentine cake</h3>
									<div class="row">
										<div class="col-md-7 col-sm-12">
											<!-- Single item details -->
											<div class="item-details">
												<!-- Paragraph -->
												<p class="text-justify">Indulgence!! We don't need a reason for this.. Let your dear one's heart melt with our cake at the very first bite they make!!</p>
												<!-- Heading -->
												<h5>Ingredients-</h5>
												

												<!-- Recipe ingredients -->
												<ul class="list-unstyled">
													<li>
														<i class="fa fa-check"></i> Cream <span class="pull-right"> 200ml</span>
														<div class="clearfix"></div>
													</li>
													
													<li>
														<i class="fa fa-check"></i> Sugar <span class="pull-right"> 350g</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Cocoa powder <span class="pull-right"> 85g</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Baking Powder <span class="pull-right"> 1½ tsp</span>
														<div class="clearfix"></div>
													</li>
													
													<li>
														<i class="fa fa-check"></i> Bicarbonate of soda <span class="pull-right"> 1½ tsp</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Eggs <span class="pull-right"> 2</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Milk <span class="pull-right"> 250ml</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Vegetable Oil <span class="pull-right"> 125ml</span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Vanilla Extract <span class="pull-right"> 2 tsp</span>
														<div class="clearfix"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-5 col-sm-12"> 
											<!-- Form inside table wrapper -->
											<div class="table-responsive">
												<!-- Ordering form -->
												<form role="form">
													<!-- Table -->
													<table class="table table-bordered">
														<tr>
															<td>Price</td>
															<div class="form-group">

															<td>
															<input type="hidden" name="price_hidden" id="price_hidden" value="<?php echo '350'; ?>">
															<input type="text" name="price" id="price" value='Rs.350'> </td>
															</div>
														</tr>
														<tr>
															<td>Shipping</td>
															<td>Free</td>
														</tr>
														<tr>
															<td>Delivery Time</td>
															<td>45 Min</td>
														</tr>
														<tr>
															<td>Quantity</td>
															<td><div class="form-group">
																<select class="form-control input-sm" name="quantity" id="quantity" onchange="myFunction()">

																
																	<option value="1">1kg</option>
																	<option value="2">2kg</option>
																	<option value="3">3kg</option>
																	<option value="4">4kg</option>
																</select>
															</div></td>
														</tr>
														<tr>
															<td>Payment Mode</td>
															<td><div class="form-group">
																<select class="form-control input-sm">
																	<option>Cash on delivery</option>
																	<option>Credit Card</option>
																	<option>Debit Card</option>
																</select>
															</div></td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td><div class="form-group">
																<button type="submit" class="btn btn-danger btn-sm">Payment</button>
															</div></td>
														</tr>
													</table>
												</form><!--/ Table End-->
											</div><!--/ Table responsive class end -->
										</div>
									</div><!--/ Inner row end  -->
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Single Item End -->
