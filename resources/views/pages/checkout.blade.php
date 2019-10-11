@extends('layout')
@section('content')

<script src="https://js.stripe.com/v3/"></script>
<!-- Start Cart Area -->
            <div class="cart-main-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-tab-pill text-center text-uppercase mb-50">
                                <ul>
                                    <li><a data-toggle="pill" href="{{url('/show-cart')}}"><span>1</span> SHOPPING CART</a></li>
                                    <li class="active"><a data-toggle="pill" href="#checkout"><span>2</span> CHECKOUT</a></li>
                                    <li><a data-toggle="pill" href="#order"><span>3</span> ORDER COMPLETE</a></li>
                                </ul>
                            </div>                            
                        </div>
                    </div>
                    
				 <div role="tabpanel" class="tab-pane fade in active" id="checkout">
                                <div class="col-sm-6">
                                    <div class="checkbox-form">
                                        <h5 class="text-uppercase mb-40"><strong>SHIPPING DETAIL</strong></h5>
                                        <div class="row">
                                          <form action="{{url('/save-shipping-details')}}" method="post">
                                          	{{csrf_field()}}
                                            <div class="col-sm-6">
                                                <div class="shop-select">
                                                    <label>
                                                        First name
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="First name" name="shipping_first_name">
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="shop-select">
                                                    <label>
                                                        Last name
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="Last name" name="shipping_last_name">
                                                </div>                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="shop-select mtb-30">
                                                    <label>
                                                        Email Address
                                                    </label>
                                                    <input type="Email" placeholder="Email Address" name="shipping_email">
                                                </div>                                                
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="shop-select">
                                                    <label>
                                                        Mobile Number
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="Mobile Number" name="shipping_mobile_number">
                                                </div>                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="shop-select address-input mtb-30">
                                                    <label>
                                                        Address
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="Address line 1" name="shipping_address"> 
                                                </div>                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="shop-select mb-30">
                                                    <label>
                                                        City
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="City" name="shipping_city">
                                                </div>                                                
                                            </div>
                                            <br>
                                            <!-- <div class="col-md-12">
                                                <div class="shop-select mb-30">
                                                    <input type="submit" class="btn btn-warning" value="Done">
                                                </div>                                                
                                            </div> -->
                                            <!-- <div class="col-md-12">
                                                <div class="shop-radio mt-40 pr-50">
                                                    <label>	
                                                        <input type="radio">
                                                        Create an Account?
                                                    </label>
                                                </div> 
                                                <div class="shop-radio mt-40">
                                                    <label>
                                                        <input type="radio">
                                                        Ship to Different Address
                                                    </label>
                                                </div>                                                
                                            </div> -->
                                            <h5 class="text-uppercase mb-40"><strong>PAYMENT</strong></h5>
                                                <div class="checkout-total mb-60">
                                                     <div class="table-content-total table-responsive">
                                                       <div class="form-group">
                                                         <label for="card-element">
                                                              Credit or debit card
                                                          </label>
                                                           <div id="card-element">
                                                              <!-- A Stripe Element will be inserted here. -->
                                                           </div>
                                                       </div>
                                                     </div>
                                                 </div>
                                                 <!-- <div class="clear"></div> -->
                                                <div class="order-button-payment mt-30">
                                                    <input type="submit" value="Place order">
                                                </div><br>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-offset-1 col-sm-offset-1 col-sm-5">
                                    <div class="checkout-total mb-60">
                                        <h5 class="text-uppercase mb-40"><strong>CART TOTAL</strong></h5>
                                        <form action="#">
                                            <div class="table-content-total table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="check-product"><strong>Product</strong></th>
                                                            <th class="check-total pull-right"><strong>Total</strong></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check">
                                                                Zelletria ostma
                                                                <span>X 02</span>
                                                            </td>
                                                            <td class="singel-check pull-right">
                                                                <span>$390.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check">
                                                                Letria postma 
                                                                <span>X 01</span>
                                                            </td>
                                                            <td class="singel-check pull-right">
                                                                <span>$145.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check last-list">
                                                                Montria jastma
                                                                <span> X 02</span>
                                                            </td>
                                                            <td class="singel-check last-list pull-right">
                                                                <span>$310.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list border-bottom border-top">
                                                            <td class="singel-check total-check">
                                                                Sub total
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                <span>$845.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list border-bottom">
                                                            <td class="singel-check total-check">
                                                                Shipping
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                <span>$0.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-grand-total">
                                                            <th class="pt-15">Grand Total</th>
                                                            <td class="pull-right pt-15">
                                                                <h5 class="amount m-0"><strong>$845.00</strong></h5>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="payment-method">
                                        <h5 class="text-uppercase mb-40"><strong>PAYMENT </strong></h5>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h6 class="panel-title">
                                                        <span><input type="radio"></span>
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                           Direct Bank Transfer
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h6 class="panel-title">
                                                        <span><input type="radio"></span>
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                           Check Payment
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h6 class="panel-title">
                                                        <span><input type="radio"></span>
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                           Paypel
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="treams-conditions">
                                                <input type="radio">
                                                <p>I have read and accept the terms & conditions.</p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="order-button-payment mt-30">
                                            <input type="submit" value="Place order">
                                        </div><br>
                                    </div>
 -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- End Cart Area -->
<style type="text/css">
  /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}  
</style>

@endsection

@section('extra-js')
    <script >
        (function(){
            // Create a Stripe client.
var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
        }
    </script>