			<!-- brand & client area start -->
			<div class="brand-client-area">
				<div class="container">
					<div class="row">
						<div class="carousel-border">
							<div class="client-carousel">
							<?php foreach($brands as $row) { ?>
								<!-- single-client start -->
								<div class="single-client">
									<a href="<?php echo site_url('cs/brand_product?id='.$row->id);?>"><img src="<?php echo base_url().'uploads/brand_logo/'.$row->logo; ?>" alt="" /></a>
								</div>
								<?php } ?>
								<!-- single-client end -->
											
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- brand & client area end -->