<?php
//session_start();
$session = session_id();
$product_code = isset($_GET['id'])?$_GET['id'] : '';

?>

		<!-- main content area start  -->
		<section class="main-content-area">
			<div class="container">
				<!-- bradcame start -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="greentect_bradcame">
							<ul>
								<li><a href="<?php echo site_url();?>">Computer Shop</a></li>
								<li><a href="<?php echo site_url('cs/single_product');?>">Single Product</a></li>
								<li>Details</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- bradcame end -->
				<!-- single page product information start -->
				<div class="single-product-page-area">
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<div class="single-product-image">
								<div class="single-pro-main-image">
									<a href="#"><img id="optima_zoom" src="<?php echo base_url().'uploads/product_img/'.$sdata->product_img; ?>" data-zoom-image="<?php echo base_url().'uploads/product_img/'.$sdata->product_img; ?>" alt="optima"/></a>
								</div>

							</div>							
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
							<div class="single-product-description">
								<div class="pro-desc">
									<h2><?php echo $sdata->name;?></h2>
								
									<span class="regular-price">$155.00</span>									
									<div class="product-content">
										<p> <strong>Product Code:&nbsp;</strong><?php echo $product_code ?></p>	
										<p><?php echo $sdata->description;?></p>

<form class="form-horizontal" method="post" action="<?php echo site_url('cs/ecomm_update_cart'); ?>" enctype="multipart/form-data">
	<input type="hidden" name="product_code" value="<?php echo $product_code; ?>"/>

										<br><table><tr><td style="padding:2px;">Quantity</td>
								<input type="hidden" name="redirect" value="<?php echo site_url('cs/single_product?id='.$product_code); ?>"/>



<td style="padding:2px; text-align:center;">

	<?php 
	$qty=0;
$is_exist = $this->db->get_where('ecomm_temp_cart',array('product_code'=>$product_code))->num_rows();


if ($is_exist > 0 && $session==$temp_cart->session){$qty=$temp_cart->qty; echo '<input type="text" name="qty" class="form-control" id="qty" size="2" maxlength="2" value="'.$qty.'"/>';}
else{$qty=0; echo '<input type="text" name="qty" class="form-control" id="qty" size="2" maxlength="2" value="'.$qty.'"/>';}
?>
</td><td style="padding:2px;">

<?php

if ($qty > 0) { 
echo '<input type="submit" name="submit" class="btn btn-danger" value="Change Qty"/>';
} else {
echo '<input type="submit" name="submit" class="btn btn-danger" value="Add to Cart"/>';
}
?>
</td>



</tr></table>


									</form>
									</div>
								</div>	
								<div class="single-product-social-share">
									<img src="img/social-share.jpg" alt="" />
								</div>										
							</div>	
						</div>
					</div>
					<!-- product description tab start -->
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="product-more-info-tab">
								<!-- Nav tabs -->
								<ul class="more-info-tab nav nav-tabs">
									<li class="active"><a href="#proDescription" data-toggle="tab">Product Overview</a></li>
								</ul>
								  <!-- Tab panes -->
								<div class="product-tab-content tab-content">
									<div class="tab-pane active" id="proDescription">
										<div class="tab-description">
											<h2>Overview</h2>
											<p><?php echo $sdata->product_overview;?></p>
										</div>
									</div>									
								</div>									
							</div>										
						</div>						
					</div>
					<!-- product description tab end -->
				</div>
				<!-- single page product information end -->


				<?php $this->load->view('templates/related_product_area');?>


			</div>	
		</section>
		<!-- main content area end  -->


