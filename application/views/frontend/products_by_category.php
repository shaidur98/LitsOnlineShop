
		<!-- main content area start  -->
		<section class="main-content-area">
			<div class="container">
				<!-- bradcame start -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="greentect_bradcame">
							<ul>
								<li><a href="<?php echo site_url();?>">Computer Shop</a></li>
								<li>Products By Category</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- bradcame end -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<div class="page-sidebar-area">
							<!-- shop-by-area start -->
							<div class="single-sidebar shop-by-area">
								<!-- price-filter end -->

								<?php $this->load->view('templates/acordion_list_template');?>

								<?php $this->load->view('templates/new_products_sidebar');?>

								<div class="blog-popular-post">
								<h3 class="blog-sidebar-title">New Products</h3>
								<ul>
								<?php $counter = 0; foreach($new_products as $row2) { $counter++;?>
									<li>
										<div class="popular-post-img">
											<a href="<?php echo site_url('cs/single_product?id='.$row2->id);?>"><img src="<?php echo base_url().'uploads/product_img/'.$row2->product_img; ?>" alt="" /></a>
										</div>
										<div class="popular-post-content">
											<a href="<?php echo site_url('cs/single_product?id='.$row2->id);?>"><?php echo $row2->product_title; ?></a>
											<div class="product-price">
												<span class="regular-price"><?php echo '$'.$row2->price.'.00' ;?></span>
											</div>
										</div>
									</li>

									<?php if($counter == 5)break; ?>
									<?php } ?>
								</ul>
							</div>						
							</div>
							<!-- shop-by-area end -->
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<div class="right-main-product">
							<!-- product-sgorting start -->
							<div class="product-sgorting-bar">	

							</div>
							<!-- product-sgorting end -->
							<!-- all-product start -->
							<div class="row all-grid-product">
							<?php $counter = 0; foreach($category_products as $row) { $counter++;?>
								<!-- single-product-item start -->
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
									<div class="single-product-item">
																			
										<div class="product-image">
											<div class="sale-stiker product-sticker">
												<img src="" alt="" />
											</div>	
											<div class="product-sticker">
												<img src="" alt="" />
											</div>			
											<a href="<?php echo site_url('cs/single_product?id='.$row->id);?>" title=""><img src="<?php echo base_url().'uploads/product_img/'.$row->product_img; ?>" /></a>

										</div>
										<div class="single-product-text">
											<h2><a class="product-title" href="<?php echo site_url('cs/single_product?id='.$row->id);?>" title=""><?php echo $row->product_title;?></a></h2>
											<div class="product-price">
												<?php if($row->old_price!=0){?>
												<span class="old-price"><?php echo '$'.$row->old_price.'.00' ;?></span>
												<?php } ?>
												<span class="regular-price"><?php echo '$'.$row->price.'.00' ;?></span>
											</div>
											<div class="pro-add-to-cart">
												<p><a href="<?php echo site_url('cs/single_product?id='.$row->id);?>" title="view_details">View Details</a></p>
											</div>
										</div>

									</div>
								</div>
								<!-- single-product-item end -->
								<?php } ?>
								
							</div>
							<!-- all-product end -->
							<!-- product-sgorting start -->
							<div class="product-sgorting-bar bar-2">	
								<!-- show-page start -->
								<div class="pagination-bar">
									<label>Page:</label>
									<ul>
										<li><a href="#">1</a></li>
										<li class="active"><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									</ul>										
								</div>
								<!-- show-page end -->
								<!-- shoort-by start -->
								<div class="shoort-by pull-right">
									<label>Sort by</label>
									<div class="short-select-option">
										<select>
											<option value="">Position</option>
											<option value="">Name</option>
											<option value="">Price</option>
										</select>												
									</div>
									<a title="Set Descending Direction" href="#"><i class="fa fa-long-arrow-up"></i></a>
								</div>
								<!-- shoort-by end -->	
							</div>
							<!-- product-sgorting end -->							
						</div>
					</div>
				</div>	
			</div>	
		</section>
		<!-- main content area end  -->

