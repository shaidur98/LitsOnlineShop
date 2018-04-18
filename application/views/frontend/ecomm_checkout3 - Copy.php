
<?php
$now = date('Y-m-d H:i:s');
$session = session_id();
$first_name = $_POST['first_name'];
echo"<h1>".$first_name."</h1>";
$last_name = $_POST['last_name'];
$address_1 = $_POST['address_1'];
$address_2 = $_POST['address_2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip_code'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$shipping_first_name = $_POST['shipping_first_name'];
$shipping_last_name = $_POST['shipping_last_name'];
$shipping_address_1 = $_POST['shipping_address_1'];
$shipping_address_2 = $_POST['shipping_address_2'];
$shipping_city = $_POST['shipping_city'];
$shipping_state = $_POST['shipping_state'];
$shipping_zip_code = $_POST['shipping_zip_code'];
$shipping_phone = $_POST['shipping_phone'];
$shipping_email = $_POST['shipping_email'];


// assign customer id to new customer, or find existing customer id

$query = $this->db->query("SELECT
customer_id
FROM
ecomm_customers
WHERE
first_name = '$first_name' AND
last_name = '$last_name' AND
address_1 = '$address_1' AND
address_2 = '$address_2' AND
city = '$city' AND
state = '$state' AND
zip_code = '$zip_code' AND
phone = '$phone' AND
email = '$email'");



$row_count = $this->db->query("SELECT
customer_id
FROM
ecomm_customers
WHERE
first_name = '$first_name' AND
last_name = '$last_name' AND
address_1 = '$address_1' AND
address_2 = '$address_2' AND
city = '$city' AND
state = '$state' AND
zip_code = '$zip_code' AND
phone = '$phone' AND
email = '$email'")->num_rows();

if ($row_count > 0) {

extract($row);


}else{

$this->db->query("INSERT INTO ecomm_customers
(customer_id, first_name, last_name, address_1, address_2, city,
state, zip_code, phone, email)
VALUES
(NULL,'.$first_name.','.$last_name.','.$address_1.','.$address_2.','.$city.','.$state.',
'.$zip_code.',
'.$phone.',
'.$email.')");
 $customer_id = $this->db->insert_id();

}


// start order entry

$this->db->query("INSERT into ecomm_orders
(order_id, order_date, customer_id, cost_subtotal, cost_total,
shipping_first_name, shipping_last_name, shipping_address_1,
shipping_address_2, shipping_city, shipping_state, shipping_zip_code,
shipping_phone, shipping_email)
VALUES
(NULL,
'$now',
'$customer_id',
0.00,
0.00,
'$shipping_first_name',
'$shipping_last_name',
'$shipping_address_1',
'$shipping_address_2',
'$shipping_city',
'$shipping_state',
'$shipping_zip_code',
'$shipping_phone',
'$shipping_email'");

$order_id = mysqli_insert_id($con);

// Move order information from ecomm_temp_cart into ecomm_order_details

$this->db->query("INSERT INTO ecomm_order_details
(order_id, order_qty, product_code)
SELECT
'.$order_id.', qty, product_code
FROM
ecomm_temp_cart
WHERE
session = '.$session.'");


$this->db->query("DELETE FROM ecomm_temp_cart WHERE session = '.$session.'");



// retrieve subtotal

$this->db->query("SELECT
SUM(price * order_qty) AS cost_subtotal
FROM
ecomm_order_details d JOIN ecomm_products p ON
d.product_code = p.product_code
WHERE
order_id = '.$order_id");

extract($row);


// calculate shipping, tax and total costs


$cost_shipping = round($cost_subtotal * 0.25, 2);
$cost_tax = round($cost_subtotal * 0.1, 2);
$cost_total = $cost_subtotal + $cost_shipping + $cost_tax;

// upate costs in ecomm_orders

$this->db->query("UPDATE ecomm_orders
SET
cost_subtotal = '.$cost_subtotal.',
cost_shipping = '. $cost_shipping.',
cost_tax = '.$cost_tax.',
cost_total = '. $cost_total.'
WHERE
order_id = '.$order_id");

ob_start();

?>


<html>
<head>
<title>Order Confirmation</title>
<style type="text/css">
th { background-color: #999;}
td { vertical-align: top; }
.odd_row { background-color: #EEE; }
.even_row { background-color: #FFF; }
</style>
</head>
<body background-color="white">
<div style="background-color:white; border-top:1px solid #cccccc; border-bottom:1px solid #cccccc; padding-left:50px; padding-right:50px;">
<?php
$html_head = ob_get_contents();
ob_clean();
?>
<p> Here is a recap of your order: </p>
<p>Order Date: <?php echo $now; ?> </p>
<p>Order Number: <?php echo $order_id; ?> </p>
<table>
<tr>
<td>
<table>
<tr>
<th colspan="2">Billing Information</th>
</tr> <tr>
<td>First Name:</td>
<td> <?php echo htmlspecialchars($first_name);?> </td>
</tr> <tr>
<td>Last Name:</td>
<td> <?php echo htmlspecialchars($last_name);?> </td>
</tr> <tr>
<td>Billing Address:</td>
<td> <?php echo htmlspecialchars($address_1);?> </td>
</tr> <tr>
<td> </td>
<td> <?php echo htmlspecialchars($address_2);?> </td>
</tr> <tr>
<td> City: </td>
<td> <?php echo htmlspecialchars($city);?> </td>
</tr> <tr>
<td> State: </td>
<td> <?php echo htmlspecialchars($state);?> </td>
</tr> <tr>
<td>Zip Code:</td>
<td> <?php echo htmlspecialchars($zip_code);?> </td>
</tr> <tr>
<td>Phone Number:</td>
<td> <?php echo htmlspecialchars($phone);?> </td>
</tr> <tr>
<td>Email Address:</td>
<td> <?php echo htmlspecialchars($email);?> </td>
</td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<th colspan="2">Shipping Information</th>
</tr> <tr>
<td>First Name:</td>
<td> <?php echo htmlspecialchars($shipping_first_name);?> </td>
</tr> <tr>
<td>Last Name:</td>
<td> <?php echo htmlspecialchars($shipping_last_name);?> </td>
</tr> <tr>
<td>Billing Address:</td>
<td> <?php echo htmlspecialchars($shipping_address_1);?> </td>
</tr> <tr>
<td> </td>
<td> <?php echo htmlspecialchars($shipping_address_2);?> </td>
</tr> <tr>
<td> City: </td>
<td> <?php echo htmlspecialchars($shipping_city);?> </td>
</tr> <tr>
<td> State: </td>
<td> <?php echo htmlspecialchars($shipping_state);?> </td>
</tr> <tr>
<td>Zip Code:</td>
<td> <?php echo htmlspecialchars($shipping_zip_code);?> </td>
</tr> <tr>
<td>Phone Number:</td>
<td> <?php echo htmlspecialchars($shipping_phone);?> </td>
</tr> <tr>
<td>Email Address:</td>
<td> <?php echo htmlspecialchars($shipping_email);?> </td>
</tr>
</table>
</td>
</tr>
</table>
<table style="width: 75%;">
<tr>
<th>Item Code</th> <th>Item Name</th> <th> Quantity </th> <th>Price Each</th>
<th>Extended Price</th>
</tr>
<?php
$result=mysqli_query($con,'SELECT
p.product_code, order_qty, name, description, price
FROM
ecomm_order_details d JOIN ecomm_products p ON
d.product_code = p.product_code
WHERE
order_id = "'.$order_id.'"
ORDER BY
p.product_code ASC');

$rows = mysqli_num_rows($result);
$total = 0;
$odd = true;
while ($row = mysqli_fetch_array($result)) {
echo ($odd == true)? '<tr class="odd_row">':'<tr class="even_row">';
$odd = !$odd;
extract($row);
?>
<td> <?php echo $product_code; ?> </td>
<td> <?php echo $name; ?> </td>
<td> <?php echo $order_qty; ?> </td>
<td style="text-align: right;"> $ <?php echo $price; ?> </td>
<td style="text-align: right;"> $ <?php echo number_format($price * $order_qty, 2);?>
</td>
</tr>
<?php
}
?>
</table>
<p>Shipping: TK.<?php echo number_format($cost_subtotal, 2); ?> </p>
<p>Tax: TK.<?php echo number_format($cost_tax, 2); ?> </p>
<p> <strong>Total Cost: TK.<?php echo number_format($cost_total, 2); ?>
</strong> </p>
</div>
</body>
</html>
<?php
$html_body = ob_get_clean();
// display the page
echo $html_head;
?>
<h1>LITS-BD.COM ONLINE STORE</h1>
<h2>Order Checkout</h2>
<ol>
<li> Enter Billing and Shipping Information </li>
<li> Verify Accuracy of Order Information and Send Order </li>
<li> <strong>Order Confirmation and Receipt<strong> </li>
</ol>
<h3> A copy of this order has been emailed to you for your records. </h3>
<?php
echo $html_body;
// send email
$headers = array();
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset="iso-8859-1"';
$headers[] = 'Content-Transfer-Encoding: 7bit';
$headers[] = 'From: <store@example.com>';
$headers[] = 'Bcc: <store@example.com>';
mail($email, "Order Confirmation", $html_head.$html_body,
join("\r\n", $headers));
?>
