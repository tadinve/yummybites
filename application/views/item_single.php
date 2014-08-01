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
						<li><a href="<?php echo $this->config->base_url(); ?>welcome/home">Home</a></li>
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
									<?php echo '<img src="'.$this->config->base_url().'uploads/'.$file.'" width="242" height="242"/>'; ?>
								</div>
								<div class="col-md-8 col-sm-7">
									<!-- Heading -->
									<h3><?php echo ucfirst($category);?> cake</h3>
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
														<i class="fa fa-check"></i> Cream <span class="pull-right"> <?php echo $cream;?></span>
														<div class="clearfix"></div>
													</li>
													
													<li>
														<i class="fa fa-check"></i> Sugar <span class="pull-right"> <?php echo $sugar;?></span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Cocoa powder <span class="pull-right"> <?php echo $cocoapowder;?></span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Baking Powder <span class="pull-right"> <?php echo $bakingpowder;?></span>
														<div class="clearfix"></div>
													</li>
													
													<li>
														<i class="fa fa-check"></i> Bicarbonate of soda <span class="pull-right"> <?php echo $bicarbonate;?></span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Eggs <span class="pull-right"> <?php echo $eggs;?></span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Milk <span class="pull-right"> <?php echo $milk;?></span>
														<div class="clearfix"></div>
													</li>
													<li>
														<i class="fa fa-check"></i> Vegetable Oil <span class="pull-right"><?php echo $vegoil;?></span>
														<div class="clearfix"></div>
													</li>
													
												</ul>
											</div>
										</div>
										<div class="col-md-5 col-sm-12"> 
											<!-- Form inside table wrapper -->
											<div class="table-responsive">
												<!-- Ordering form -->

    <form action="<?php echo $this->config->base_url(); ?>index.php/welcome/paypal" method="post" name="frmPayPal1">
													<!-- Table -->
													<table class="table table-bordered">
														<tr>
															<td>Price</td>
															<div class="form-group">

															<td>
															<input type="hidden" name="menuid_hidden" id="menuid_hidden" value="<?php echo $_GET['id']; ?>">
															<input type="hidden" name="file_hidden" id="file_hidden" value="<?php echo $file; ?>">

															<input type="hidden" name="price_hidden" id="price_hidden" value="<?php echo $price; ?>">
															<input type="hidden" name="file_hidden" id="file_hidden" value="<?php echo $file; ?>">

															<input type="hidden" name="cream_hidden" id="cream_hidden" value="<?php echo $cream; ?>">
															<input type="hidden" name="sugar_hidden" id="sugar_hidden" value="<?php echo $sugar; ?>">
															<input type="hidden" name="eggs_hidden" id="eggs_hidden" value="<?php echo $eggs; ?>">
															<input type="hidden" name="milk_hidden" id="milk_hidden" value="<?php echo $milk; ?>">
															<input type="hidden" name="vegoil_hidden" id="vegoil_hidden" value="<?php echo $vegoil; ?>">

															<input type="hidden" name="cocoapowder_hidden" id="cocoapowder_hidden" value="<?php echo $cocoapowder; ?>">
															<input type="hidden" name="bakingpowder_hidden" id="bakingpowder_hidden" value="<?php echo $bakingpowder; ?>">

															<input type="hidden" name="bicarbonate_hidden" id="bicarbonate_hidden" value="<?php echo $bicarbonate; ?>">
															<input type="hidden" name="category_hidden" id="category_hidden" value="<?php echo $category; ?>">

															<input type="text" name="price" id="price" value="<?php echo $price; ?>"> </td>
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
