		<!-- main content area start  -->
		<section class="main-content-area">
			<div class="container">
				<!-- bradcame start -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="greentect_bradcame">
							<ul>
								<li><a href="<?php echo site_url();?>">home</a></li>
								<li>Shoping Cart</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- bradcame end -->		
				<!-- Shoping Cart Start -->


<h1>Comic Book Appreciation Store</h1>
<?php
//$session = session_id();
//$session_id = $this->session->userdata('session_id');
$session_id = session_id();
$item = $this->db->query("SELECT t.product_code, qty, name, description, price FROM ecomm_temp_cart t JOIN ecomm_products p ON
t.product_code = p.product_code WHERE session = "'. $session_id.'" ORDER BY t.product_code ASC");


if ($item->num_rows() > 0)
{
   foreach ($query->result() as $row)
   {

echo '<p> You currently have 1 product in your cart. </p>';
} else {
echo '<p> You currently have'.$item->num_rows().'products in your cart.</p>';



      echo $row->EmpID;
      echo $row->EmpName;
      echo $row->Designation;
   }
}

$rows = mysqli_num_rows($result);
if ($rows==1) {
echo '<p> You currently have 1 product in your cart. </p>';
} else {
echo '<p> You currently have'.$rows.'products in your cart.</p>';
}
if ($rows>0) {
?>
<table style="width: 75%;">
<tr>
<th style="width: 100px;"> </th> <th>Item Name</th> <th> Quantity </th>
<th>Unit Price</th> <th>Extended Price</th>
</tr>
<?php
$total = 0;
$odd = true;
while ($row = mysqli_fetch_array($result)) {
echo ($odd == true)?'<tr class="odd_row">':'<tr class="even_row">';
$odd = !$odd;
extract($row);
?>
<td style="text-align:center;"> <a href="index.php?page=ecomm_view_product&product_code=<?php echo $product_code;?>"> <img src="images/productimages/<?php echo $product_code;?>_t.png" alt="<?php echo $name;?>"/> </a> </td>
<td> <a href="index.php?page=ecomm_view_product&product_code=<?php echo $product_code;?>"> <?php echo $name;?> </a> </td>
<td> <form method="post" action="index.php?page=ecomm_update_cart">
<div>
<input type="text" name="qty" maxlength="2" size="2" value="<?php echo $qty; ?> "/>
<input type="hidden" name="product_code" value="<?php echo $product_code; ?>"/>
<input type="hidden" name="redirect" value="index.php?page=ecomm_view_cart"/>
<input type="submit" name="submit" value="Change Qty"/>
</div>
</form>
</td>
<td style="text-align: right;"> $<?php echo $price; ?> </td>
<td style="text-align: right;"> $ <?php echo number_format
($price * $qty, 2); ?>
</td>
</tr>
<?php
$total = $total + $price * $qty;
}
?>
</table>
<p> Your total before shipping is:
<strong> $ <?php echo number_format($total, 2); ?> </strong> </p>
<form method="post" action="index.php?page=ecomm_checkout">
<div>
<input type="submit" name="submit" value="Proceed to Checkout" style="font-weight: bold;"/>
</div>
</form>
<form method="post" action="index.php?page=ecomm_update_cart">
<div>
<input type="hidden" name="redirect" value="index.php?page=ecomm_shop"/>
<input type="submit" name="submit" value="Empty Cart"/>
</div>
</form>
<?php
}
?>
<hr/>
<p> <a href="index.php?page=ecomm_shop">Back to main page</a> </p>



				<!-- Shoping Cart end -->

				

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

