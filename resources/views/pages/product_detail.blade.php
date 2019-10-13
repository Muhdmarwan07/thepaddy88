@extends('layout')
@section('content')
<div class="breadcrumbs-area breadcrumbs-bg ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <h5 class="breadcrumbs-disc m-0">Best Products for you</h5>
                            <h2 class="breadcrumbs-title text-black m-0">Product Details </h2>
                            <!-- <ul class="top-page">
                                <li><a href="index.html">Home</a></li>
                                <li>></li>
                                <li>About</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        
<!-- Start Product Details -->
            <div class="product-details-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="single-product-image">
                                <div id="my-tab-content" class="tab-content">
                                    <div class="tab-pane active" id="view1">
                                        <a class="venobox" href="{{URL::to($product_by_detail->product_image)}}" data-gall="gallery" title=""><img src="{{URL::to($product_by_detail->product_image)}}" alt=""><span>+</span></a>
                                    </div>
                                    <div class="tab-pane" id="view2">
                                        <a class="venobox" href="images/product/single/1.jpg" data-gall="gallery" title=""><img src="images/product/single/1.jpg" alt=""><span>+</span></a>
                                    </div>
                                    <div class="tab-pane" id="view3">
                                        <a class="venobox" href="images/product/single/1.jpg" data-gall="gallery" title=""><img src="images/product/single/1.jpg" alt=""><span>+</span></a>
                                    </div>
                                </div>
                                <!-- <div id="viewproduct" class="nav nav-tabs product-view" data-tabs="tabs">
                                    <div class="pro-view active"><a href="#view1" data-toggle="tab"><img src="images/product/single/b1.jpg" alt=""></a></div>
                                    <div class="pro-view"><a href="#view2" data-toggle="tab"><img src="images/product/single/b2.jpg" alt=""></a></div>
                                    <div class="pro-view"><a href="#view3" data-toggle="tab"><img src="images/product/single/b3.jpg" alt=""></a></div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-text product-text-list product-details-right">
                                 <h5 class="product-name-list">
                                    <a href="#" title="Zelletria ostma"><strong>{{$product_by_detail->product_name}}</strong></a>
                                </h5>
                                <!-- <ul class="pull-left list-inline ratings rating-list pb-20">
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li><i class="rated fa fa-star"></i></li>
                                    <li class="reviews text-theme"><span>10</span>Review(s)</li>
                                </ul> -->
                                <ul>
                                	<li>
                                		<div class="pd-quantity-available mb-10">
                                    	<p id="product-available">
                                        <span>Available : </span>
                                   		 </p>
                                   		 <p id="availability" class="text-defualt">
                                        <span> In stock</span>
                                   		 </p>
                                		</div>
                                	</li>
                                	<li>
                                 		<div class="pd-quantity-available mb-10">
                                   		 <p id="product-available">
                                        <span>Brand : </span>
                                  		  </p>
                                   		 <p id="availability" class="text-defualt">
                                        <span> {{$product_by_detail->manufacture_name}}</span>
                                   		 </p>
                               		 </div>
                               		</li>
                               	</ul>
                                <div class="clear"></div>
                                <div class="shop-select-details">
                                    <div class="shop-tab-pill">
                                        <div class="show-label">
                                            <label>Size : </label>
                                            <select>
                                                <option selected="selected" value="position">Select Size</option>
                                                <option value="small">{{$product_by_detail->product_size}}</option>
                                            </select>
                                        </div>
                                        <!-- <div class="show-label showing" name="qty">
                                            <label>Quantity : </label>
                                            <select>
                                                <option selected="selected" value="position">1</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                            </select>
                                        </div> -->
                                    </div>
                                </div>
                                <ul class="pricing pricing-list">
                                    <li class="text-right c-price text-defualt text-center">RM {{$product_by_detail->product_price}}</li>
                                </ul>
	                                <div class="clear"></div>
	                                
		                                <ul class="quick-veiw-list">
		                                	<form action="{{URL::to('/add-to-cart')}}" method="post">
                                				{{ csrf_field() }}
		                                    	<!-- <li><a href="{{URL::to('add-to-cart')}}"><i class="fa fa-shopping-cart"></i></a></li> -->
                                              <div>
                                                <label>Quantity : </label>
                                                <select name="qty">
                                                    <option selected="selected" value="position">0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                </select>
                                              </div>
                                              <br></br>
                                                <input type="hidden" name="product_id" value="{{$product_by_detail->product_id}}">
		                                    	<button style="Submit" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Add Cart</button>
		                                    </form>
		                                </ul>
	                            	
                                <!-- <div class="socailsharing-product mt-40">
                                    <label>Share :</label>
                                    <ul>
                                        <li class="icon-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="icon-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="icon-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="icon-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>                     
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="p-details-tab gray-ash-bg mt-50">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">MORE INFO</a></li>
                                    <!-- <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">DATA SHEET</a></li> -->
                                    <!-- <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">REVIEWS</a></li> -->
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="tab-content review gray-ash-bg mt-30">
                                <div role="tabpanel" class="tab-pane active p-30" id="more-info">
                                    {{$product_by_detail->product_description}}
                                </div>
                                <!-- <div role="tabpanel" class="tab-pane p-30" id="data">
                                    <table class="table-data-sheet m-0">
                                        <tbody>
                                            <tr class="odd">
                                                <td>Compositions</td>
                                                <td>Cotton</td>
                                            </tr>
                                            <tr class="even">
                                                <td>Styles</td>
                                                <td>Casual</td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Properties</td>
                                                <td>Short Sleeve</td>
                                            </tr>
                                        </tbody>
                                   </table>
                                </div> -->
                                <div role="tabpanel" class="tab-pane p-30" id="reviews">
                                    <div id="product-comments-block-tab">
                                        <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="offer-img b-img mt-50">
                                <img src="images/offer-banner/7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Product Details -->
            <!-- Start Related Product -->
            <div class="featured-product-area">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>RELATED PRODUCTS</strong></h2>
                                <p class="text-defualt">Best Collection for you</p>
                                <img alt="" src="images/section-border.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rp-style">
                        <div class="featured-carousel indicator-style">
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/1.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$150</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="#">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/2.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase theme-bg">sale</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$130</li>
                                            <li class="text-right p-price">$150</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Tletria postma" href="#">Tletria postma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/3.jpg">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$120</li>
                                            <li class="text-right p-price">$130</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Celletria ostma" href="#">Celletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/4.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$150</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="#">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/5.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-25%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$150</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="#">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/1.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$150</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="#">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/2.jpg">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase theme-bg">sale</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$130</li>
                                            <li class="text-right p-price">$150</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Tletria postma" href="#">Tletria postma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="images/product/arrival/3.jpg">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$120</li>
                                            <li class="text-right p-price">$130</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Celletria ostma" href="#">Celletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- End Of Related Product -->

            
            <!-- Start Brand Area -->
            <div class="brand-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>OUR BRAND</strong></h2>
                                <p class="text-defualt">BRAND</p>
                                <img alt="" src="images/section-border.png">
                            </div> -->
                            <div class="brand-carousel">
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/4.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/5.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="images/brand/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Brand Area -->


@endsection