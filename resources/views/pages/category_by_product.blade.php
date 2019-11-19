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
            
            <div class="product-list-tab modify-tnm">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="product-container-list rp-style-2">
                                   <?php foreach ($product_by_category as $v_category_by_product) {?>
                                    <div class="product-inner cp-style-2 mt-30 col-2">
                                        <a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}">
                                            <div class="product-img b-img">
                                                <img alt="" src="{{asset($v_category_by_product->product_image)}}" style="height: 200px;">
                                            </div>
                                        </a>
                                        <span class="product-tag text-uppercase black-bg">new</span>
                                        <ul class="quick-veiw text-center">
                                            <li><a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}"><i class="fa fa-eye"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                                        </ul>
                                        <div class="product-text pt-10">
                                            <ul class="pull-left list-inline ratings">
                                               <li>{{$v_category_by_product->product_name}}</li> 
                                            </ul>
                                            <ul class="pricing list-inline pull-right">
                                                <li class="text-right c-price">RM {{$v_category_by_product->product_price}}</li>
                                                <!-- <li class="text-right p-price">$180</li> -->
                                            </ul>
                                            <div class="clear"></div>
                                            <h6 class="product-name m-0">
                                                <a title="{{$v_category_by_product->product_name}}" href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}">{{$v_category_by_product->product_name}}</a>
                                            </h6>
                                        </div>
                                    </div>
                                   <?php } ?>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <br>
            
            <!-- <div class="new-arrival-area">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="featured-carousel indicator-style">
                        	<?php foreach ($product_by_category as $v_category_by_product) {?>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="{{asset($v_category_by_product->product_image)}}" style="height: 200px;">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">RM {{$v_category_by_product->product_price}}</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}" title="{{$v_category_by_product->product_name}}">{{$v_category_by_product->product_name}}</a>
                                        </h6>
                                    </div>
                                </div>
                                	<div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="{{asset($v_category_by_product->product_image)}}" style="height: 200px;">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">RM {{$v_category_by_product->product_price}}</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">{{$v_category_by_product->product_name}}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Of New Arrival Area  -->  

@endsection
