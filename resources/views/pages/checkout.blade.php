@extends('layout')
@section('content')

<!-- Start Cart Area -->
            <div class="cart-main-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-tab-pill text-center text-uppercase mb-50">
                                <ul>
                                    <li><a data-toggle="pill" href="{{url('/show-cart')}}"><span>1</span> SHOPPING CART</a></li>
                                    <li class="active"><a data-toggle="pill" href="#checkout"><span>2</span> CHECKOUT</a></li>
                                    <li class="pill"><a data-toggle="pill" href="#checkout"><span>3</span> PAYMENT</a></li>
                                    <li><a data-toggle="pill" href="#order"><span>4</span> ORDER COMPLETE</a></li>
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
                                            <div class="col-md-12">
                                                <div class="shop-select mb-30">
                                                    <input type="submit" class="btn btn-warning" value="Done">
                                                </div>                                                
                                            </div>
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
                                            <!-- <h5 class="text-uppercase mb-40"><strong>PAYMENT</strong></h5>
                                                <div class="checkout-total mb-60">
                                                     <div class="table-content-total table-responsive">
                                                       <div class="form-group">
                                                         <label for="card-element">
                                                              Credit or debit card
                                                          </label>
                                                           <div id="card-element">
                                                              
                                                           </div>
                                                       </div>
                                                     </div>
                                                 </div>
                                                 
                                                <div class="order-button-payment mt-30">
                                                    <input type="submit" value="Place order">
                                                </div><br> -->
                                          </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                        <div class="col-md-6">
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
                                                            <a href="#"><img src="{{URL::to($row->options->image)}}" height="50px" width="50px" alt=""></a>
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
                                                                      <h6 class="amount"><strong>X{{$row->qty}}</strong></h6>
                                                                    <!-- <input type="text" class="cart-quantity-input" name="qty" value="{{$row->qty}}"> -->
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
                                            <div class="col-sm-10">
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

                                <!-- <div class="col-md-offset-1 col-sm-offset-1 col-sm-5">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cart Area -->
@endsection