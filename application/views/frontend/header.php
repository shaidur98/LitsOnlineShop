<!doctype html>
<!--[if IE 9]> <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
	

<head>
		<!-- basic page needs -->	
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>LITS | Total IT Solutions</title>
        <meta name="description" content="add your site description here">
		<!-- mobile meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- fancybox -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/jquery.fancybox.css">
		<!-- mobile menu -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/meanmenu.min.css">		
		<!-- jquery-ui-slider -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/jquery-ui-slider.css">		
		<!-- nivo-slider css -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/nivo-slider.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/owl.transitions.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/owl.theme.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/owl.carousel.css">
		<!-- animate css -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/animate.css">
		<!-- fonts -->
		<link href='http://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css' />
		<!-- font-awesome css -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/font-awesome.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/bootstrap.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/responsive.css">

		<!-- my custom js -->
		<script src="<?php echo base_url();?>assets/frontend/js/custom.js"></script>
		<!-- modernizr js -->
		<script src="<?php echo base_url();?>assets/frontend/js/vendor/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
		  <script src="<?php echo base_url();?>assets/frontend/js/vendor/html5shiv.min.js"></script>
		  <script src="<?php echo base_url();?>assets/frontend/js/vendor/respond.min.js"></script>
		<![endif]-->		
	</head>
	<body class="index-4">
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
		<!-- Add your site or application content here -->
		
		<div class="box-width-wrapper">
			<!-- header-area start -->
			<header class="header-area">
			<!-- header-top start -->
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="welcome-mes">
									<p>Welcome to LITS | <small>Total IT Solutions Store!</small></p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
							
							</div>
						</div>
					</div>
				</div>
				<!-- header-top end -->
				<!-- header-middle start -->			
				<div class="header-middle">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-md-3">
								<!-- logo start -->
								<div class="logo">
									<a href="<?php echo site_url();?>"><img src="<?php echo base_url();?>assets/frontend/img/logo.png" alt="GreenTech" /></a>
								</div>
								<!-- logo end -->
							</div>
							<div class="col-xs-12 col-md-9">
								<!-- category search start -->
								<div class="category-search-area">
									<div class="search-cat">
										<select>
											<option value="1">All Categories</option>
											<?php foreach($cats as $row){?>
											<option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
											<?php } ?>
										</select>
									</div>
									<div class="search-form">
										<form action="#" method="post">
											<input class="cat-search-box" type="text" placeholder="Search entire store here.." />
											<a href="#" class="cat-search-btn"><i class="fa fa-search"></i></a>
										</form>	
									</div>
								</div>
								<!-- category search end -->	

							<!-- top-shoping-cart start -->

							<div class="top-shoping-cart">

								<div class="top-wishlist">

									<a class="top-wishlist-link" href="wishlist.html"><span>3</span></a>

									<div class="wishlist-box-overlay">

										<p class="last-added-item">last added item</p>

										<div class="single-mycart-item">

											<div class="mycart-item-pro">

												<div class="mycart-item-img">

													<a href="wishlist.html"><img src="img/product/shoping-cart/4.jpg" alt="cart" /></a>

												</div>

												<div class="mycart-item-text">

													<a href="#" class="item-delete" title="delete">delete Item</a>	

													<p><a class="mycart-title" href="wishlist.html">Cras neque metus </a></p>

													<div class="product-price">

														<span class="regular-price">$180.00</span>

														<span class="old-price">$300.00</span>

													</div>	

													<p><a class="t-w-add-cart" href="#" title="Add to Cart">Add to Cart</a></p>

												</div>

											</div>

										</div>

										<div class="single-mycart-item">

											<div class="mycart-item-pro">

												<div class="mycart-item-img">

													<a href="wishlist.html"><img src="img/product/shoping-cart/5.jpg" alt="cart" /></a>

												</div>

												<div class="mycart-item-text">

													<a href="#" class="item-delete" title="delete">delete Item</a>	

													<p><a class="mycart-title" href="wishlist.html">Cras neque metus </a></p>

													<div class="product-price">

														<span class="regular-price">$280.00</span>

													</div>	

													<p><a class="t-w-add-cart" href="#" title="Add to Cart">Add to Cart</a></p>

												</div>

											</div>

										</div>

										<div class="single-mycart-item">

											<div class="mycart-item-pro">

												<div class="mycart-item-img">

													<a href="wishlist.html"><img src="img/product/shoping-cart/2.jpg" alt="cart" /></a>

												</div>

												<div class="mycart-item-text">

													<a href="#" class="item-delete" title="delete">delete Item</a>	

													<p><a class="mycart-title" href="wishlist.html">Cras neque metus </a></p>

													<div class="product-price">

														<span class="regular-price">$220.00</span>

														<span class="old-price">$200.00</span>

													</div>	

													<p><a class="t-w-add-cart" href="#" title="Add to Cart">Add to Cart</a></p>

												</div>

											</div>

										</div>

										<p class="go-to-wishlist"><a href="wishlist.html">Go to Wishlist</a></p>

									</div>										

								</div>

								<div class="top-mycart">

									<a class="top-mycart-link" href="cart.html">my cart <span>(3) item: <strong>$975.00</strong></span></a>

									<div class="top-mycart-overlay">

										<div class="single-mycart-item">

											<div class="mycart-item-pro">

												<div class="mycart-item-img">

													<a href="cart.html"><img src="img/product/shoping-cart/1.jpg" alt="cart" /></a>

												</div>

												<div class="mycart-item-text">

													<p><a class="mycart-title" href="cart.html">Cras neque metus </a></p>

													<a href="#" class="cart-price"><strong>1</strong><sub>x</sub> <span>$160.00</span></a>

												</div>

											</div>

											<div class="mycart-item-edit">

												<a href="#" class="item-edit" title="edit">Edit Item</a>

												<a href="#" class="item-delete" title="delete">delete Item</a>

											</div>

										</div>

										<div class="single-mycart-item">

											<div class="mycart-item-pro">

												<div class="mycart-item-img">

													<a href="cart.html"><img src="img/product/shoping-cart/2.jpg" alt="cart" /></a>

												</div>

												<div class="mycart-item-text">

													<p><a class="mycart-title" href="cart.html">Proin lectus ipsum</a></p>

													<a href="#" class="cart-price"><strong>2</strong><sub>x</sub> <span>$250.00</span></a>

												</div>

											</div>

											<div class="mycart-item-edit">

												<a href="#" class="item-edit" title="edit">Edit Item</a>

												<a href="#" class="item-delete" title="delete">delete Item</a>

											</div>

										</div>

										<div class="single-mycart-item">

											<div class="mycart-item-pro">

												<div class="mycart-item-img">

													<a href="cart.html"><img src="img/product/shoping-cart/3.jpg" alt="cart" /></a>

												</div>

												<div class="mycart-item-text">

													<p><a class="mycart-title" href="cart.html">Donec ac tempus</a></p>

													<a href="#" class="cart-price"><strong>1</strong><sub>x</sub> <span>$190.00</span></a>

												</div>

											</div>

											<div class="mycart-item-edit">

												<a href="#" class="item-edit" title="edit">Edit Item</a>

												<a href="#" class="item-delete" title="delete">delete Item</a>

											</div>

										</div>

										<div class="total-calculate">

											<p><span>subtotal</span> $980.00<a class="topcart-check-btn" href="checkout.html">checkout</a></p>

										</div>

									</div>			

								</div>

							</div>

							<!-- top-shoping-cart end -->	

















							</div>
						</div>
					</div>
				</div>
				<!-- header-middle end -->

			<!-- header-bottom start -->

			<div class="header-bottom">

				<div class="container">

					<div class="row">

						<!-- left-category-menu-area start -->

						<div class="col-xs-12 col-md-3">

							<div class="left-category-menu-area">

								<h3 class="cat-toggle-heading">category</h3>

								<div class="none-menu left-category-menu">

									<ul>

										<li>

											<a href="shop-grid.html">Games & Software</a><p>Extensive games such as games online</p>

											<div class="left-cat-dropdown left-cat-1">

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Desktops</a>

														<a href="shop-grid.html">Accessories</a>

														<a href="shop-grid.html">Car Electronics</a>

														<a href="shop-grid.html">Cell Phones</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Accessories</a>

														<a href="shop-grid.html">Accessories</a>

														<a href="shop-grid.html">Car Electronics</a>

														<a href="shop-grid.html">Cell Phones</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

												</div>

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Phones</a>

														<a href="shop-grid.html">Accessories</a>

														<a href="shop-grid.html">Car Electronics</a>

														<a href="shop-grid.html">Cell Phones</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Electronics</a>

														<a href="shop-grid.html">Accessories</a>

														<a href="shop-grid.html">Car Electronics</a>

														<a href="shop-grid.html">Cell Phones</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

												</div>

												<div class="single-cat-dropdown">

													<a href="shop-grid.html"><img src="img/add/11.jpg" alt="product image" /></a>

												</div>

											</div>

										</li>

										<li><a href="shop-grid.html">Laptop & Computer</a><p>Shop for multiple laptop styles includin</p>

											<div class="left-cat-dropdown left-cat-2">

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Bags</a>

														<a href="shop-grid.html">Video & Home</a>

														<a href="shop-grid.html">Home Surveillance</a>

														<a href="shop-grid.html">Cell Phones</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Telecommunications‎</a>

														<a href="shop-grid.html">Lingerie</a>

														<a href="shop-grid.html">Electronics</a>

														<a href="shop-grid.html">Home Telephones</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

												</div>

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Portable Audio</a>

														<a href="shop-grid.html">Communication</a>

														<a href="shop-grid.html">Handbag</a>

														<a href="shop-grid.html">Vintage Electronics</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Clothing</a>

														<a href="shop-grid.html">Funiture</a>

														<a href="shop-grid.html">Car Electronics</a>

														<a href="shop-grid.html">Lifestyle</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

												</div>

											</div>										

										</li>

										<li><a href="shop-grid.html">Fashion & Dress</a><p>Offers a wide range of women's accessori</p>

											<div class="left-cat-dropdown left-cat-3">

												<div class="single-cat-dropdown">

													<a href="shop-grid.html"><img src="img/add/menuadd3.jpg" alt="product image" /></a>

												</div>											

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Footwear Man</a>

														<a href="shop-grid.html">Gold Ring</a>

														<a href="shop-grid.html">Platinum Rings</a>

														<a href="shop-grid.html">Silver Ring</a>

														<a href="shop-grid.html">Tungsten Ring</a>					

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Footwear Womens</a>

														<a href="shop-grid.html">Bands Gold</a>

														<a href="shop-grid.html">Platinum Bands</a>

														<a href="shop-grid.html">Silver Bands</a>

														<a href="shop-grid.html">Tungsten Bands</a>					

													</div>

												</div>

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Rings</a>

														<a href="shop-grid.html">Platinum Bracelets</a>

														<a href="shop-grid.html">Gold Ring</a>

														<a href="shop-grid.html">Silver Ring</a>

														<a href="shop-grid.html">Diamond Bracelets</a>					

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Bands</a>

														<a href="shop-grid.html">Platinum Necklaces </a>

														<a href="shop-grid.html">Gold Ring</a>

														<a href="shop-grid.html">Silver Ring</a>

														<a href="shop-grid.html">Sunglasses</a>					

													</div>

												</div>

											</div>										

										</li>

										<li><a href="shop-grid.html">Toys & Kids</a><p>Find toys and kids belongings for child</p>

											<div class="left-cat-dropdown left-cat-4">

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Rings</a>

														<a href="shop-grid.html">Babies  2 months</a>

														<a href="shop-grid.html">3+ Years</a>

														<a href="shop-grid.html">Little Kids  1-5 years</a>

														<a href="shop-grid.html">Big Kids  6-9 years</a>					

													</div>

												</div>

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Dresses</a>

														<a href="shop-grid.html">Toys Just Landed</a>

														<a href="shop-grid.html">Shop All Toys</a>

														<a href="shop-grid.html">Clog sandals</a>

														<a href="shop-grid.html">Combat Boots</a>					

													</div>

												</div>

												<div class="no-margin-r single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Accessories</a>

														<a href="shop-grid.html">Bootees Bags</a>

														<a href="shop-grid.html">Blazers</a>

														<a href="shop-grid.html">Jackets</a>

														<a href="shop-grid.html">Shoes</a>					

													</div>

												</div>

												<div class="menu-bottom-img-add">

													<a href="shop-grid.html"><img src="img/add/menuadd.jpg" alt="product image" /></a>

													<a href="shop-grid.html"><img src="img/add/menuadd4.jpg" alt="product image" /></a>

												</div>

											</div>											

										</li>

										<li><a href="shop-grid.html">Sport & Healthy</a><p>Get your health, fitness and personal ca</p>

											<div class="left-cat-dropdown left-cat-5">

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Nightwear</a>

														<a href="shop-grid.html">Briefs</a>

														<a href="shop-grid.html">Camis</a>

														<a href="shop-grid.html">Cell Phones</a>

														<a href="shop-grid.html">Shapewear</a>					

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Shoes</a>

														<a href="shop-grid.html">Digital SLRs</a>

														<a href="shop-grid.html">Digital Software</a>

														<a href="shop-grid.html">TV & Video</a>

														<a href="shop-grid.html">Books</a>					

													</div>

												</div>

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Handbags</a>

														<a href="shop-grid.html">Blazers</a>

														<a href="shop-grid.html">table</a>

														<a href="shop-grid.html">coats</a>

														<a href="shop-grid.html">kids</a>					

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Clothing</a>

														<a href="shop-grid.html">T-shirts</a>

														<a href="shop-grid.html">coats</a>

														<a href="shop-grid.html">Jackets</a>

														<a href="shop-grid.html">Desktops & Key</a>					

													</div>

												</div>

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">jeans</a>

														<a href="shop-grid.html">Cell Phones</a>

														<a href="shop-grid.html">Desktops & Key</a>

														<a href="shop-grid.html">Accessories</a>

														<a href="shop-grid.html">Car Electronics</a>

													</div>

													<div class="single-cat-item">

														<a href="shop-grid.html"><img src="img/add/menuadd2.png" alt="product image" /></a>

													</div>

												</div>

											</div>												

										</li>

										<li class="extra_menu"><a href="shop-grid.html">Accessories</a>

											<div class="left-cat-dropdown left-cat-6">

												<div class="single-cat-dropdown">

													<div class="single-cat-item">

														<a href="shop-grid.html" class="single-cat-dropdown-title">Desktops</a>

														<a href="shop-grid.html">Accessories</a>

														<a href="shop-grid.html">Exercise & Fitness</a>

														<a href="shop-grid.html">Fitness Tech</a>

														<a href="shop-grid.html">Indoor Games</a>					

														<a href="shop-grid.html">Play Centres</a>					

														<a href="shop-grid.html">Pools & Slides</a>					

														<a href="shop-grid.html">Skateboarding</a>					

													</div>

												</div>

											</div>											

										</li>

									</ul>

									<div class="more-cat">

										<span class="more-view">More Categories</span>

									</div>									

								</div>

							</div>

						</div>

						<!-- left-category-menu-area end -->

						<!-- mainmenu start -->						

						<div class="col-xs-12 col-md-9">

							<div class="mainmenu">

								<nav>

									<ul>

											<li class="active"><a href="<?php echo site_url();?>">Home</a></li>
											<li><a href="#">Category</a><i class="fa fa-angle-down"></i>
												<ul>
													<?php foreach($cats as $row){?>												
													<li><a href="<?php echo site_url('cs/products_by_category?&id='.$row->id);?>"><?php echo $row->name;?></a></li>
													<?php } ?>													
												</ul>											
											</li>
											<li><a href="<?php echo site_url('cs/new_product');?>">New Product</a></li>
											<li><a href="<?php echo site_url('cs/offered_product');?>">Offerd Product</a></li>
											<li><a href="#">Brand Products</a><i class="fa fa-angle-down"></i>
												<ul>
												<?php foreach($brands as $brand) { ?>
													<li><a href="<?php echo site_url('cs/brand_product?&id='.$brand->id);?>"><?php echo $brand->name;?></a></li>
												<?php } ?>
													<li><a href="<?php echo site_url('cs/brand_product');?>">All Brands</a></li>
													<li><a href="<?php echo site_url('cs/brand_product?brand_id=none');?>">Non Brand</a></li>
												</ul>											
											</li>
											<li><a href="<?php echo site_url('cs/about_us');?>">About Us</a></li>
											

											<li><a href="<?php echo site_url('cs/contact_us');?>">Contact Us</a></li>

									</ul>

								</nav>

							</div>

						</div>

						<!-- mainmenu end -->

					</div>

					<!-- mobile menu start -->

					<div class="row">

						<div class="col-sm-12 mobile-menu-area">

							<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">

								<span class="mobile-menu-title">Menu</span>

								<nav>

									<ul>
											<li class="active"><a href="<?php echo site_url();?>">Home</a></li>
											<li><a href="#">Category</a><i class="fa fa-angle-down"></i>
												<ul>
													<?php foreach($cats as $row){?>												
													<li><a href="<?php echo site_url('cs/products_by_category?&id='.$row->id);?>"><?php echo $row->name;?></a></li>
													<?php } ?>													
												</ul>											
											</li>
											<li><a href="<?php echo site_url('cs/new_product');?>">New Product</a></li>
											<li><a href="<?php echo site_url('cs/offered_product');?>">Offerd Product</a></li>
											<li><a href="#">Brand Products</a><i class="fa fa-angle-down"></i>
												<ul>
												<?php foreach($brands as $brand) { ?>
													<li><a href="<?php echo site_url('cs/brand_product?&id='.$brand->id);?>"><?php echo $brand->name;?></a></li>
												<?php } ?>
													<li><a href="<?php echo site_url('cs/brand_product');?>">All Brands</a></li>
													<li><a href="<?php echo site_url('cs/brand_product?brand_id=none');?>">Non Brand</a></li>
												</ul>											
											</li>
											<li><a href="<?php echo site_url('cs/about_us');?>">About Us</a></li>
											<li><a href="<?php echo site_url('cs/shoping_cart');?>">Cart</a></li>

											<li><a href="<?php echo site_url('cs/contact_us');?>">Contact Us</a></li>


									</ul>

								</nav>

							</div>						

						</div>

					</div>

					<!-- mobile menu end -->					

				</div>

			</div>

			<!-- header-bottom end -->

			</header>
			<!-- header-area end -->