@extends('layout')
@section('content')
<section id="page-content" class="page-wrapper pt-10">
            <!-- Banner Area Start -->
            <!-- Banner Area End -->
            <!-- Start Shop View Area -->
            <br>
            <br><!-- 
            <div class="shop-view-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-2 col-xs-4">
                            <div class="shop-tab-pill">
                                <ul>
                                    <li class="active"><a data-toggle="pill" href="#home"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="pill" href="#menu1"><i class="fa fa-list" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>                            
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="shop-tab-pill">
                                <div class="show-label">
                                    <label>Sort by : </label>
                                    <select>
                                        <option selected="selected" value="position">Position</option>
                                        <option value="Name">Name</option>
                                        <option value="Price">Price</option>
                                    </select>
                                </div>
                                <div class="show-label showing">
                                    <label>Showing : </label>
                                    <select>
                                        <option selected="selected" value="position">9</option>
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
                            </div>                          
                        </div>
                        <div class="col-sm-4 col-xs-8">
                            <div class="shop-pagination">
                                <label>page : </label>
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Shop View Area -->
            <!-- Start Product List -->
            <div class="product-list-tab modify-tnm">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="product-container-list rp-style-2">
                                   <?php foreach ($all_published_product as $v_published_product) {?>
                                    <div class="product-inner cp-style-2 mt-30 col-2">
                                        <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}">
                                            <div class="product-img b-img">
                                                <img alt="" src="{{asset($v_published_product->product_image)}}" style="height: 200px;">
                                            </div>
                                        </a>
                                        <span class="product-tag text-uppercase black-bg">new</span>
                                        <ul class="quick-veiw text-center">
                                            <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-eye"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                                        </ul>
                                        <div class="product-text pt-10">
                                            <ul class="pull-left list-inline ratings">
                                               <li>{{$v_published_product->manufacture_name}}</li> 
                                            </ul>
                                            <ul class="pricing list-inline pull-right">
                                                <li class="text-right c-price">RM {{$v_published_product->product_price}}</li>
                                                <li class="text-right p-price">$180</li>
                                            </ul>
                                            <div class="clear"></div>
                                            <h6 class="product-name m-0">
                                                <a title="{{$v_published_product->product_name}}" href="{{URL::to('/view_product/'.$v_published_product->product_id)}}">{{$v_published_product->product_name}}</a>
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
            <!-- End Product List -->
            <!-- Start Shop View Area -->
            <!-- <div class="shop-view-area pt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-2 col-xs-4">
                            <div class="shop-tab-pill">
                                <ul>
                                    <li class="active"><a data-toggle="pill" href="#home"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                                    <li><a data-toggle="pill" href="#menu1"><i class="fa fa-list" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>                            
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="shop-tab-pill">
                                <div class="show-label">
                                    <label>Sort by : </label>
                                    <select>
                                        <option selected="selected" value="position">Position</option>
                                        <option value="Name">Name</option>
                                        <option value="Price">Price</option>
                                    </select>
                                </div>
                                <div class="show-label showing">
                                    <label>Showing : </label>
                                    <select>
                                        <option selected="selected" value="position">9</option>
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
                            </div>                          
                        </div>
                        <div class="col-sm-4 col-xs-8">
                            <div class="shop-pagination">
                                <label>page : </label>
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <br>
            <!-- End Shop View Area -->
           
        </section>



@endsection