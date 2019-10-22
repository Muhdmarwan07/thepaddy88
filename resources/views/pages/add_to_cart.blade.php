@extends('layout')
@section('content')

 <!-- Start Cart Area -->
            <div class="cart-main-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-tab-pill text-center text-uppercase mb-50">
                                <ul>
                                    <li class="active"><a data-toggle="active" href="#cart"><span>1</span> SHOPPING CART</a></li>
                                    <li><a data-toggle="pill" href="#checkout"><span>2</span> CHECKOUT</a></li>
                                    <li><a data-toggle="pill" href="#order"><span>3</span> PAYMENT</a></li>
                                    <li><a data-toggle="pill" href="#order"><span>4</span> ORDER COMPLETE</a></li>
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
                                            <?php 
                                                $contents=Cart::content();
                                             ?>
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

                                                    <?php foreach ($contents as $row) :?>
                                                    <form action="{{URL('/update-cart')}}" method="post">
                                                    <tr>
                                                        <td class="product-thumbnail">
                                                            <a href="#"><img src="{{URL::to($row->options->image)}}" height="150px" width="150px" alt=""></a>
                                                        </td>
                                                        <td class="cart-product-name">
                                                            <a href="#"><h6><strong>{{$row->name}}</strong></h6></a>

                                                            <!-- <label>
                                                                Size :
                                                                <span> L</span>
                                                            </label> -->
                                                        </td>
                                                        <td class="cart-product-size text-center">
                                                            <h6><strong>RM {{$row->price}}</strong></h6>
                                                        </td>
                                                        <td class="cart-product-price text-center">
                                                            <div class="cart-quantity-button">

                                                                     <!--  {{ csrf_field() }} -->
                                                                    <h6><strong>X {{$row->qty}}</strong></h6>
                                                                    <!-- <input type="text" class="cart-quantity-input" name="qty" value="{{$row->qty}}">
                                                                    <input type="hidden" name="rowId" value="{{$row->rowId}}"> -->
                                                                    <!-- <input type="submit" value="Update" class="btn btn-sm btn-default"> -->

                                                            </div>
                                                        </td>
                                                        <td class="cart-product-total text-center">
                                                            <h6><strong>RM {{$row->subtotal}}</strong></h6>
                                                        </td>

                                                        <td class="cart_delete">

                                                            <a href="{{URL::to('/delete-to-cart/'.$row->rowId)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                                        </td>
                                                    </tr>
                                                    </form>
                                                   <?php endforeach;?>
                                                </tbody> 
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
                                                    <div class="update-checkout pull-right">
                                                        <!-- <a href="#">UPDATE</a> -->

                                                         <?php
                                                             $customer_id=Session::get('customer_id');
                                                          ?> 
                                                         <?php if($customer_id !=NULL){?>
                                                                 <a href="{{URL::to('/checkout')}}">CHECKOUT</a>
                                                         <?php }else{?>
                                                            <a href="{{URL::to('/login-check')}}">CHECKOUT</a>
                                                         <?php } ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <!-- <div role="tabpanel" class="tab-pane fade in" id="checkout">
                                    <div class="col-sm-6">
                                        <div class="checkbox-form">
                                            <h5 class="text-uppercase mb-40"><strong>BILING ADDRESS</strong></h5>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="shop-select mb-30">
                                                        <label>
                                                            Country
                                                            <span class="required">*</span>
                                                        </label>
                                                        <select class="">
                                                            <option>Country</option>
                                                            <option>Bangladesh</option>
                                                            <option>India</option>
                                                            <option>Austrolia</option>
                                                            <option>Spain</option>
                                                            <option>Canada</option>
                                                            <option>Pakistan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="shop-select">
                                                        <label>
                                                            First name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" placeholder="First name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="shop-select">
                                                        <label>
                                                            Last name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" placeholder="Last name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="shop-select mtb-30">
                                                        <label>
                                                            Company name
                                                        </label>
                                                        <input type="text" placeholder="Company name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="shop-select">
                                                        <label>
                                                            Email address
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" placeholder="Email address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="shop-select">
                                                        <label>
                                                            Phone no.
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" placeholder="Phone no.">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="shop-select address-input mtb-30">
                                                        <label>
                                                            Address
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" placeholder="Address line 1">
                                                        <input type="text" placeholder="Address line 2">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="shop-select mb-30">
                                                        <label>
                                                            Town/City
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" placeholder="Address line 1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="shop-select">
                                                        <label>
                                                            State
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" placeholder="State">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="shop-select">
                                                        <label>
                                                            Zip code
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" placeholder="Zip code">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cart Area -->



@endsection
