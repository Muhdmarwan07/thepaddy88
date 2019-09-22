@extends('layout')
@section('content')
            <!-- Start Featured product Area -->
            <div class="featured-product-area section-padding">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>FEATURED PRODUCTS</strong></h2>
                                <p class="text-defualt">Best Collection for you</p>
                                <img alt="" src="{{asset('frontend/images/section-border.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start New Arrival Area  -->
            <div class="new-arrival-area">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="featured-carousel indicator-style">
                        	<?php foreach ($product_by_manufacture as $v_manufacture_by_product) {?>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="{{asset($v_manufacture_by_product->product_image)}}" style="height: 200px;">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <!-- <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li> -->
                                            <li>{{$v_manufacture_by_product->manufacture_name}}</li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">RM {{$v_manufacture_by_product->product_price}}</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">{{$v_manufacture_by_product->product_name}}</a>
                                        </h6>
                                    </div>
                                </div>	
                            </div>
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of New Arrival Area  -->  

@endsection
