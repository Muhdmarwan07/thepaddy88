@extends('layout')
@section('content')
 <div class="register-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <h4 class="text-uppercase mb-20"><strong>REGISTERED CUSTOMERS</strong></h4><BR>
                                <form action="#" method="post">
                                    <div class="login-account p-30 box-shadow">
                                        <p>If you have an account with us, Please log in.</p>
                                        <input type="text" placeholder="Email Address" required="" name="customer_email">
                                        <input type="password" placeholder="Password" required="" name="password">
                                        <p><small><a href="#">Forgot our password?</a></small></p>
                                        <button type="submit" class="cart-button text-uppercase">login</button>
                                    </div>
                                </form>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="registered-customers new-customers">
                                <div class="section-title text-uppercase mb-40">
                                    <h4>NEW CUSTOMERS</h4>
                                </div>
                                <form action="{{URL('/customer_registration')}}" method="post">
                                	{{ csrf_field() }}
                                    <div class="login-account p-30 box-shadow">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="text" placeholder="Full Name" required="" name="customer_name">
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="text" placeholder="Phone here..." required="" name="mobile_number" >
                                            </div>
                                        </div>
                                        <!-- <input type="text" placeholder="Company neme here..."> -->
                                        <input type="text" placeholder="Email address here..." required="" name="customer_email">
                                        <input type="password" placeholder="Password" required="" name="password">
                                        <!-- <input type="password" placeholder="Confirm Password"> -->
                                        <div class="checkbox">
                                            <label class="mr-10"> 
                                                <small>
                                                    <input type="checkbox" name="signup">Sign up for our newsletter!
                                                </small>
                                            </label>
                                            <label> 
                                                <small>
                                                    <input type="checkbox" name="signup">Receive special offers from our partners!
                                                </small>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button value="register" type="submit" class="cart-button text-uppercase mt-20">Register</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="reset" class="cart-button text-uppercase mt-20">Clear</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Register Area -->





@endsection