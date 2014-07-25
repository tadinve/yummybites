
			
<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Order Online</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/home">Home</a></li>
						<li class="active">Shopping</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
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
										<span class="item-price pull-right"><?php echo 'Rs: '.$display[$i]->price;?></span>
										<div class="clearfix"></div>
										<!-- Paragraph -->
										<p>Its available in different designs.</p>
										<!-- Buy now button -->
										<div class="visible-xs">
											<a class="btn btn-danger btn-sm" href="#">Buy Now</a>
										</div>
										<!-- Shopping item hover block & link -->
										<div class="item-hover br-red hidden-xs"></div>
										<a class="link hidden-xs" href="#">Add to Cart</a>
										
									</div>
								</div>
								<?php } ?>

							</div>
							<!-- Pagination -->
							<div class="shopping-pagination">
								<ul class="pagination">
									<!--<li class="disabled"><a href="#">&laquo;</a></li> -->
										<div style="text-align:center"><li style="text-align:center" class="pagination"><?php print_r ($links); ?></li></div> 
<!--
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>-->
								</ul>
							</div>
							<!-- Pagination end-->
						</div>
					</div>
				</div>
				
				<!-- Shopping End -->
				