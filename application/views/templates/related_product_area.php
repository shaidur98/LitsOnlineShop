<!-- related product start -->

				<div class="row related-product">

					<div class="section-heading">

						<h2><span>Related</span> Products</h2>

					</div>	

					<div class="product-carousel-5">

						<?php $counter = 0; foreach($related_products as $row2) { $counter++;?>	

						<!-- single-product-item start -->

						<div class="single-product-item">

							<div class="product-image">

			

								<a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title=""><img src="<?php echo base_url().'uploads/product_img/'.$row2->product_img; ?>" alt="product image" /></a>



							</div>

							<div class="single-product-text">

								<h2><a class="product-title" href="single-product.html" title="">Pleasure</a></h2>

								<div class="product-price">

									<span class="regular-price">$999.00</span>

								</div>

								<div class="pro-add-to-cart">

									<p><a href="<?php echo site_url('cs/single_product?id='.$row2->product_code);?>" title="View Details">View Details</a></p>

								</div>

							</div>

						</div>

						<!-- single-product-item end -->

						<?php if($counter==5) break; ?>

						<?php } ?>

					</div>					

				</div>

				<!-- related product end -->