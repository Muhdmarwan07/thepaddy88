@extends('layout')
@section('content')
<!-- Start Cart Area -->
            <div class="cart-main-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-tab-pill text-center text-uppercase mb-50">
                                <ul>
                                    <li><a data-toggle="pill" href="#cart"><span>1</span> SHOPPING CART</a></li>
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
                                            <div class="col-md-12">
                                                <div class="shop-select mb-30">
                                                    <input type="submit" class="btn btn-warning" value="Done">
                                                </div>                                                
                                            </div>
                                            <div class="col-md-12">
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
                                            </div>
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
                                    <div class="payment-method">
                                        <h5 class="text-uppercase mb-40"><strong>PAYMENT METHOD</strong></h5>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cart Area -->






@endsection