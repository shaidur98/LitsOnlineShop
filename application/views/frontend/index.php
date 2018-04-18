			<!-- slider-area start -->
			<div class="slider-area">
				<div class="container">
					<div class="row">
						<!-- slider start -->
						<div class="col-xs-12 col-sm-12 col-md-9">
							<div class="slider">
								<div id="mainSlider" class="nivoSlider">
									<img src="<?php echo base_url();?>assets/frontend/img/slider/home4/1.jpg" alt="main slider" title="#htmlcaption1"/>
									<img src="<?php echo base_url();?>assets/frontend/img/slider/home4/2.jpg" alt="main slider" title="#htmlcaption2"/>
<img src="<?php echo base_url();?>assets/frontend/img/slider/home4/3.jpg" alt="main slider" title="#htmlcaption1"/>
									<img src="<?php echo base_url();?>assets/frontend/img/slider/home4/4.jpg" alt="main slider" title="#htmlcaption2"/>
								</div>	
								<div id="htmlcaption1" class="nivo-html-caption progress-cap">
									<div class="slider-progress"></div>
								</div>
								<div id="htmlcaption2" class="nivo-html-caption progress-cap">
									<div class="slider-progress"></div>
								</div>
							</div>
						</div>
						<!-- slider end -->
						<!-- block-img-add start -->
						<div class="col-xs-12 col-sm-12 col-md-3">
							<div class="sidebar-area">
								<!-- shipping-add-image start -->
								<div class="block-img-add">
									<div class="single-shipping-image">
										<a href="#"><img src="<?php echo base_url();?>assets/frontend/img/shiping/banner_block1.jpg" alt="shipping image" /></a>
									</div>	
									<div class="single-shipping-image">
										<a href="#"><img src="<?php echo base_url();?>assets/frontend/img/shiping/banner_block2.jpg" alt="shipping image" /></a>
									</div>	
									<div class="single-shipping-image">
										<a href="#"><img src="<?php echo base_url();?>assets/frontend/img/shiping/banner_block3.jpg" alt="shipping image" /></a>
									</div>
									<div class="single-shipping-image">
										<a href="#"><img src="<?php echo base_url();?>assets/frontend/img/shiping/banner_block4.jpg" alt="shipping image" /></a>
									</div>									
								</div>
								<!-- shipping-add-image end -->
							</div>
						</div>
						<!-- block-img-add end -->							
					</div>
				</div>
			</div>

			<!-- most viewed product area start -->
			<section class="tab-carousel-product">
				<div class="container">
					<div class="row">
						<div class="tab-product-area">
							<div class="Mostview-sec-heading section-heading">
								<h2><span>New </span>products</h2>
								<!-- tabs menu end -->							
							</div>
							<!-- tab content start -->
							<div class="tab-content">
								<!-- tabs one start -->
								<div role="tabpanel" class="tab-pane active" id="Table_shaddam">
									<div class="tab-content-area tab-carousel-5">
										<div class="carousel-p-b">
											<div class="product-carousel-5">
												<!-- single-product-item start -->

							<?php $counter = 0; foreach($new_products as $row2) { $counter++;?>						
												<!-- single-product-item start -->

												<div class="single-product-item">

													<div class="product-image">

															<div class="sale-stiker product-sticker">

																<img src="<?php echo base_url();?>assets/frontend/img/product/sale1.png" alt="product sticker" />

															</div>											

														<div class="product-sticker">

															<img src="<?php echo base_url();?>assets/frontend/img/product/new4.png" alt="product sticker" />

														</div>			

														<a href="single-product.html"><img src="<?php echo base_url().'uploads/product_img/'.$row2->product_img; ?>" alt="product image" /></a>

														<div class="single-product-overlay">

															<div class="rating-box">

																<a title="1 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>

																<a title="2 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>

																<a title="3 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>

																<a title="4 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>

																<a title="5 star" href="#"><i class="fa fa-star-o"></i></a>

															</div>

															<div class="product-quick-view">

																<ul>

																	<li><a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>"><i class="fa fa-heart-o"></i></a></li>

																	<li><a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>"><i class="fa fa-copy"></i></a></li>

																	<li><a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>"><i class="fa fa-search"></i></a></li>

																</ul>

															</div>

														</div>

													</div>

													<div class="single-product-text">

														<h2><a class="product-title" href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title=""><?php echo $row2->name;?></a></h2>

														<div class="product-price">

														<span class="regular-price"><?php echo'Tk.'.$row2->price.'.00';?></span>
														<span class="old-price"><?php echo'Tk.'.$row2->price.'.00';?></span>

														</div>
															<br><br><br>
														<div class="pro-add-to-cart">

															<p><a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title="View Details">Details</a></p>

														</div>

													</div>

												</div>

												<!-- single-product-item end -->

<?php } ?>









										
											</div>
										</div>
									</div>
								</div>
								<!-- tabs one end -->

							</div>						
							<!-- tab content end -->
						</div>
					</div>
				</div>
			</section>		
			<!-- most viewed product area end -->
			<!-- new product area start -->
			<section class="new-product-area">
				<div class="container">
					<div class="section-heading">
						<h2><span>Offered</span> Products</h2>
					</div>			
					<div class="row">
						<div class="col-xs-12 col-md-3 hidden-xs hidden-sm">
							<div class="single-image-add">
								<a href="#"><img src="<?php echo base_url();?>assets/frontend/img/add/baner_new_home4.jpg" alt="LITS" /></a>
							</div>						
						</div>
						<div class="col-xs-12 col-md-9">
							<!-- new-product start -->
							<div class="block4 sidebar-product">
								<div class="row">
									<div class="new-product">
																	
										<!-- single carousel item start -->
										<div class="item">
											<!-- single product item start -->
											<?php $counter = 0; foreach($new_products as $row2) { $counter++;?>	
											<div class="block4-single-item">
												<div class="block4-pro-img">
													<a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title="Product Image"><img src="<?php echo base_url().'uploads/product_img/'.$row2->product_img; ?>" alt="product image" /></a>
												</div>
												<div class="block4-pro-text">
													<a class="product-title" href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title="Various version"><?php echo $row2->name;?></a>
													<div class="rating-box">
														<a title="1 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="2 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="3 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="4 star" href="#"><i class="fa fa-star-o"></i></a>
														<a title="5 star" href="#"><i class="fa fa-star-o"></i></a>
													</div>
													<div class="product-price">
														<span class="regular-price"><?php echo'$'.$row2->price.'.00';?></span>
														<span class="old-price"><?php echo'$'.$row2->price.'.00';?></span>
													</div>
												</div>
											</div>
											<?php if($counter >= 3) break;?>
											<?php } ?>
											<!-- single product item end -->
																											
										</div>
										<!-- single carousel item end -->

										<!-- single carousel item start -->
										<div class="item">
											<!-- single product item start -->
											<?php $counter = 0; foreach($new_products as $row2) { $counter++;?>	
											<?php if ($counter>=4){?>
											<div class="block4-single-item">
												<div class="block4-pro-img">
													<a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title="Product Details"><img src="<?php echo base_url().'uploads/product_img/'.$row2->product_img; ?>" alt="product image" /></a>
												</div>
												<div class="block4-pro-text">
													<a class="product-title" href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title="Various version"><?php echo $row2->name;?></a>
													<div class="rating-box">
														<a title="1 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="2 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="3 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="4 star" href="#"><i class="fa fa-star-o"></i></a>
														<a title="5 star" href="#"><i class="fa fa-star-o"></i></a>
													</div>
													<div class="product-price">
														<span class="regular-price"><?php echo'$'.$row2->price.'.00';?></span>
														<span class="old-price"><?php echo'$'.$row2->price.'.00';?></span>
													</div>
												</div>
											</div>
											<?php } ?>
											<?php if($counter >= 6) break;?>
											<?php } ?>
											<!-- single product item end -->
																											
										</div>
										<!-- single carousel item end -->										
										
										<!-- single carousel item start -->
										<div class="item">
											<!-- single product item start -->
											<?php $counter = 0; foreach($new_products as $row2) { $counter++;?>	
											<?php if ($counter>=7){?>
											<div class="block4-single-item">
												<div class="block4-pro-img">
													<a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title="Product Details"><img src="<?php echo base_url().'uploads/product_img/'.$row2->product_img; ?>" alt="product image" /></a>
												</div>
												<div class="block4-pro-text">
													<a class="product-title" href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title="Product Name"><?php echo $row2->product_title;?></a>
													<div class="rating-box">
														<a title="1 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="2 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="3 star" class="rated" href="#"><i class="fa fa-star-o"></i></a>
														<a title="4 star" href="#"><i class="fa fa-star-o"></i></a>
														<a title="5 star" href="#"><i class="fa fa-star-o"></i></a>
													</div>
													<div class="product-price">
														<span class="regular-price"><?php echo'$'.$row2->price.'.00';?></span>
														<span class="old-price"><?php echo'$'.$row2->price.'.00';?></span>
													</div>
												</div>
											</div>
											<?php } ?>
											<?php if($counter >= 9) break;?>
											<?php } ?>
											<!-- single product item end -->
																											
										</div>
										<!-- single carousel item end -->											

									
										
									</div>
								</div>
							</div>
							<!-- new-product end -->
						</div>
					</div>
				</div>
			</section>
			<!-- new product area end -->

			<!-- Shop by category area start -->
			<section class="shop-by-category">
				<div class="container">
					<div class="section-heading">
						<h2><span>Shop</span> by categories</h2>
					</div>				
					<div class="row">
					<?php foreach($cats as $row){?>
						<!-- single-category-box start -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="single-category-box">
								<div class="shop-category-item">
									<h2><a href="#"><?php echo $row->name;?></a></h2>
<div class="pro-add-to-cart">

	<p><a href="<?php echo site_url('cs/products_by_category?id='.$row->id);?>" title="View Details">Show Products</a></p>

</div>
								</div>
								<div class="shop-category-image">
									<img src="<?php echo base_url().'uploads/icon/'.$row->icon; ?>" />



								</div>

							</div>
						</div>
						<!-- single-category-box end -->
						<?php } ?>
									
					</div>
				</div>
			</section>
			<!-- Shop by category area end -->


			<div id="wrap">
 
    <?php //$this->view($content); ?>


     
</div>


