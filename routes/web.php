<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//frontend site.................................................................
Route::get('/', 'HomeController@index');
Route::get('/my_account', 'HomeController@my_account');
Route::get('/contact', 'MailController@contact');
Route::post('/send/email', 'MailController@sendmail');

//seller route
Route::get('/sellerdashboard', 'SuperSellerController@indexx');
Route::get('/seller-logout','SuperSellerController@seller_logout');
Route::get('/seller', 'SellerController@indexx');
Route::post('/seller-dashboard', 'SellerController@sellerdashboard');
Route::get('/seller-manage-order','CheckoutController@seller_manage_order');
Route::get('/seller_regis','SuperAdminController@seller_regis');
Route::post('/seller_registration','SuperAdminController@seller_registration');

//seller category
Route::get('/seller-add-category','CategoryController@indexx');
Route::get('/seller-all-category','CategoryController@seller_all_category');
Route::get('/seller-edit-category/{category_id}','CategoryController@seller_edit_category');
Route::post('/seller-update-category/{category_id}','CategoryController@seller_update_category');
Route::post('/seller-save-category','CategoryController@seller_save_category');

//seller manufacture
Route::get('/seller-add-manufacture','ManufactureController@indexx');
Route::get('/seller-all-manufacture','ManufactureController@seller_all_manufacture');

//seller product
Route::get('/seller-add-product','ProductController@indexx');
Route::get('/seller-all-product','ProductController@seller_all_product');
Route::post('/seller-save-product','ProductController@seller_save_product');
Route::get('/seller-unactive_product/{product_id}','ProductController@seller_unactive_product');
Route::get('/seller-active_product/{product_id}','ProductController@seller_active_product');
Route::get('/seller-delete-product/{product_id}','ProductController@seller_delete_product');
Route::get('/seller-edit-product/{product_id}','ProductController@seller_edit_product');
Route::post('/seller-update-product/{product_id}','ProductController@seller_update_product');

//payment
Route::get('/order-complete', 'PaymentController@order_complete');

//show category wise product here
Route::get('/product_by_category/{category_id}', 'HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}', 'HomeController@show_product_by_manufacture');
Route::get('/view_product/{product_id}', 'HomeController@product_detail_by_id');
Route::get('/shop', 'HomeController@shop');

//cart are here
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart','CartController@update_cart');

//checkout route
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer_registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');
Route::get('/manage-order','CheckoutController@manage_order');

//customer login & logout
Route::post('/customer-login','CheckoutController@customer_login');
Route::get('/customer-logout','CheckoutController@customer_logout');

Route::get('/payment','CheckoutController@payment');

//backend route...............................................................
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SuperAdminController@index');
Route::post('/admin-dashboard', 'AdminController@dashboard');

//category related route
Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::post('/update-category/{category_id}','CategoryController@update_category');
Route::get('/delete-category/{category_id}','CategoryController@delete_category');
Route::get('/unactive_category/{category_id}','CategoryController@unactive_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');

//manufature or brands routes
Route::get('/add-manufacture','ManufactureController@index');
Route::post('/save-manufacture','ManufactureController@save_manufacture');
Route::get('/all-manufacture','ManufactureController@all_manufacture');
Route::get('/delete-manufacture/{manufacture_id}','ManufactureController@delete_manufacture');
Route::get('/edit-manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}','ManufactureController@update_manufacture');
Route::get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');

//product route
Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/unactive_product/{product_id}','ProductController@unactive_product');
Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//slider route
Route::get('/add-slider','SliderController@index');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/all-slider','SliderController@all_slider');
Route::get('/unactive_slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active_slider/{slider_id}','SliderController@active_slider');
Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');


//stripe payment
Route::post ( '/payment','StripePaymentController@stripe');




