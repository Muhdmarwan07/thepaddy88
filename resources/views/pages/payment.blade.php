@extends('layout')
@section('content')
<!-- Start Cart Area -->
            <div class="cart-main-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-tab-pill text-center text-uppercase mb-50">
                                <ul>
                                    <li class="pill"><a data-toggle="pill" href="#cart"><span>1</span> SHOPPING CART</a></li>
                                    <li><a data-toggle="pill" href="#checkout"><span>2</span> CHECKOUT</a></li>
                                    <li><a data-toggle="active" href="#order"><span>3</span> PAYMENT</a></li>
                                    <li><a data-toggle="pill" href="#order"><span>3</span> ORDER COMPLETE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-list tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="cart">
                                    <form action="#">
                                        <div class="table-content table-responsive text-uppercase mb-50">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail text-left">PRODUCT NAME</th>
                                                        <th class="product-name"></th>
                                                        <th class="product-price text-center">UNIT PRICE</th>
                                                        <th class="product-quantity text-center">QUANTITY</th>
                                                        <th class="product-subtotal text-center">TOTAL</th>
                                                        <th class="product-remove"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach (Cart::content() as $row) :?>
                                                    <form action="{{URL('/update-cart')}}" method="post">
                                                    <tr>
                                                        <td class="product-thumbnail">
                                                            <a href="#"><img src="{{URL::to($row->options->image)}}" height="150px" width="150px" alt=""></a>
                                                        </td>
                                                        <td class="cart-product-name">
                                                            <a href="#"><h6><strong>{{$row->name}}</strong></h6></a>

                                                            <label>
                                                                Size :
                                                                <span> L</span>
                                                            </label>
                                                        </td>
                                                        <td class="cart-product-size text-center">
                                                            <h6><strong>RM {{$row->price}}</strong></h6>
                                                        </td>
                                                        <td class="cart-product-price text-center">
                                                            <div class="cart-quantity-button">

                                                                      {{ csrf_field() }}
                                                                    <input type="text" class="cart-quantity-input" name="qty" value="{{$row->qty}}">
                                                                    <input type="hidden" name="rowId" value="{{$row->rowId}}">
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-total text-center">
                                                            <h6><strong>RM {{$row->total}}</strong></h6>
                                                        </td>
                                                    </tr>
                                                    </form>
                                                   <?php endforeach;?>
                                                </tbody>
                                                <p></p>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="cart-total clearfix">
                                                    <h6 class="cart-title text-uppercase mb-30"><strong>CART TOTAL</strong></h6>
                                                    <div class="table-content-total table-responsive mb-20">
                                                        <table>
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>
                                                                    <td>
                                                                        <h6 class="amount"><strong>RM {{Cart::subtotal()}}</strong></h6>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cart-subtotal">
                                                                    <th>Shipping</th>
                                                                    <td>
                                                                        <h6 class="amount"><strong>RM 0.00</strong></h6>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cart-grand-total">
                                                                    <th>Grand Total</th>
                                                                    <td>
                                                                        <h5 class="amount"><strong>RM {{Cart::total()}}</strong></h5>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

                                    <div class="container">
										<div class='row'>
											<div class='col-md-10'></div>
											<div class='col-md-4'>
												<script src='https://js.stripe.com/v2/' type='text/javascript'></script>
												<form accept-charset="UTF-8" action="/payment" class="require-validation"
													data-cc-on-file="false"

													data-stripe-publishable-key="pk_test_ktxhUaQNTYSNw2QiYHDXkqSn00TxxwSxh8"
													id="payment-form" method="post">
													{{ csrf_field() }}
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
															<label class='control-label'>CVC</label> <input
																autocomplete='off' class='form-control card-cvc'
																placeholder='ex. 311' size='4' type='text'>
														</div>
														<div class='col-xs-4 form-group expiration required'>
															<label class='control-label'>Expiration</label> <input
																class='form-control card-expiry-month' placeholder='MM' size='2'
																type='text'>
														</div>
														<div class='col-xs-4 form-group expiration required'>
															<label class='control-label'> </label> <input
																class='form-control card-expiry-year' placeholder='YYYY'
																size='4' type='text'>
														</div>
													</div>
													<div class='form-row'>
														<div class='col-md-12'>
															<div class='form-control total btn btn-info'>

																Total: <span class='amount'>RM <?php echo Cart::total(); ?></span>
															
																
																<input type="hidden" name="amount" value={{floatval(Cart::total())}}>
                       
															</div>
														</div>
													</div>
													<div class='form-row'>
														<div class='col-md-12 form-group'>
															<button class='form-control btn btn-primary submit-button'
																type='submit' style="margin-top: 10px;">Pay »</button>
														</div>
													</div>
													<div class='form-row'>
														<div class='col-md-12 error form-group hide'>
															<div class='alert-danger alert'>Please correct the errors and try
																again.</div>
														</div>
													</div>
												</form>
												@if ((Session::has('success-message')))
												<div class="alert alert-success col-md-12">{{
													Session::get('success-message') }}</div>
												@endif @if ((Session::has('fail-message')))
												<div class="alert alert-danger col-md-12">{{
													Session::get('fail-message') }}</div>
												@endif
											</div>
											<div class='col-md-4'></div>
										</div>
									</div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

				</form>
				<!-- @if ((Session::has('success-message')))
				<div class="alert alert-success col-md-12">{{
					Session::get('success-message') }}</div>
				@endif @if ((Session::has('fail-message')))
				<div class="alert alert-danger col-md-12">{{
					Session::get('fail-message') }}</div>
				@endif -->
			</div>
			<div class='col-md-4'></div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"
		integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		crossorigin="anonymous"></script>
	<script>
		$(function() {
			  $('form.require-validation').bind('submit', function(e) {
			    var $form         = $(e.target).closest('form'),
			        inputSelector = ['input[type=email]', 'input[type=password]',
			                         'input[type=text]', 'input[type=file]',
			                         'textarea'].join(', '),
			        $inputs       = $form.find('.required').find(inputSelector),
			        $errorMessage = $form.find('div.error'),
			        valid         = true;

			    $errorMessage.addClass('hide');
			    $('.has-error').removeClass('has-error');
			    $inputs.each(function(i, el) {
			      var $input = $(el);
			      if ($input.val() === '') {
			        $input.parent().addClass('has-error');
			        $errorMessage.removeClass('hide');
			        e.preventDefault(); // cancel on first error
			      }
			    });
			  });
			});

			$(function() {
			  var $form = $("#payment-form");

			  $form.on('submit', function(e) {
			    if (!$form.data('cc-on-file')) {
			      e.preventDefault();
			      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
			      Stripe.createToken({
			        number: $('.card-number').val(),
			        cvc: $('.card-cvc').val(),
			        exp_month: $('.card-expiry-month').val(),
			        exp_year: $('.card-expiry-year').val()
			      }, stripeResponseHandler);
			    }
			  });

			  function stripeResponseHandler(status, response) {
			    if (response.error) {
			      $('.error')
			        .removeClass('hide')
			        .find('.alert')
			        .text(response.error.message);
			    } else {
			      // token contains id, last4, and card type
			      var token = response['id'];
			      // insert the token into the form so it gets submitted to the server
			      $form.find('input[type=text]').empty();
			      $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
			      $form.get(0).submit();
			    }
			  }
			})
		</script>

@endsection
