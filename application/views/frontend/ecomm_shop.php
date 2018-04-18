


<div style="background-color:white; border-top:1px solid #cccccc; border-bottom:1px solid #cccccc; padding-left:50px; padding-right:50px;">
<h1>LITS-BD.COM ONLINE STORE</h1>
<p style="width:100%; height: 30px; text-align:right; background-color:#cccccc;"><b> <a href="<?php echo $site_url; ?>/index.php?page=ecomm_view_cart" style="background-color:black; display:block; width:150px; padding-top:5px; height: 30px; float:right; text-align:center;">View Cart</a></b> </p>
<p> Thanks for visiting our site! Please see our list of awesome products
below, and click on the link for more information: </p>
<table style="width:100%;">
<?php


$result = mysqli_query($con,"SELECT product_code, name, price FROM ecomm_products ORDER BY product_code ASC;"); 
$odd = true;
while($row=mysqli_fetch_array($result)){ 





echo ($odd == true)? '<tr class="odd_row">':'<tr class="even_row">';
$odd = !$odd;
extract($row);
echo '<td style="text-align:left; width:25%; padding-right:30px;"> <a href="'.
'index.php?page=ecomm_view_product&product_code='.$product_code.
'"> <img style="width:100px;"src="images/productimages/'.$product_code.'_t.png" alt="'.$name.
'"/></a> </td>';
echo '<td style="width:50%; padding-top:20px; padding-right:30px;"> <a href="index.php?page=ecomm_view_product&product_code='.$product_code.
'" style="color:black; font-size:18px; font-weight:bold;">'.$name.'</a> </td>';


echo '<td style="text-align: right; width:25%; padding-top:20px; padding-right:30px;">TK: <a href="index.php?page=ecomm_view_product&'.'product_code='.$product_code.'" style="font-size:18px; color:black; font-weight:bold;">'.$price.'</a> </td>';
echo '</tr>';
}
?>
</table>
</div>
