<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='reethi-facilitator@solivarindia.com '; // Business email ID
?>
<script type="text/javascript">
function validateForm1(){

if(document.frmPayPal1.inputName.value==0)
{
document.getElementById('name').innerHTML = "Enter your Name";
document.frmPayPal1.inputName.focus();
return false;
}
else if(document.frmPayPal1.inputEmail1.value==0)
{
	document.getElementById('email').innerHTML = "choose an option";

document.frmPayPal1.inputEmail1.focus();

return false;
}
else if(document.frmPayPal1.inputPhone.value==0)
{
	document.getElementById('phone').innerHTML = "Enter Valid Phone number";

document.frmPayPal1.inputPhone.focus();

return false;
}
else if(document.frmPayPal1.inputCountry.value==0)
{
	document.getElementById('country').innerHTML = "choose an option";

document.frmPayPal1.inputCountry.focus();

return false;
}
else if(document.frmPayPal1.inputAddress.value==0)
{
	document.getElementById('address').innerHTML = "Enter Address";

document.frmPayPal1.inputAddress.focus();

return false;
}
else if(document.frmPayPal1.inputZip.value==0)
{
	document.getElementById('postal').innerHTML = "Enter your Postal Code";

document.frmPayPal1.inputZip.focus();

return false;
}

else if(frmPayPal1.terms.checked==false)
{
	alert("Please Accept Terms and Conditions to Preceed");
}  
return true;




}
</script>
<script type="text/javascript">



 	var id_array=[];
 	var price_array=[];
 	var category_array=[];
 	var file_array=[];

function cart(aa){
 	idval=aa;
//alert('hhi');
			$.ajax({
				url:'cart',
				type:'POST',
				data:'cat_id='+idval,
				dataType:'json',
				success:function(response){	
					id_array.push(response.categoryid);
					price_array.push(response.price);
					category_array.push(response.category);
					file_array.push(response.file);
					var length_id=id_array.length;


					//cart-items
					var i=0;
					var price_total=0;
					var option ='';
					while(length_id>0)
					{
											price_total=parseInt(price_total)+parseInt(price_array[i]);

					//alert(response);
					var option = option+'<li aria-hidden="true"><div class="cart-item"><a href="#"><i class="fa fa-times"></i></a>';
					var option = option+'<img class="img-responsive img-rounded" src="<?php echo base_url(); ?>uploads/'+file_array[i]+'" alt="" />';
					var option = option+'<span class="cart-title"><a href="#">'+category_array[i]+'cake</a></span>';
					var option = option+'<span class="cart-price pull-right red">Rs.'+price_array[i]+'/-</span>';
					var option = option+'<div class="clearfix"></div></div></li>';
					var length_id=length_id-1;
					i++;

					}

					if(id_array.length>0)
					{
						var option = option+'<li><div class="cart-item"><button class="btn btn-danger" data-toggle="modal" data-target="#shoppingcart1" >Checkout</button></div></li>';
					}

					var item=id_array.length+" items $"+price_total+"/-";

	   				$("#cart-items").html(item);
	   				$(".cart-dropdown").html(option);
	   				cart1(category_array,price_array,file_array,id_array);				

					}

					});

function cart1(category_array,price_array,file_array,id_array)
{
		//alert(category_price);
							var price_total=0;

var option='';
var option=option+'<table class="table table-striped"><thead><tr><td>Selected Cake</td><td>Category</td><td>Price</td></tr></thead><tbody>';
							
								
	var i = 0;						
var length_id=id_array.length;
	while(length_id>0)
{
											price_total=parseInt(price_total)+parseInt(price_array[i]);
	var option = option+'<tr class="cart-item">';
	var option = option+'<td><img class="img-responsive img-rounded" width="120px" height="120px" src="<?php echo base_url(); ?>uploads/'+file_array[i]+'" alt="" /></td>';
	var option = option+'<td>'+category_array[i]+'</td>';
	var option = option+'<td>'+price_array[i]+'</td>';

var length_id=length_id-1;
					i++;
}
		var option = option+'<tr><td></td><td>Total:</td><td>'+price_total+'</td></tr>';

var option=option+'</tbody></table>';
document.getElementById('amount').value=price_total;
document.getElementById('item_name').value=category_array;
document.getElementById('item_number').value=id_array;



	   				$("#category_id").html(option); 
}
				}		
			

		//alert('hiiiii');
 

