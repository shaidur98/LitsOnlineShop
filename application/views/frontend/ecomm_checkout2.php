<?php


$session = session_id();
if (isset($_POST['same_info'])) {
$_POST['shipping_first_name'] = $_POST['first_name'];
$_POST['shipping_last_name'] = $_POST['last_name'];
$_POST['shipping_address_1'] = $_POST['address_1'];
$_POST['shipping_address_2'] = $_POST['address_2'];	
$_POST['shipping_city'] = $_POST['city'];
$_POST['shipping_state'] = $_POST['state'];
$_POST['shipping_zip_code'] = $_POST['zip_code'];
$_POST['shipping_phone'] = $_POST['phone'];
$_POST['shipping_email'] = $_POST['email'];
}
?>
<html>
<head>
<title>Checkout Step 2 of 3</title>
<style type="text/css">
th { background-color: #999;}
td { vertical-align: top; }
.odd_row { background-color: #EEE; }
.even_row { background-color: #FFF; }
</style>
</head>
<body background-color="white">
<div style="background-color:white; border-top:1px solid #cccccc; border-bottom:1px solid #cccccc; padding-left:50px; padding-right:50px;">
<h1>LITS-BD.COM ONLINE STORE</h1>
<h2>Order Checkout</h2>
<ol>
<li> Enter Billing and Shipping Information </li>
<li> <strong>Verify Accuracy of Order Information and Send Order</strong>
</li>
<li>Order Confirmation and Receipt</li>
</ol>

<?php
$session = session_id();

$query = $this->db->query('SELECT t.product_code, qty, name, product_img, description, price FROM ecomm_temp_cart t JOIN ecomm_products p ON t.product_code = p.product_code WHERE session = "'. $session.'" ORDER BY t.product_code ASC');



$row_count = $this->db->query('SELECT t.product_code, qty, name, description, price FROM ecomm_temp_cart t JOIN ecomm_products p ON
t.product_code = p.product_code WHERE session = "'. $session.'" ORDER BY t.product_code ASC')->num_rows();





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
<td><?php echo $row->qty;?></td>
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

<?php
}
?>

<br>
<p> Your total before shipping and tax is:
<strong> TK. <?php echo number_format($total, 2); ?> </strong> </p>
<table>
<tr>
<td>
<table>
<tr>
<th colspan="2">Billing Information</th>
</tr> <tr>
<td>First Name:</td>
<td> <?php echo htmlspecialchars($_POST['first_name']);?> </td>
</tr> <tr>
<td>Last Name:</td>
<td> <?php echo htmlspecialchars($_POST['last_name']);?> </td>
</tr> <tr>
<td>Billing Address:</td>
<td> <?php echo htmlspecialchars($_POST['address_1']);?> </td>
</tr> <tr>
<td> </td>
<td> <?php echo htmlspecialchars($_POST['address_2']);?> </td>
</tr> <tr>
<td> City: </td>
<td> <?php echo htmlspecialchars($_POST['city']);?> </td>
</tr> <tr>
<td> State: </td>
<td> <?php echo htmlspecialchars($_POST['state']);?> </td>
</tr> <tr>
<td>Zip Code:</td>
<td> <?php echo htmlspecialchars($_POST['zip_code']);?> </td>
</tr> <tr>
<td>Phone Number:</td>
<td> <?php echo htmlspecialchars($_POST['phone']);?> </td>
</tr> <tr>
<td>Email Address:</td>
<td> <?php echo htmlspecialchars($_POST['email']);?> </td>
</td>
</tr> <tr>
<td colspan="2" style="text-align: center;">
<?php
if (isset($_POST['same_info'])) {
echo 'Shipping information is same as billing.';
}
?>
</td>
</tr>
</table>
</td>
<td>
<?php
if (!isset($_POST['same_info'])) {
?>
<table>
<tr >
<th colspan="2">Shipping Information</th>
</tr> <tr>
<td>First Name:</td>
<td><?php echo htmlspecialchars($_POST['shipping_first_name']);?></td>
</tr> <tr>
<td>Last Name:</td>
<td><?php echo htmlspecialchars($_POST['shipping_last_name']);?></td>
</tr> <tr>
<td>Billing Address:</td>
<td><?php echo htmlspecialchars($_POST['shipping_address_1']);?></td>
</tr> <tr>
<td> </td>
<td><?php echo htmlspecialchars($_POST['shipping_address_2']);?></td>
</tr> <tr>
<td> City: </td>
<td> <?php echo htmlspecialchars($_POST['shipping_city']);?> </td>
</tr> <tr>
<td> State: </td>
<td> <?php echo htmlspecialchars($_POST['shipping_state']);?> </td>
</tr> <tr>
<td>Zip Code:</td>
<td> <?php echo htmlspecialchars($_POST['shipping_zip_code']);?> </td>
</tr> <tr>
<td>Phone Number:</td>
<td> <?php echo htmlspecialchars($_POST['shipping_phone']);?> </td>
</tr> <tr>
<td>Email Address:</td>
<td> <?php echo htmlspecialchars($_POST['shipping_email']);?> </td>
</td>
</tr>
</table>
<?php
}
?>
</td>
</tr>
</table>
<form method="post" action="<?php echo site_url('cs/ecomm_checkout3'); ?>">
<div>
<input type="submit" name="submit" value="Process Order"/>
<input type="hidden" name="first_name" value="<?php echo htmlspecialchars($_POST['first_name']);?>"/>
<input type="hidden" name="last_name" value="<?php echo htmlspecialchars($_POST['last_name']);?>"/>
<input type="hidden" name="address_1" value="<?php echo htmlspecialchars($_POST['address_1']);?>"/>
<input type="hidden" name="address_2" value="<?php echo htmlspecialchars($_POST['address_2']);?>"/>
<input type="hidden" name="city" value="<?php echo htmlspecialchars($_POST['city']);?>"/>
<input type="hidden" name="state" value="<?php echo htmlspecialchars($_POST['state']);?>"/>
<input type="hidden" name="zip_code" value="<?php echo htmlspecialchars($_POST['zip_code']);?>"/>
<input type="hidden" name="phone" value="<?php echo htmlspecialchars($_POST['phone']);?>"/>
<input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']);?>"/>
<input type="hidden" name="shipping_first_name" value="<?php echo htmlspecialchars($_POST['shipping_first_name']);?>"/>
<input type="hidden" name="shipping_last_name" value="<?php echo htmlspecialchars($_POST['shipping_last_name']);?>"/>
<input type="hidden" name="shipping_address_1" value="<?php echo htmlspecialchars($_POST['shipping_address_1']);?>"/>
<input type="hidden" name="shipping_address_2" value="<?php echo htmlspecialchars($_POST['shipping_address_2']);?>"/>
<input type="hidden" name="shipping_city" value="<?php echo htmlspecialchars($_POST['shipping_city']);?>"/>
<input type="hidden" name="shipping_state" value="<?php echo htmlspecialchars($_POST['shipping_state']);?>"/>
<input type="hidden" name="shipping_zip_code" value="<?php echo htmlspecialchars($_POST['shipping_zip_code']);?>"/>
<input type="hidden" name="shipping_phone" value="<?php echo htmlspecialchars($_POST['shipping_phone']);?>"/>
<input type="hidden" name="shipping_email" value="<?php echo htmlspecialchars($_POST['shipping_email']);?>"/>
</div>
</form>

</div>
</body>
</html>
