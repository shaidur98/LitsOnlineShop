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
							</div>
						</div>
					</div>
				</div>
				<!-- header-middle end -->
				<!-- header-bottom start -->
				<div class="header-bottom">
					<div class="container">
						<div class="row">	
							<!-- mainmenu start -->
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
						<!-- mobile menu end -->						
					</div>
				</div>
				<!-- header-bottom end -->
			</header>
			<!-- header-area end -->