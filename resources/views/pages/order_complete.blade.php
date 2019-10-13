@extends('layout')
@section('content')

<!-- Start page content -->
        <section id="page-content" class="page-wrapper pt-10">
            <!-- Banner Area Start -->
            <div class="banner-two-area">
                <div class="banner-two-bottom">
                    <div class="single-banner-two">
                        <div class="banner-two-img">
                            <a href="#">
                                <img src="images/banner/8.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-two-text left-middle-bottom">
                            <div class="banner-two-opacity-inner">
                                <div class="banner-two-text-inner banner-bottom-text-inner text-uppercase">
                                    <h2 class="bottom-banner-title">NEW COLLECTION</h2>
                                    <h2>hand bag</h2>
                                    <a href="#" class="btn-shop">SHOP NOW</a>
                                </div>
                                <div class="banner-opacity text-center bags text-uppercase">
                                    <h1>BAG’S</h1>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="single-banner-two">
                        <div class="banner-two-img">
                            <a href="#">
                                <img src="images/banner/9.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-two-text right-middle-bottom">
                            <div class="banner-two-opacity-inner">
                                <div class="banner-two-text-inner banner-bottom-text-inner text-uppercase">
                                    <h2 class="bottom-banner-title">WOMEN’S</h2>
                                    <h2>summer</h2>
                                    <h2>collection</h2>
                                    <a href="#" class="btn-shop">VIEW COLLECTION</a>
                                </div>
                                <div class="banner-opacity text-center summer text-uppercase">
                                    <h1>SUMMER</h1>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="single-banner-two">
                        <div class="banner-two-img">
                            <a href="#">
                                <img src="images/banner/10.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-two-text middle-middle-bottom">
                            <div class="banner-two-opacity-inner">
                                <div class="banner-two-text-inner banner-bottom-text-inner text-uppercase">
                                    <h2 class="bottom-banner-title">T-SHIRT</h2>
                                    <h2>COLLECTION</h2>
                                    <h2 class="m-0">FOR ALL</h2>
                                    <a href="#" class="btn-shop">SHOP NOW</a>
                                </div>
                                <div class="banner-opacity text-center t-shirt text-uppercase">
                                    <h1>T-SHIRT</h1>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area End -->
            <!-- Start Cart Area -->
            <div class="cart-main-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-tab-pill text-center text-uppercase mb-50">
                                <ul>
                                    <li><a data-toggle="pill" href="#cart"><span>1</span> SHOPPING CART</a></li>
                                    <li><a data-toggle="pill" href="#checkout"><span>2</span> CHECKOUT</a></li>
                                    <li class="pill"><a data-toggle="pill" href="#order"><span>3</span> ORDER COMPLETE</a></li>
                                    <li class="active"><a data-toggle="pill" href="#order"><span>3</span> ORDER COMPLETE</a></li>
                                </ul>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in" id="cart">
                                <form action="#">
                                    <div class="table-content table-responsive text-uppercase mb-50">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail text-left">PRODUCT NAME</th>
                                                    <th class="product-name"></th>
                                                    <th class="product-price text-center">UNIT PRICE</th>
                                                    <th class="product-quantity text-center">QUANTITY</th>
                                                    <th class="product-subtotal text-center">Total</th>
                                                    <th class="product-remove"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img src="images/cart/cart-table/1.jpg" alt=""></a>
                                                    </td>
                                                    <td class="cart-product-name">
                                                        <a href="#"><h6><strong>Zelletria ostma</strong></h6></a>
                                                        <p>Lorem ipsum dolor sit amet <br> consectetur adipiscing </p>
                                                        <label>
                                                            Size :
                                                            <span> L</span>
                                                        </label>
                                                    </td>
                                                    <td class="cart-product-size text-center">
                                                        <h6><strong>$195</strong></h6>
                                                    </td>
                                                    <td class="cart-product-price text-center">
                                                        <span class="quantity-wanted-p pull-left">
                                                            <span class="dec qtybutton">-</span>
                                                            <input type="text" class="cart-plus-minus-box" value="2">
                                                            <span class="inc qtybutton">+</span>    
                                                        </span>
                                                    </td>
                                                    <td class="cart-product-total text-center">
                                                        <h6><strong>$390</strong></h6>
                                                    </td>
                                                    <td class="cart-trash text-center">
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img src="images/cart/cart-table/2.jpg" alt=""></a>
                                                    </td>
                                                    <td class="cart-product-name">
                                                        <a href="#"><h6><strong>Letria postma</strong></h6></a>
                                                        <p>Lorem ipsum dolor sit amet <br> consectetur adipiscing </p>
                                                        <label>
                                                            Size :
                                                            <span> xl</span>
                                                        </label>
                                                    </td>
                                                    <td class="cart-product-size text-center">
                                                        <h6><strong>$145</strong></h6>
                                                    </td>
                                                    <td class="cart-product-price text-center">
                                                        <span class="quantity-wanted-p pull-left">
                                                            <span class="dec qtybutton">-</span>
                                                            <input type="text" class="cart-plus-minus-box" value="1">
                                                            <span class="inc qtybutton">+</span>    
                                                        </span>
                                                    </td>
                                                    <td class="cart-product-total text-center">
                                                        <h6><strong>$145</strong></h6>
                                                    </td>
                                                    <td class="cart-trash text-center">
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img src="images/cart/cart-table/3.jpg" alt=""></a>
                                                    </td>
                                                    <td class="cart-product-name">
                                                        <a href="#"><h6><strong>Montria jastma</strong></h6></a>
                                                        <p>Lorem ipsum dolor sit amet <br> consectetur adipiscing </p>
                                                        <label>
                                                            Size :
                                                            <span> xl</span>
                                                        </label>
                                                    </td>
                                                    <td class="cart-product-size text-center">
                                                        <h6><strong>$155</strong></h6>
                                                    </td>
                                                    <td class="cart-product-price text-center">
                                                        <span class="quantity-wanted-p pull-left">
                                                            <span class="dec qtybutton">-</span>
                                                            <input type="text" class="cart-plus-minus-box" value="2">
                                                            <span class="inc qtybutton">+</span>    
                                                        </span>
                                                    </td>
                                                    <td class="cart-product-total text-center">
                                                        <h6><strong>$310</strong></h6>
                                                    </td>
                                                    <td class="cart-trash text-center">
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="cart-calculate">
                                                <h6 class="cart-title text-uppercase mb-30"><strong>CALCULATE SHIPPING</strong></h6>
                                                <select class="mr-25">
                                                    <option>Country</option>
                                                    <option>Bangladesh</option>
                                                    <option>India</option>
                                                    <option>Austrolia</option>
                                                    <option>Spain</option>
                                                    <option>Canada</option>
                                                    <option>Pakistan</option>
                                                </select>
                                                <select>
                                                    <option>State</option>
                                                    <option>Dhaka</option>
                                                    <option>Magura</option>
                                                    <option>Manikgonge</option>
                                                    <option>Kushtia</option>
                                                    <option>Khulna</option>
                                                    <option>Padna</option>
                                                </select>
                                                <select class="mr-25">
                                                    <option>Postcode/Zip</option>
                                                    <option>1200</option>
                                                    <option>1201</option>
                                                    <option>1202</option>
                                                    <option>1203</option>
                                                    <option>1204</option>
                                                    <option>1205</option>
                                                    <option>1206</option>
                                                </select>
                                                <button class="cart-button">Estimate</button>
                                            </div>
                                            <div class="cart-discount">
                                                <h6 class="cart-title text-uppercase mb-30"><strong>DISCOUNT COUPON CODE</strong></h6>
                                                <input type="text">
                                                <button class="cart-button">Apply Code</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cart-total clearfix">
                                                <h6 class="cart-title text-uppercase mb-30"><strong>CART TOTAL</strong></h6>
                                                <div class="table-content-total table-responsive mb-20">
                                                    <table>
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th>Subtotal</th>
                                                                <td>
                                                                    <h6 class="amount"><strong>$8450.00</strong></h6>
                                                                </td>
                                                            </tr>
                                                            <tr class="cart-subtotal">
                                                                <th>Shipping</th>
                                                                <td>
                                                                    <h6 class="amount"><strong>$0.00</strong></h6>
                                                                </td>
                                                            </tr>
                                                            <tr class="cart-grand-total">
                                                                <th>Grand Total</th>
                                                                <td>
                                                                    <h5 class="amount"><strong>$845.00</strong></h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                                    
                                                </div>
                                                <div class="update-checkout pull-right">
                                                    <a href="#">Update</a>
                                                    <a data-toggle="pill" href="#checkout">CHECKOUT</a>                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="checkout">
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
                            </div>
                            <div role="tabpanel" class="tab-pane fade in active" id="order">
                                <div class="col-md-12">
                                    <div class="order-message text-center mb-90">
                                        <h5 class="text-uppercase"><strong>Congratulations! Your order has ben reveived.</strong></h5>
                                        <p>Thanks for your purchase!</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="order-complete-area">
                                        <h5 class="text-capitalize mb-40"><strong>Order Details</strong></h5>
                                        <form action="#">
                                            <div class="table-content-total table-responsive">
                                                <table>
                                                    <tbody>
                                                        <tr class="check-product-list border-bottom">
                                                            <td class="singel-check total-check">
                                                                Order No 
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                ID : 158MIM24AR06
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list border-bottom">
                                                            <td class="singel-check total-check">
                                                                Date
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                25April, 2016
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list border-bottom">
                                                            <td class="singel-check total-check">
                                                                Total
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                RM {{Cart::total()}}
                                                            </td>
                                                        </tr>
                                                        <!-- <tr class="check-product-list">
                                                            <td class="singel-check total-check">
                                                                Payment Method
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                Check Payment
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                                <div class="order-button-payment mt-30">
                                            <a href="{{URL::to('/')}}" class="cart-button mr-20 text-uppercase">Return To Home</a>
                                            <a href="{{URL::to('/shop')}}" class="cart-button text-uppercase">Continue Shopping</a>
                                        </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br>
                                    <!-- <div class="billing-address mt-40">
                                        <h5 class="text-capitalize mb-40"><strong>Billing Address</strong></h5>
                                        <div class="billi-address-content pl-30">
                                            <p>Khairul Bashar Arif</p>
                                            <p>Flat no # 09, House no # 6/9, Dhalpur, Dhaka, Bangladesh</p>
                                            <p>Phone # (0880) 02 7555392, Email # arif@gmail.com</p>
                                            <p>Near Saidabad Water Treatment Plant</p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cart Area -->
            
        </section>
        <!-- End page content -->




@endsection