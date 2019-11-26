@extends('layout')
@section('content')

<style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>

   <!-- Start Featured product Area -->
            <div class="featured-product-area section-padding">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>Contact Us</strong></h2>
                                <p class="text-defualt"></p>
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
                        
                    	@if(Session::get("success"))
                    		<div class="alert alert-success alert-block">
    							<b>Successfully</b>, your email sent
   							</div>
                    	@endif

                    	<form method="post" action="{{url('/send/email')}}">
                    	  {{ csrf_field() }}

                    	  @if(Session::get("success"))
                    		<div class="alert alert-success alert-block">
    							<b>Successfully</b>, your email sent
   							</div>
                    	@endif
                    		<div class="form-group">
                    		  <label>Enter Your Name</label>
                    		  <input type="text" name="name" class="form-control" value=""/ >
                    		</div>

                    		<div class="form-group">
                    		  <label>Enter Your Email</label>
                    		  <input type="text" name="email" class="form-control" value=""/ >
                    		</div>

                    		<div class="form-group">
                    		  <label>Enter Your Message</label>
                    		  <textarea name="Message" class="form-control" ></textarea> 
                    		</div>

                    		<div class="form-group">
                    		  <input type="submit" name="send" class="btn btn-info" value="send"/>
                    		</div>
                    	</form>
                    </div>
                </div>
            </div>
            <!-- End Of New Arrival Area  --> 


@endsection