</script>
<?php

function get_currency($from_Currency, $to_Currency, $amount) {
	$price=$_POST['hide_amount'];
//	$price= echo "<script> document.getElementById('amount').value </script>";

$amount = urlencode($price);
$from_Currency = urlencode($from_Currency);
$to_Currency = urlencode($to_Currency);

$url = "http://www.google.com/finance/converter?a=$amount&from=$from_Currency&to=$to_Currency";

$ch = curl_init();
$timeout = 0;
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$rawdata = curl_exec($ch);
curl_close($ch);
$data = explode('bld>', $rawdata);
$data = explode($to_Currency, $data[1]);
return round($data[0], 2);
}
//echo get_currency('USD', 'INR', '$_GET[amount]');
?>



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
		
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT=0>
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

		<div class="modal fade pull-right"  id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Shopping Cart</h4>
						
					</div>
					<div class="modal-body" id="category_id">
						<!-- Items table -->
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
							

						<button class="btn btn-danger btn-sm pull-left" data-toggle="modal" data-target="#billing_cart">Checkout</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- Model End -->
		
							
						





		<div class="modal fade pull-right"  id="billing_cart" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Shopping Cart</h4>
						
					</div>
					
					<div class="checkout">
						<div class="container">
					<!-- Heading -->
							<h4>Shipping & Billing Details</h4>
							<div class="row">
								<form class="form-horizontal" name="frmPayPal1" action="<?php echo $paypal_url; ?>" onSubmit="return validateForm1()" method="post">

								<div class="col-md-7 col-sm-6">
								<!-- Checkout Form -->
									<div class="form-group">
										<label for="inputName" class="col-md-2 control-label">Name</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="inputName" placeholder="Name">
											<p id="name" name="name" style="color:red;font:8px;"> </p>

										</div>

									</div>            
									<div class="form-group">
										<label for="inputEmail1" class="col-md-2 control-label">Email</label>
										<div class="col-md-8">
											<input type="email" class="form-control" name="inputEmail1" placeholder="Email">
											<p id="email" name="email" style="color:red;font:8px;"> </p>

										</div>

									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-md-2 control-label">Phone</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="inputPhone" placeholder="Phone">
										<p id="phone" name="phone" style="color:red;font:8px;"> </p>

										</div>

									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-md-2 control-label">Country</label>
										<div class="col-md-8">
											<select class="form-control" name="inputCountry">
												<option>Select Country</option>
												<option>USA</option>
												<option>India</option>
												<option>Canada</option>
												<option>UK</option>
											</select>
											<p id="country" name="country" style="color:red;font:8px;"> </p>

										</div>

									</div>              
									<div class="form-group">
										<label for="inputAddress" class="col-md-2 control-label">Address</label>
										<div class="col-md-8">
											<textarea class="form-control" name="inputAddress" rows="3" placeholder="Address"></textarea>
									<p id="address" name="address" style="color:red;font:8px;"> </p>

										</div>

									</div>
									<div class="form-group">
										<label for="inputZip" class="col-md-2 control-label">Zip Code</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="inputZip" placeholder="Zip Code">
										<p id="postal" name="postal" style="color:red;font:8px;"> </p>

										</div>

									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-8">
											<div class="checkbox">
												<label>
													<input type="checkbox" id="terms" name="terms"> Accept Terms & Conditions
												</label>

											</div>
										</div>

									</div>
									
							<div class="modal-footer" style="width:85%;">
							<input type="hidden" name="business" id="business" value="<?php echo $paypal_id; ?>">
						    <input type="hidden" name="cmd" value="_xclick">

						    <input type="hidden" name="item_name" id="item_name" value="">
						    <input type="hidden" name="item_number" id="item_number" value="">
						    <input type="hidden" name="credits" value="510">
						    <input type="hidden" name="userid" value="1">
						    <input type="hidden" name="amount" id="amount" value="">
						   <!-- <input type="hidden" name="hide_amount" id="hide_amount" value="" onchange="get_currency('USD', 'INR', '');" > -->


						    <input type="hidden" name="cpp_header_image" value="<?php echo $this->config->base_url(); ?>img/lo.png">
						    <input type="hidden" name="no_shipping" value="2">
						    <input type="hidden" name="currency_code" value="USD">
						    <input type="hidden" name="handling" value="0">





						    <input type="hidden" name="cancel_return" value="http://demo.phpgang.com/payment_with_paypal/cancel.php">
						    <input type="hidden" name="return" value="http://demo.phpgang.com/payment_with_paypal/success.php">

