@extends('seller_layout')
@section('seller_content')

<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>The Paddy88</h2>
												<p>Welcome to The Paddy88 <span class="bread-ntd"></span></p>
											</div>
										</div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       
        
       <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Add Product</a></li>
                                    
                                    <!-- <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li> -->
                                </ul>
                                <p class="alert-success">
                                        <?php
                                            $message=Session::get('message');

                                            if ($message)
                                            {
                                                echo $message;
                                                Session::put('message',NULL);
                                            }
                                            ?>
                                    </p>



                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                     <form action="{{ url('/seller-save-product') }}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="product_name" placeholder="Product Name" required="">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" >
                                                        <span class="input-group-addon"><i></i></span>
                                                                  <select class="form-control" id="sel1" name="category_id">
                                                                    <option>Select Product Category</option>

                                                                    <?php
                                                                        $all_published_category=DB::table('tbl_category')
                                                                                                ->where('publication_status',1)
                                                                                                ->get();
                                                                        foreach ($all_published_category as $v_category) {?>

                                                                   <option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
                                                                   <?php }?>
                                                                  </select>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="product_price" placeholder="Product Price" required="">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="product_size" placeholder="Product Size" required="">
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="product_color" placeholder="Product Colour" required="">
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="product_quantity" placeholder="Product Quantity" required="">
                                                    </div>

                                                    <div class>
                                                        <input type="checkbox" name="publication_status" value="1"><font color="white">Publication Status</font>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="product_description" placeholder="Product Description" required="">
                                                    </div>

                                                    <input type="hidden" name="seller_id"  value="{{Session::get('seller_id')}}">

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <label class="control-label" for="fileInput"><font color=white>Product Image</font></label>
                                                        <div class="controls">
                                                            <font color=white><input type="file" class="input-file uniform_on" name="product_image" id="fileInput" required=""></font>
                                                        </div>
                                                    </div>
                                                         <select name="manufacture_id" class="form-control pro-edt-select form-control-primary">
                                                            <option value="opt1">Product Manufacture</option>

                                                            <?php
                                                                        $all_published_manufacture=DB::table('tbl_manufacture')
                                                                                                ->where('publication_status',1)
                                                                                                ->get();
                                                                        foreach ($all_published_manufacture as $v_manufacture) {?>

                                                                   <option value="{{$v_manufacture->manufacture_id}}">{{$v_manufacture->manufacture_name}}</option>
                                                                   <?php }?>
                                                         </select>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Add Product
                                                        </button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<div>
        
        

@endsection