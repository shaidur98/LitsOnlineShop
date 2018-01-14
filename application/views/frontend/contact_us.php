
		<!-- main content area start  -->
		<section class="main-content-area">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<div class="page-sidebar-area">
							<!-- single-img-add start -->
							<div class="single-img-add single-sidebar">
								<a href="#"><img src="img/add/banner33.jpg" alt="banner33" /></a>
							</div>
							<!-- single-img-add end -->						

							<!-- vote area start -->
							<div class="community-vote single-sidebar">
								<?php $this->load->view('templates/acordion_list_template');?>

								<?php $this->load->view('templates/new_products_sidebar');?>								
							</div>
							<!-- vote area end -->								
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<div class="contact-us-area">
							<!-- google-map-area start -->
							<div class="google-map-area">
								<div class="google-map">
									<div id="googleMap" style="width:100%;height:310px;"></div>
								</div>
							</div>
							<!-- google-map-area end -->
							<!-- contact us form start -->
							<div class="contact-us-form">
								<div class="sec-heading-area">
									<h2>Contact US</h2>
								</div>
								<div class="contact-form">
									<span class="legend">Contact Information</span>
									<form action="#" method="post">
										<div class="form-top">
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>First Name <sup>*</sup></label>
												<input type="text" class="form-control" />
											</div>
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Last Name <sup>*</sup></label>
												<input type="text" class="form-control" />
											</div>
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Fax<sup>*</sup></label>
												<input type="text" class="form-control" />
											</div>
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Email <sup>*</sup></label>
												<input type="email" class="form-control" />
											</div>
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Subject <sup>*</sup></label>
												<input type="text" class="form-control" />
											</div>											
											<div class="form-group col-sm-6 col-md-6 col-lg-5">
												<label>Telephone <sup>*</sup></label>
												<input type="text" class="form-control" />
											</div>	
											<div class="form-group col-sm-12 col-md-12 col-lg-10">
												<label>Comment <sup>*</sup></label>
												<textarea class="yourmessage"></textarea>
											</div>												
										</div>
										<div class="submit-form form-group col-sm-12 submit-review">
											<p><sup>*</sup> Required Fields</p>
											<a href="#" class="add-tag-btn">Submit</a>
										</div>
									</form>
								</div>
							</div>
							<!-- contact us form end -->

						</div>					
					</div>
				</div>
			</div>	
		</section>
		<!-- main content area end  -->

