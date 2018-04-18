<?php
session_start();
$session = session_id();
$product_code = isset($_GET['product_code'])?$_GET['product_code'] : '';

?>


<div style="background-color:white; border-top:1px solid #cccccc; border-bottom:1px solid #cccccc; padding-left:50px; padding-right:50px;">
<h1>LITS-BD.COM ONLINE STORE</h1>


<p style="width:100%; height: 30px; text-align:right; background-color:#cccccc;"><b> <a href="<?php echo $site_url; ?>/index.php?page=ecomm_view_cart" style="background-color:black; display:block; width:150px; padding-top:5px; height: 30px; float:right; text-align:center;">View Cart</a> </b></p>
<?php
$result = mysqli_query($con,"SELECT name, description, price FROM ecomm_products WHERE product_code=$product_code;"); 
$odd = true;
while($row=mysqli_fetch_array($result)){ 

$product_name=$row['name']; 
$product_description=$row['description'];
$price=$row['price'];

	?>

<h2><?php echo $product_name; ?></h2>

<table border="2" width="100%">
<tr>
<td rowspan="4"> <img src="images/productimages/<?php echo $product_code ?>_t.png" alt="product_image"/> </td>
<td><?php echo $product_description ?></td>
</tr>

<tr>
<td> <strong>Product Code:</strong><?php echo $product_code ?></td>
</tr> <tr>
<td> <strong> Price: </strong> <?php echo $price ?> &nbsp;TK </td>
</tr>

 <tr>
<td>

<form method="post" action="<?php echo $site_url; ?>/index.php?page=ecomm_update_cart">
<div>
<input type="hidden" name="product_code" value="<?php echo $product_code; ?>"/>
<label for="qty">Quantity: </label>
<?php
echo '<input type="hidden" name="redirect" value="index.php?page=ecomm_view_product&'.
'product_code='.$product_code.'"/>';




$resultqty = mysqli_query($con,"SELECT session, qty FROM ecomm_temp_cart WHERE product_code=$product_code;"); 

$rowqty=mysqli_fetch_array($resultqty);


if ($session==$rowqty['session']){$qty=$rowqty['qty']; echo '<input type="text" name="qty" id="qty" size="2" maxlength="2" value="'.$qty.'"/>';}
else{$qty=0; echo '<input type="text" name="qty" id="qty" size="2" maxlength="2" value="'.$qty.'"/>';}



if ($qty > 0) {
echo '<input type="submit" name="submit" value="Change Qty"/>';
} else {
echo '<input type="submit" name="submit" value="Add to Cart"/>';
}
?>



</div>
</form>






</td>
</tr>


</table>


<?php

}
?>
</div>