jQuery(document).ready(function()
{
    jQuery("#conditional_field_8-1").attr('maxlength','4');
	updateCountdown();
    jQuery('#conditional_field_8-1').change(updateCountdown);
    jQuery('#conditional_field_8-1').keyup(updateCountdown);
});
function updateCountdown() {
    // 4 is the max message length
    var remaining = 4 - jQuery('#conditional_field_8-1').val().length;
    jQuery('.field-8-countdown').html('<label for="order_comments">Order Notes: </label>' + remaining + ' characters remaining.');
}