<?php


$session = session_id();

echo "session = $session";
$qty = (isset($_POST['qty']) && ctype_digit($_POST['qty'])) ? $_POST['qty'] : 0;
echo "qty=$qty";
$product_code = (isset($_POST['product_code']))? $_POST['product_code'] : '';
echo "product code=$product_code";
$action = (isset($_POST['submit']))? $_POST['submit']:'';
echo "action=$action";
$redirect = (isset($_POST['redirect']))? $_POST['redirect']:'ecomm_shop.php';
echo "redirect=$redirect";


switch ($action) {

case "Add to Cart": if (!empty($product_code) && $qty > 0) {
mysqli_query($con,"INSERT INTO ecomm_temp_cart (session, product_code, qty) VALUES ('$session','$product_code','$qty')");
}


redirect($redirect);
exit();

break;



case "Change Qty": if (!empty($product_code)) {
if ($qty > 0) { mysqli_query($con,"UPDATE `lits_bd`.`ecomm_temp_cart` SET `qty` = '$qty' WHERE `ecomm_temp_cart`.`session` = '$session' AND `ecomm_temp_cart`.`product_code` = '$product_code';");} 
else { mysqli_query($con,"DELETE FROM `lits_bd`.`ecomm_temp_cart` WHERE `ecomm_temp_cart`.`session` = '$session' AND`ecomm_temp_cart`.`product_code` = '$product_code'");}

	}

redirect($redirect);
exit();

break;

case 'Empty Cart': mysqli_query($con, "DELETE FROM `lits_bd`.`ecomm_temp_cart` WHERE `ecomm_temp_cart`.`session` = '$session'");

redirect($redirect);
exit();

break;




default:
redirect($redirect);
exit();


}
?>