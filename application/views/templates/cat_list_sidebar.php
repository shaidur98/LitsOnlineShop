								<!-- category-list-pro start -->
								<div class="category-list-pro sidebar-list">
									<h3>Category List</h3>
									<ul>					
										<?php foreach($cats as $row) { ?>
										<li><a href="<?php echo site_url('cs/products_by_category?&id='.$row->id);?>"><?php echo $row->name;?></a><span>3</span></li>
										<?php } ?>
										<li><a href="<?php echo site_url('cs/products_by_category');?>">All Categories</a></li>
										<li><a href="<?php echo site_url('cs/products_by_category?cat_id=none');?>">Non Category</a></li>										
									</ul>
								</div>
								<!-- category-list-pro end -->