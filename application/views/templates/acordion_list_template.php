
      <div class="panel-group" id="accordion">


        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">CATEGORY LIST<span class="caret pull-right"></span></a> </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
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
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">BRAND LIST<span class="caret pull-right"></span></a> </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse">
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
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"> PRODUCTS AT A GLANCE<span class="caret pull-right"></span></a></h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse">
                <!-- category-list-pro start -->
                <div class="category-list-pro sidebar-list">
                  <h3>Products At a Glance</h3>
                  <ul>
                    <li><a href="<?php echo site_url('cs/all_product');?>">All Products</a><span>8</span></li>
                    <li><a href="<?php echo site_url('cs/new_product');?>">New Products</a><span>3</span></li>
                    <li><a href="<?php echo site_url('cs/offered_product');?>">Offered Products</a><span>4</span></li>
                    <li><a href="<?php echo site_url('cs/brand_product');?>">Brand products</a><span>7</span></li>
                    <li><a href="#">New Brand Products</a><span>2</span></li>
                  </ul>
                </div>
                <!-- category-list-pro end -->
          </div>
        </div>

        <!-- end hidden Menu items --> 
      </div>

