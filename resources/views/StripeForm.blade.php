<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/"></script>
<title>Document</title>
</head>
<body>
<form accept-charset="UTF-8" action=""
data-cc-on-file="false"
data-stripe-publishable-key="pk_test_51Hx51vDF9fotRLlU8pjZ4gMuQfwitpojiEk8W6shYrfBsHTvWOpn3FfrxBPrfeBwwOY7vUBRxf6YrA8PnfSYjts800HR4tMgOw"
id="payment-form" method="post">

<div class='form-row'>
<div class='col-xs-12 form-group required'>
<label class='control-label'>Name on Card</label> <input
class='form-control' size='4' type='text'>
</div>
</div>
<div class='form-row'>
<div class='col-xs-12 form-group card required'>
<label class='control-label'>Card Number</label> <input
autocomplete='off' class='form-control card-number' size='20'
type='text'>
</div>
</div>
<div class='form-row'>
<div class='col-xs-4 form-group cvc required'>
<label class='control-label'>CVC</label> <input autocomplete='off'
class='form-control card-cvc' placeholder='ex. 311' size='4'
type='text'>
</div>
<div class='col-xs-4 form-group expiration required'>
<label class='control-label'>Expiration</label> <input
class='form-control card-expiry-month' placeholder='MM' size='2'
type='text'>
</div>
<div class='col-xs-4 form-group expiration required'>
<label class='control-label'> </label> <input
class='form-control card-expiry-year' placeholder='YYYY' size='4'
type='text'>
</div>
</div>
<div class='form-row'>
<div class='col-md-12'>
<div class='form-control total btn btn-info'>
Total: <span class='amount'>$300</span>
</div>
</div>
</div>
<div class='form-row'>
<div class='col-md-12 form-group'>
<button class='form-control btn btn-primary submit-button'
type='submit' style="margin-top: 10px;" onclick="check()">Pay »</button>
</div>
</div>
<div class='form-row'>
<div class='col-md-12 error form-group hide'>
<div class='alert-danger alert'>Please correct the errors and try
again.</div>
</div>
</div>
</form>
</body>
<script>
function check(){
Stripe.setPublishableKey('pk_test_51Hx51vDF9fotRLlU8pjZ4gMuQfwitpojiEk8W6shYrfBsHTvWOpn3FfrxBPrfeBwwOY7vUBRxf6YrA8PnfSYjts800HR4tMgOw');

alert();


var data=Stripe.card.createToken({
number: $('.card-number').val(),
cvc: $('.card-cvc').val(),
exp_month: $('.card-expiry-month').val(),
exp_year: $('.card-expiry-year').val(),
address_zip: $('.address_zip').val()
}, stripeResponseHandler);

$.post("/abc", function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });

alert();
}




function stripeResponseHandler(status, response) {

// Grab the form:
var $form = $('#payment-form');

if (response.error) { // Problem!

// Show the errors on the form
$form.find('.payment-errors').text(response.error.message);
$form.find('button').prop('disabled', false); // Re-enable submission

} else { // Token was created!

// Get the token ID:
var token = response.id;

// Insert the token into the form so it gets submitted to the server:
$form.append($('<input type="hidden" name="stripeToken" />').val(token));

// Submit the form:
$form.get(0).submit();
alert(response);

}
}
</script>
</html>