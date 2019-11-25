@extends('layout')
@section('content')

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
            <!-- Start My Account -->
            <div class="my-account-page section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="procced-checkout">
                                <h4 class="procced-title text-uppercase pb-15 mb-20"><strong>My Account</strong></h4>
                                <p>Welcome to your account. Here you can manage all of your personal information and orders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="addresses-lists">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    <i class="fa fa-list-ol"></i>
                                                   <span>My Order</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <div class="coupon-info">
                                                    <h6 class="procced-title text-uppercase pb-15 mb-20">Your Order List </h6>
                                                </div>

                                                <div class="table-content table-responsive text-uppercase mb-50">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail text-left">PRODUCT NAME</th>
                                                        <th class="product-name"></th>
                                                        <th class="product-quantity text-center">QUANTITY</th>
                                                        <th class="product-subtotal text-center">TOTAL</th>
                                                        <th class="product-price text-center">ORDER ID</th>
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
                                                        </td>
                                                        
                                                        <td class="cart-product-price text-center">
                                                            <div class="cart-quantity-button">

                                                                      {{ csrf_field() }} 
                                                                    <h6><strong>X {{$row->qty}}</strong></h6>
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-total text-center">
                                                            <h6><strong>RM {{$row->total}}</strong></h6>
                                                        </td>
                                                        <td class="cart-product-size text-center">
                                                            <h6><strong>RM {{$row->price}}</strong></h6>
                                                        </td>
                                                    </tr>
                                                    </form>
                                                   <?php endforeach;?>
                                                </tbody>
                                                <p></p>
                                            </table>
                                        </div>
                                                <div class="theme-bg">
                                                    <p class="alert text-white">You have not placed any orders.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                    <i class="fa fa-building"></i>
                                                   <span>My personal information</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                
                                                        <div class="shop-select mb-15">
                                                            
                                                            <label><span class="required">*</span>{{Session::get('customer_name')}}</label>
                                                            <input type="text">
                                                        </div>
                                                        <div class="shop-select mb-15">
                                                            <label><span class="required">*</span>{{Session::get('customer_email')}}</label>
                                                            <input type="text">
                                                        </div>
                                                        <a title="Add to Cart" href="#" class="button extra-small">
                                                            <span>Save</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <!-- End of My Account -->
            
            <!-- End Brand Area -->
        </section>


@endsection