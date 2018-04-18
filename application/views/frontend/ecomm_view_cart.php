
<div style="background-color:white; border-top:1px solid #cccccc; border-bottom:1px solid #cccccc; padding-left:50px; padding-right:50px;">
<h1>LITS-BD.COM ONLINE STORE</h1>
<?php
$session = session_id();

$query = $this->db->query('SELECT t.product_code, qty, name, product_img, description, price FROM ecomm_temp_cart t JOIN ecomm_products p ON
t.product_code = p.product_code WHERE session = "'. $session.'" ORDER BY t.product_code ASC');



$row_count = $this->db->query('SELECT t.product_code, qty, name, description, price FROM ecomm_temp_cart t JOIN ecomm_products p ON
t.product_code = p.product_code WHERE session = "'. $session.'" ORDER BY t.product_code ASC')->num_rows();

if($row_count == 1) {echo '<p> You currently have &nbsp;1 &nbsp; product in your cart. </p>';}else{echo '<p> You currently have &nbsp;'.$row_count.'&nbsp;products in your cart.</p>';}



if ($row_count > 0) {
?>
<table style="width: 100%; border:1px solid #cccccc;">
<tr style="width: 100px; background-color:#cccccc;">
<th> </th> <th>Item Name</th> <th> Quantity </th>
<th style="text-align:right;">Unit Price</th> <th style="text-align:right;">Extended Price</th>
</tr>
<?php
$total = 0;
$odd = true;


foreach ($query->result() as $row)
{



echo ($odd == true)?'<tr class="odd_row">':'<tr class="even_row">';
$odd = !$odd;

?>
<td style="text-align:center;"> <a href="index.php?page=ecomm_view_product&product_code=<?php echo $row->product_code;?>"> <img style="width:75px;" src="<?php echo base_url().'uploads/product_img/'.$row->product_img; ?>" alt="<?php echo $row->name;?>"/> </a> </td>
<td> <a style="color:black;" href="index.php?page=ecomm_view_product&product_code=<?php echo $row->product_code;?>"> <?php echo $row->name;?> </a> </td>
<td> <form method="post" action="<?php echo site_url('cs/ecomm_update_cart'); ?>">
<div>
<input type="text" name="qty" maxlength="2" size="2" value="<?php echo $row->qty; ?> "/>
<input type="hidden" name="product_code" value="<?php echo $row->product_code; ?>"/>
<input type="hidden" name="redirect" value="<?php echo site_url('cs/shoping_cart'); ?>"/>
<input type="submit" name="submit" value="Change Qty"/>
</div>
</form>
</td>
<td style="text-align: right;"> TK.<?php echo $row->price; ?> </td>
<td style="text-align: right;"> TK. <?php echo number_format
($row->price * $row->qty, 2); ?>
</td>
</tr>
<?php
$total = $total + $row->price * $row->qty;
}
?>
</table>
<br>
<p> Your total before shipping is:
<strong> TK. <?php echo number_format($total, 2); ?> </strong> </p>
<form method="post" action="<?php echo site_url('cs/ecomm_checkout'); ?>">
<div>
<input type="submit" name="submit" value="Proceed to Checkout" style="font-weight: bold;"/>
</div>
</form>
<form method="post" action="<?php echo site_url('cs/ecomm_update_cart'); ?>">
<div>
<input type="hidden" name="redirect" value="<?php echo site_url('cs/shoping_cart'); ?>"/>
<input type="submit" name="submit" value="Empty Cart"/>
</div>
</form>
<?php
}
?>
<hr/>
<p style="width:100%; height: 30px; text-align:right; background-color:#cccccc;"><b> <a href="<?php echo site_url(); ?>" style="background-color:black; display:block; width:150px; padding-top:5px; height: 30px; float:left; text-align:center;">Back to main page</a> </b></p>

</div>
