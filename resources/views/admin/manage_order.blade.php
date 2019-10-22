@extends('admin_layout')
@section('admin_content')

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
                                            <li><span class="bread-blod">Order Details</span>
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
                                    <h1><font color="white">Order</font> <span class="table-project-n"><font color="white">Details</font></span> </h1>
                                </div>
                            </div>

                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <!-- <div id="toolbar">
                                        <select class="form-control">
												<option value=""><font color="white">Export Basic</font></option>
												<option value="all"><font color="white">Export All</font></option>
												<option value="selected"><font color="white">Export Selected</font></option>
											</select>
                                    </div> -->
                                    <table border=1px id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                <!-- <th data-field="id"><font color="white">ID</font></th> -->
                                                <th data-field="name" data-editable="true"><font color="white">Order ID</font></th>
                                                <th data-field="company" data-editable="true"><font color="white">Customer Name</font></th>
                                                <th data-field="name" data-editable="true"><font color="white">Product Name</font></th>
                                                <th data-field="name" data-editable="true"><font color="white">Product Price</font></th>
                                                <th data-field="name" data-editable="true"><font color="white">Quantity</font></th>
                                                <!-- <th data-field="action"><font color="white">Action</font></th> -->
                                            </tr>
                                        </thead>
                                        @foreach($all_order_info as $v_order)
                                        <tbody>
                                            <tr>
                                                <!-- <td></td> -->
                                                
                                                <td>{{$v_order->order_id}}</td>
                                                <td>{{$v_order->customer_name}}</td>
                                                <td>{{$v_order->product_name}}</td>
                                                <td>{{$v_order->product_price}}</td>
                                                <td>{{$v_order->product_sales_quantity}}</td>
											
                                               <!--  <td class="center">
                                                   
                                                        <span class="label label-success">Active</span>
                                                    
                                                        <span class="label label-danger">Unactive</span>
                                                    
                                                </td> -->
												<!-- <td>Jul 14, 2017</td> -->
                                                <!-- <td class="center">
                                                    <span class="label label-success">Active</span></td> -->
												<!-- <td class="center"> -->
                                                    
                                                        <!-- <a class="btn btn-danger" href="{{URL::to('/unactive/'.$v_order->order_id)}}">
                                                         KO

                                                        </a> -->
                                                    
                                                         <!-- <a class="btn btn-success" href="{{URL::to('/active/'.$v_order->order_id)}}">
                                                            OK
                                                         </a> -->
                                                    
                                                        
                                                   <!--  <a class="btn btn-info" href="{{URL::to('/edit/'.$v_order->order_id)}}">Edit</a> -->
                                                   
                                                    <!-- <a class="btn btn-danger" href="{{URL::to('/delete-category/'.$v_order->order_id)}}" id="delete" onclick="return confirm('Are you sure you want to delete this item?')">
                                                      Delete  

                                                    </a>   -->                                 
                                                <!-- </td> -->
                                                <!-- <td class="datatable-ct"><i class="fa fa-check"></i> 
                                                </td> -->
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