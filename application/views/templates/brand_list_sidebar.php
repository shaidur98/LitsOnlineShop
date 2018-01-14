								<!-- category-list-pro start -->
								<div class="category-list-pro sidebar-list">
									<h3>Brands List</h3>
									<ul>					
										<?php foreach($brands as $brand) { ?>
										<li><a href="<?php echo site_url('cs/brand_product?&id='.$brand->id);?>"><?php echo $brand->name;?></a><span>3</span></li>
										<?php } ?>
										<li><a href="<?php echo site_url('cs/brand_product');?>">All Brands</a></li>
										<li><a href="<?php echo site_url('cs/brand_product?brand_id=none');?>">Non Brand</a></li>										
									</ul>
								</div>
								<!-- category-list-pro end -->