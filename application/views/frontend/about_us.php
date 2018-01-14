		<!-- main content area start  -->
		<section class="main-content-area">
			<div class="container">
				<!-- bradcame start -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="greentect_bradcame">
							<ul>
								<li><a href="<?php echo site_url();?>">home</a></li>
								<li>About Us</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- bradcame end -->		
				<!-- about-me start -->
				<div class="row about-me">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="about-greentech-text">
							<h1><?php echo $about_us->title;?></h1>
							<?php echo $about_us->description;?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="about-greentech-img">
							<img src="<?php echo base_url().'uploads/about_us_img/'.$about_us->about_us_img; ?>" alt="" />
						</div>					
					</div>
				</div>
				<!-- about-me end -->

				<!-- creative-member-area end -->
				<div class="row creative-member-area">	
					<div class="about-sec-head">
						<h2 class="creative-member">our creative <strong>member</strong></h2>
						<p>Our skill is really high quality and standard for build your project.</p>
					</div>

					<?php $counter = 0; foreach($members as $row2) { $counter++;?>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="single-creative-member">
							<div class="member-image">
								<img src="<?php echo base_url().'uploads/member_img/'.$row2->photo; ?>" alt="" />
								<div class="member-title">
									<h2><?php echo $row2->name;?></h2>
									<h3><?php echo $row2->designation;?></h3>									
								</div>
							</div>
							<div class="member-info">
								<p><?php echo $row2->email;?></p>
								<div class="member-social">
									<a class="m-facebook" href="#"><i class="fa fa-facebook"></i></a>
									<a class="m-twitter" href="#"><i class="fa fa-twitter"></i></a>
									<a class="m-g-plus" href="#"><i class="fa fa-google-plus"></i></a>
									<a class="m-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>



				</div>
				<!-- creative-member-area end -->

				<!-- divider-border start -->
				<div class="col-xs-12 divider-border"></div>
				<!-- divider-border end -->				
				<!-- client-area start -->
				<!-- <div class="row client-area">
					<div class="col-xs-12 col-sm-12 client-say">
						<div class="about-sec-head">
							<h2>What Client <strong>Say</strong></h2>
							<p>Lorem ipsum scelerisque molestie id molestie magna ante etiam</p>		
						</div>
						<div class="what-client-say">
							<div class="single-item-testi">
								<div class="client-image">
									<img src="<?php echo base_url();?>assets/frontend/img/about-us/testi1.jpg" alt="" />
								</div>
								<div class="client-text">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
									<h2>ROSE</h2>
									<p class="client-info">-- Graphics Designer --</p>
								</div>
							</div>
							<div class="single-item-testi">
								<div class="client-image">
									<img src="<?php echo base_url();?>assets/frontend/img/about-us/testi2.jpg" alt="" />
								</div>
								<div class="client-text">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
									<h2>TERESA</h2>
									<p class="client-info">-- Web Developer --</p>
								</div>
							</div>
							<div class="single-item-testi">
								<div class="client-image">
									<img src="<?php echo base_url();?>assets/frontend/img/about-us/testi3.jpg" alt="" />
								</div>
								<div class="client-text">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
									<h2>MONICA</h2>
									<p class="client-info">-- Market Research --</p>
								</div>
							</div>
							<div class="single-item-testi">
								<div class="client-image">
									<img src="<?php echo base_url();?>assets/frontend/img/about-us/testi4.jpg" alt="" />
								</div>
								<div class="client-text">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,…</p>
									<h2>KATRINA</h2>
									<p class="client-info">-- Programmer --</p>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- client-area end -->				
			</div>	
		</section>
		<!-- main content area end  -->

