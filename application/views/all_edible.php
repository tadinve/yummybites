<SCRIPT LANGUAGE="JavaScript"> 

function validateForm(){
if(document.myForm.weight.value==0)
{
document.getElementById('display').innerHTML = "choose an option";
document.myForm.weight.focus();
return false;
}
else if(document.myForm.flavour.value==0)
{
	document.getElementById('display1').innerHTML = "choose an option";

document.myForm.flavour.focus();

return false;
}
return true;




}

            

</SCRIPT>
			<div class="modal fade pull-left"  id="buynow" tabindex="-1" role="dialog" aria-hidden="true" style="width: auto; height: auto; opacity: 1; overflow: visible;">
			<div class="modal-dialog" style="overflow: auto; width: 344px; height: auto;">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Cartoon Cakes</h4>
						
					</div>
					<div class="modal-body" id="category_id">
						<!-- Items table -->
						<form name="myForm" onsubmit="return validateForm()" method="post">
						 <div id="weight" class="option">
                    		<span class="required" style="color:red";>*</span>
                    			<b>Weight:</b>
                    			<br>
         							 <select name="weight">
           									<option value=""> --- Please Select --- 
           									</option>
					                        <option value="1/2kg">1/2 Kg 
					                        </option>
					                        <option value="1kg">1 Kg                       
					                         </option>
					                        <option value="2kg">2 Kg                        
					                        </option>
					                        <option value="3kg">3 Kg                        
					                        </option>
					                      </select>
					                <p id="display" name="display" style="color:red;font:8px;"> </p>

       				 </div>
        				<br>
                    <div id="flavour" class="option">
                    <span class="required" style="color:red;">*</span>
                    <b>Flavour:</b>
                    <br>
						          <select name="flavour">
						            <option value=""> --- Please Select --- </option>
						                        <option value="pineapple">Pineapple                        
						                        </option>
						                        <option value="chocolate">Chocolate                        
						                        </option>
						                        <option value="mango">Mango                        
						                        </option>
						                        <option value="strawberry">Strawberry                        
						                        </option>
						                        <option value="blueberry">Blueberry                        
						                        </option>
						                        <option value="blackcurrent">Black Currant                        
						                        </option>
						                        
						                      </select>
						         <p id="display1" name="display" style="color:red;font:8px;"> </p>

					</div>

        			<br>
                    <div id="option-834" class="option">
                    	<b>Message On Cake:</b><br>
          					<textarea name="option[834]" cols="40" rows="5"></textarea>
        			</div>
        			<br>
        			<div class="cart">
       				 	<div>Qty:<input type="text" name="quantity" size="2" value="1">
         				 	<input type="hidden" name="product_id" size="2" value="537">
         				 					&nbsp;

        				 </div>
        				 
        				 
       
            		</div>
            		
            							<div class="modal-footer">
							<input type="submit" name="submit" value="Add To Cart" class="btn btn-danger btn-sm pull-left">
							</div>
                   
</form>
						
					</div>
					
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Menu</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/home">Home</a></li>
						<li class="active">Menu</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			<br>
			<div class="tp-caption lfl largeblackbg br-red"
								data-x="20" 
								data-y="100"
								data-speed="1500"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								style="z-index: 3"><strong><center>Printable Cakes</center></strong>
							</div>
			
			
<!-- Inner Content -->
			<div class="inner-page padd">
				
				<!-- Shopping Start -->
				
				<div class="shopping">
					<div class="container">
						<!-- Shopping items content -->
						<div class="shopping-content">
							<div class="row">
							<?php 
									
							for($i=0;$i<count($display);$i++) { ?>
								<div class="col-md-3 col-sm-6">
									<!-- Shopping items -->
									<div class="shopping-item imagestyle">
										<!-- Image -->
												<?php echo '<img src="'.$this->config->base_url().'uploads/'.$display[$i]->file.'" width="242" height="242"/>'; ?>
										<!-- Shopping item name / Heading -->
										<h4 class="pull-left"><?php echo $display[$i]->description;?></a></h4>
										<!-- Buy now button -->
										<div class="visible-xs"></div>


<button class="btn btn-danger btn-sm pull-left" data-toggle="modal" data-target="#buynow" onclick="cart(<?php echo $display[$i]->id ?>)">Buy Now </button>
										<div class="clearfix"></div>
										
										
										<!-- Shopping item hover block & link -->
										<div class="item-hover br-red hidden-xs"></div>
										<a class="link hidden-xs" href="<?php echo $this->config->base_url(); ?>index.php/welcome/item_single?id=<?php echo $display[$i]->id ?>">View Product</a>

										
										
									</div>
								</div>
								<?php } ?>

							</div>
							<!-- Pagination -->
							<div class="shopping-pagination" style="text-align:center">
								<ul class="pagination">
									<!--<li class="disabled"><a href="#">&laquo;</a></li> -->
										<div style="text-align:center"><li class="pagination"><?php print_r($links);?></li></div> 
<!--
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>-->
								</ul>
							</div>
						</div><!-- Separate gallery element --><!--/ End Gallery content class -->
					</div>
				</div>
				
				<!-- Gallery End -->
				