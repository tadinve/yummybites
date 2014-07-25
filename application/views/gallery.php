
			<!-- Banner Start -->
			
			<div class="banner padd">
				<div class="container">
					<!-- Image -->
					<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>img/crown-white.png" alt="" />
					<!-- Heading -->
					<h2 class="white">Gallery</h2>
					<ol class="breadcrumb">
						<li><a href="<?php echo $this->config->base_url(); ?>index.php/welcome/home">Home</a></li>
						<li class="active">Gallery</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<!-- Banner End -->
			
			
			
			<!-- Inner Content -->
			<div class="inner-page padd">
				
				<!-- Gallery Start -->
				
				<div class="gallery">
					<div class="container">
						<!-- Gallery elements with pretty photo -->
						<div class="gallery-content">
							<div class="row">
							<?php 
									
							for($i=0;$i<count($display);$i++) { ?>
								<div class="col-md-3 col-sm-4">
									<!-- Separate gallery element -->
									<div class="element">
										<!-- Image -->
										<?php echo '<img src="'.$this->config->base_url().'uploads/'.$display[$i]->file.'" width="272" height="142"/>'; ?>

										<!-- Gallery Image Hover Effect -->
										<span class="gallery-img-hover"></span>
										<!-- Gallery Image Hover Icon -->
										<!--"<?php echo '<img src="'.$this->config->base_url().'uploads/'.$display[$i]->file.'" width="242" height="142"/>'; ?> class="gallery-img-link" -->
										<!--<?php echo '<a href="<img src="'.$this->config->base_url().'uploads/'.$display[$i]->file.'" width="242" height="142" class="gallery-img-link"/>"' ?></a> -->

										<a href="<?php echo $this->config->base_url().'uploads/'.$display[$i]->file?>" class="gallery-img-link">
											<i class="fa fa-search-plus hover-icon icon-left"></i>
										</a>
										<a href="#">
											<i class="fa fa-link hover-icon icon-right"></i>
										</a>
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
				