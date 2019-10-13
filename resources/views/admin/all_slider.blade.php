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
                                            <li><span class="bread-blod">Data Table</span>
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
                                    <h1><font color="white">Slider</font> <span class="table-project-n"><font color="white">Data</font></span> <font color="white">Table</font></h1>
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
                                                <th data-field="name" data-editable="true"><font color="white">Slider ID</font></th>
                                                
                                                <th data-field="price" data-editable="true"><font color="white">Slider Image</font></th>
												<!-- <th data-field="date" data-editable="true"><font color="white">Date</font></th> -->
                                                 <th data-field="name" data-editable="true"><font color="white">Slider Title</font></th>
												 <th data-field="task" data-editable="true"><font color="white">Publication Status</font></th>
                                                <!--  <th data-field="task" data-editable="true"><font color="white">Status</font></th> -->
												<!-- <th data-field="email" data-editable="true"><font color="white">Total Sales</font></th> -->
                                                <th data-field="action"><font color="white">Action</font></th>
                                            </tr>
                                        </thead>
                                        @foreach($all_slider as $v_slider)
                                        <tbody>
                                            <tr>
                                                <td>{{$v_slider->slider_id}}</td>
                                                
												<td><img src="{{$v_slider->slider_image}}" style="height: 80px; width: 200px;"></td>
                                                <td>{{$v_slider->slider_title}}</td>
                                                <td class="center">
                                                    @if($v_slider->publication_status==1)
                                                        <span class="label label-success">Active</span>
                                                    @else
                                                        <span class="label label-danger">Unactive</span>
                                                    @endif
                                                </td>
												<!-- <td>Jul 14, 2017</td> -->
                                                <!-- <td class="center">
                                                    <span class="label label-success">Active</span></td> -->
												<td class="center">
                                                    @if($v_slider->publication_status==1)
                                                        <a class="btn btn-danger" href="{{URL::to('/unactive_slider/'.$v_slider->slider_id)}}">
                                                         KO

                                                        </a>
                                                    @else
                                                         <a class="btn btn-success" href="{{URL::to('/active_slider/'.$v_slider->slider_id)}}">
                                                            OK
                                                         </a>
                                                    @endif
                                                        
                                                   
                                                   
                                                    <a class="btn btn-danger" href="{{URL::to('/delete-slider/'.$v_slider->slider_id)}}" id="delete" onclick="return confirm('Are you sure you want to delete this item?')">
                                                      Delete  

                                                    </a>                                   
                                                </td>
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