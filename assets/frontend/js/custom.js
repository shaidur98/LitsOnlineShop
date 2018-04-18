
window.onload = function() {
// assign toggle_shipping_visibility to same_info checkbox
var c = document.getElementById('same_info');
c.onchange = toggle_shipping_visibility;
}
function toggle_shipping_visibility() {
var c = document.getElementById('same_info');
var t = document.getElementById('shipping_table');
// update shipping table’s visibility
t.style.display = (c.checked)? 'none' : '';
}
