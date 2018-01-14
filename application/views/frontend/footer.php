			<!-- footer-area start -->
			<footer class="footer-area">

				<!-- footer middle start -->
				<div class="footer-middle">
					<div class="container">
						<div class="t-b-border">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="newsletter-box">
										<form class="form-inline" method="post" action="#">
										  <div class="form-group news-form-group">
											<h2>Newsletter</h2>
											<input type="text" class="form-control news-form-con">
											<button class="news-btn" type="submit"><i class="fa fa-angle-right"></i></button>
										  </div>
										</form>								
									</div>							
								</div>
								<div class="col-xs-12 col-sm-6 col-md-2">
									<div class="social-share">
										<div class="social-icon">
											<ul>
												<li><a class="tw" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a class="gp" href="#"><i class="fa fa-google-plus"></i></a></li>
												<li><a class="fb" href="#"><i class="fa fa-facebook"></i></a></li>

											</ul>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4">
									<div class="copy-right-area">							
									<p class="copy-right"><a href="http://www.lits-bd.com" target="_blank">LITS | Total IT Solutions</a> &copy; Copyright 2018</p>
								</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
				<!-- footer middle end -->
			</footer>
			<!-- footer-area end -->
		</div>
		<!-- jquery js -->
		<script src="<?php echo base_url();?>assets/frontend/js/vendor/jquery-1.11.3.min.js"></script>
		<!-- jqueryui js -->
		<script src="<?php echo base_url();?>assets/frontend/js/jqueryui.js"></script>
		<!-- mobile menu js -->
		<script src="<?php echo base_url();?>assets/frontend/js/jquery.meanmenu.js"></script>		
		<!-- fancybox js -->
		<script src="<?php echo base_url();?>assets/frontend/js/jquery.fancybox.js"></script>
		<!-- elevatezoom js -->
		<script src="<?php echo base_url();?>assets/frontend/js/jquery.elevatezoom.js"></script>		
		<!-- bootstrap js -->
		<script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="<?php echo base_url();?>assets/frontend/js/owl.carousel.min.js"></script>
		<!-- owl.carousel js -->
		<script src="<?php echo base_url();?>assets/frontend/js/jquery.nivo.slider.pack.js"></script>
		<!-- jquery-counterup js -->
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.counterup.min.js"></script>		
		<!-- wow js -->
        <script src="<?php echo base_url();?>assets/frontend/js/wow.js"></script>		
		<script>
			new WOW().init();
		</script>
		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>	
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 14,
				scrollwheel: false,
				center: new google.maps.LatLng(38.907192, -77.036871)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/icon/map-marker.png',
				map: map
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);				
		</script>		
		<!-- main js -->
		<script src="<?php echo base_url();?>assets/frontend/js/main.js"></script>
	</body>

<!-- Mirrored from devitems.com/tf/greentech-preview/GreenTech/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2015 17:15:20 GMT -->
</html>