<center>
							<input type="submit"  class="btn btn-info" name="submit" value="confirm order" alt="PayPal - The safer, easier way to pay online!">&nbsp;
							<button type="reset" class="btn btn-default btn-sm">Reset</button>
</center>
					</div>
							</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
									




				<!-- Checkout End -->
					
			

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
											<span id="cart-items"></span>

										<div class="clearfix"></div>
										<div class="clearfix"></dbtn-cartiv>
									</a>
									<ul class="cart-dropdown" role="menu">

																				

										<?php /*<li>
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
										</li>*/ ?>
										
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
															<div class="col-md-4 col-sm-8">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Flower Bouquet Cakes</h5>
																	<!-- Image -->
																<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_flower">	<img width="150px" height="50px" src="<?php echo $this->config->base_url(); ?>img/flower.png" class="img-responsive" alt="" />
																	</a>
																	<!-- Paragraph -->
																	<p>Get your desired flavour in Flower Bouquet Design.</p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_flower" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-8">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Fruit Cakes</h5>
																	<!-- Image -->
																<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_fruit"><img src="<?php echo $this->config->base_url(); ?>img/fruit.png" class="img-responsive" alt="" />
																	</a><!-- Paragraph -->
																	<p>Get it with your desired flavor and Ingredients. </p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_fruit" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-8">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Edible Cakes</h5>
																	<!-- Image -->
																<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_edible">	<img width="150px" height="50px" src="<?php echo $this->config->base_url(); ?>img/edible.png" class="img-responsive" alt="" /></a>
																	<!-- Paragraph -->
																	<p>Get your desired flavor in Flower Bouquet Design.</p>
																	<!-- Button -->
																	 <a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_edible" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-8">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>valentine Cakes</h5>
																	<!-- Image -->
																<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_valentaine">	<img src="<?php echo $this->config->base_url(); ?>img/valentaine.png" class="img-responsive" alt="" />
																	</a>
																	<!-- Paragraph -->
																	<p>Get it with your desired flavor and Ingredients. </p>
																	<!-- Button -->
																	 <a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_valentaine" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-8">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Engagement Cakes</h5>
																	<!-- Image -->
																<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_engagement">	<img src="<?php echo $this->config->base_url(); ?>img/engagement.png" class="img-responsive" alt="" />
																	</a>
																	<!-- Paragraph -->
																	<p>Get it in your desired flavor. </p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_engagement" class="btn btn-danger btn-xs">View Menu</a>
																</div>
															</div>
															<div class="col-md-4 col-sm-6">
																<!-- Menu Item -->
																<div class="menu-item">
																	<!-- Heading -->
																	<h5>Cartoon Cakes</h5>
																	<!-- Image -->
																<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_display">	<img src="<?php echo $this->config->base_url(); ?>img/cartoon.png" class="img-responsive" alt="" />
																	</a><!-- Paragraph -->
																	<p>Get your Favorite Cartoon on your Cake.</p>
																	<!-- Button -->
																	<a href="<?php echo $this->config->base_url(); ?>index.php/menu_control/img_display" class="btn btn-danger btn-xs">View Menu</a>
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