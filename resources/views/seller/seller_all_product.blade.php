@extends('seller_layout')
@section('seller_content')

<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Seller All product</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
 <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1><font color="white">All</font> <span class="table-project-n"><font color="white">Product</font></span> </h1>
                                </div>
                            </div>

                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                    <table border=1px id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                <th data-field="name" data-editable="true"><font color="white">Product ID</font></th>
                                                <th data-field="company" data-editable="true"><font color="white">Product Name</font></th>
                                                <th data-field="price" data-editable="true"><font color="white">Product Description</font></th>
                                                <th data-field="price" data-editable="true"><font color="white">Product Price</font></th>
                                                <th data-field="price" data-editable="true"><font color="white">Category Name</font></th>
                                                <th data-field="price" data-editable="true"><font color="white">Manufacture Name</font></th>
                                                <th data-field="price" data-editable="true"><font color="white">Product Image</font></th>
												 <th data-field="task" data-editable="true"><font color="white">Publication Status</font></th>
                                                <th data-field="action"><font color="white">Action</font></th>
                                            </tr>
                                        </thead>
                                        @foreach($all_product_info as $v_product)
                                        <tbody>
                                            <tr>
                                                
                                                <td>{{$v_product->product_id}}</td>
                                                <td>{{$v_product->product_name}}</td>
												<td>{{$v_product->product_description}}</td>
												<td>{{$v_product->product_price}}</td>
												<td>{{$v_product->category_name}}</td>
												<td>{{$v_product->manufacture_name}}</td>
												<td><img src="{{URL::to($v_product->product_image)}}"style="height: 80px; width: 80px;"></td>
                                                <td class="center">
                                                    @if($v_product->publication_status==1)
                                                        <span class="label label-success">Active</span>
                                                    @else
                                                        <span class="label label-danger">Unactive</span>
                                                    @endif
                                                </td>
												
												<td class="center">
                                                    @if($v_product->publication_status==1)
                                                        <a class="btn btn-danger" href="{{URL::to('/unactive_product/'.$v_product->product_id)}}">
                                                         KO

                                                        </a>
                                                    @else
                                                         <a class="btn btn-success" href="{{URL::to('/active_product/'.$v_product->product_id)}}">
                                                            OK
                                                         </a>
                                                    @endif
                                                        
                                                    <a class="btn btn-info" href="{{URL::to('/edit-product/'.$v_product->product_id)}}">Edit</a>
                                                   
                                                    <a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_product->product_id)}}" id="delete" onclick="return confirm('Are you sure you want to delete this item?')">
                                                      Delete  

                                                    </a>                                   
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection