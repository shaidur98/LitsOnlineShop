
       <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

<p>
<h1>LITS-BD.COM ONLINE STORE</h1>
<h2>Order Checkout</h2>
<ol>
<li> <strong>Enter Billing and Shipping Information</strong> </li>
<li> Verify Accuracy of Order Information and Send Order </li>
<li>Order Confirmation and Receipt</li>
</ol>

</p>

<div class="col-lg-12">

<form method="post" action="<?php echo site_url('cs/ecomm_checkout2'); ?>">


<div class="col-lg-6">

<table width="100%">
<tr>
<th colspan="2">Billing Information</th>
</tr>


<tr>
<td style="padding-top:10px;"> <label for="first_name">First Name:</label> </td>
<td style="padding-top:10px;"> <input type="text"  class="form-control" id="first_name" name="first_name" size="20"
maxlength="20"/> </td>
</tr> <tr>
<td> <label for="last_name">Last Name:</label> </td>
<td> <input type="text" class="form-control" id="last_name" name="last_name" size="20"
maxlength="20"/> </td>
</tr> <tr>
<td> <label for="address_1">Billing Address:</label> </td>
<td> <input type="text" id="address_1" class="form-control" name="address_1" size="30" maxlength="50"/> </td>
</tr> <tr>
<td> </td>
<td> <input type="text" id="address_2" class="form-control" name="address_2" size="30" maxlength="50"/> </td>
</tr> <tr>
<td> <label for="city"> City: </label> </td>
<td> <input type="text" id="city" class="form-control" name="city" size="20" maxlength="20"/> </td>
</tr> <tr>
<td> <label for="state"> State: </label> </td>
<td> <input type="text" id="state" class="form-control" name="state" size="2" maxlength="2"/> </td>
</tr> <tr>
<td> <label for="zip_code">Zip Code:</label> </td>
<td> <input type="text" id="zip_code" class="form-control" name="zip_code" size="5" maxlength="5"/> </td>
</tr> <tr>
<td> <label for="phone">Phone Number:</label> </td>
<td> <input type="text" id="phone" class="form-control" name="phone" size="10" maxlength="10"/> </td>
</tr> <tr>
<td> <label for="email">Email Address:</label> </td>
<td> <input type="text" id="email" class="form-control" name="email" size="30" maxlength="100"/></td>
</tr> <tr>
<td colspan="2" style="text-align: left;">
<input type="checkbox" id="same_info" name="same_info" checked="checked"/>
<label for="same_info">Shipping information is same as billing</label>
</td>
</tr>
</table>
</div>



<div class="col-lg-6">
<table width="100%" id="shipping_table" style="display:none;">
<tr>
<th colspan="2">Shipping Information</th>
</tr> <tr>
<td style="padding-top:10px;"> <label for="shipping_first_name">First Name:</label> </td>
<td style="padding-top:10px;"> <input type="text" id="shipping_first_name" class="form-control" name="shipping_first_name" size="20" maxlength="20"/> </td>
</tr> <tr>
<td> <label for="shipping_last_name">Last Name:</label> </td>
<td> <input type="text" id="shipping_last_name" class="form-control" name="shipping_last_name" size="20" maxlength="20"/> </td>
</tr> <tr>
<td> <label for="shipping_address_1">Shipping Address:</label> </td>
<td> <input type="text" id="shipping_address_1" class="form-control" name="shipping_address_1" size="30" maxlength="50"/> </td>
</tr> <tr>
<td> </td>
<td> <input type="text" id="shipping_address_2" class="form-control" name="shipping_address_2" size="30" maxlength="50"/> </td>
</tr> <tr>
<td> <label for="shipping_city"> City: </label> </td>
<td> <input type="text" id="shipping_city" class="form-control" name="shipping_city" size="20" maxlength="20"/> </td>
</tr> <tr>
<td> <label for="shipping_state"> State: </label> </td>
<td> <input type="text" id="shipping_state" class="form-control" name="shipping_state" size="2" maxlength="2"/> </td>
</tr> <tr>
<td> <label for="shipping_zip_code">Zip Code:</label> </td>
<td> <input type="text" id="shipping_zip_code" class="form-control" name="shipping_zip_code" size="5" maxlength="5"/> </td>
</tr> <tr>
<td> <label for="shipping_phone">Phone Number:</label> </td>
<td> <input type="text" id="shipping_phone" class="form-control" name="shipping_phone" size="10" maxlength="10"/> </td>
</tr> <tr>
<td> <label for="shipping_email">Email Address:</label> </td>
<td> <input type="text" id="shipping_email" class="form-control" name="shipping_email" size="30" maxlength="100"/>
</td>
</tr>
</table>
</div>

<div class="col-lg-6">
<input type="submit" value="Proceed to Next Step"/>
</div>


</form>

</div>


</div>
</div>
</div>


