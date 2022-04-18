<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fish_cntrlr;


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

Route::get('/',[fish_cntrlr::class,'index']);
Route::get('/about',[fish_cntrlr::class,'about']);
Route::get('/cart',[fish_cntrlr::class,'cart']);
Route::post('/checkout/{pid}',[fish_cntrlr::class,'checkout']);
Route::get('/recipes_user',[fish_cntrlr::class,'recipes_user']);
Route::get('/product_user/{cid}',[fish_cntrlr::class,'product_user']);
Route::post('/update_product/{pid}',[fish_cntrlr::class,'update_product']);
Route::get('/my-account',[fish_cntrlr::class,'myaccount']);
Route::get('/shop-detail/{pid}',[fish_cntrlr::class,'shopdetail']);
Route::get('/shop',[fish_cntrlr::class,'shop']);
Route::get('/contact_us',[fish_cntrlr::class,'contact_us']);
Route::get('/track_order_user',[fish_cntrlr::class,'track_order_user']);
Route::get('/change_login',[fish_cntrlr::class,'change_login']);
Route::post('/edit_login',[fish_cntrlr::class,'edit_login']);
Route::get('/update_address',[fish_cntrlr::class,'update_address']);
Route::get('/view_profile_user',[fish_cntrlr::class,'view_profile_user']);
Route::post('/edit_address',[fish_cntrlr::class,'edit_address']);


Route::get('/index_admin',[fish_cntrlr::class,'index_admin']);

Route::get('/login',[fish_cntrlr::class,'login']);
Route::get('/signup',[fish_cntrlr::class,'signup']);
Route::post('/signup_insrt',[fish_cntrlr::class,'signup_insrt']);

Route::post('check_login',[fish_cntrlr::class,'check_login']);

Route::get('/logout',[fish_cntrlr::class,'logout']);

Route::get('/category',[fish_cntrlr::class,'category']);
Route::get('/product',[fish_cntrlr::class,'product']);
Route::get('/update_product_admin/{pid}',[fish_cntrlr::class,'update_product_admin']);
Route::get('/delete_product/{pid}',[fish_cntrlr::class,'delete_product']);
Route::get('/recipes',[fish_cntrlr::class,'recipes']);
Route::get('/view_customer',[fish_cntrlr::class,'view_customer']);
Route::get('/customer_allpurchase',[fish_cntrlr::class,'customer_allpurchase']);
Route::get('/template_content',[fish_cntrlr::class,'template_content']);
Route::get('/customer_message',[fish_cntrlr::class,'customer_message']);
Route::get('/view_message/{mid}',[fish_cntrlr::class,'view_message']);
Route::post('//insrt_message/{mid}',[fish_cntrlr::class,'insrt_message']);

Route::get('/view_category',[fish_cntrlr::class,'view_category']);
Route::post('/insrt_category',[fish_cntrlr::class,'insrt_category']);
Route::get('/view_product',[fish_cntrlr::class,'view_product']);
Route::post('/insrt_product',[fish_cntrlr::class,'insrt_product']);
Route::get('/view_recipes',[fish_cntrlr::class,'view_recipes']);
Route::post('/insrt_recipes',[fish_cntrlr::class,'insrt_recipes']);
Route::post('/insrt_content',[fish_cntrlr::class,'insrt_content']);
Route::get('/confirm_user/{lid}',[fish_cntrlr::class,'confirm_user']);
Route::get('/buy_now/{pid}',[fish_cntrlr::class,'buy_now']);
Route::post('/add_cart/{pid}',[fish_cntrlr::class,'add_cart']);
Route::post('/insrt_complaint',[fish_cntrlr::class,'insrt_complaint']);
Route::get('/view_reply',[fish_cntrlr::class,'view_reply']);
Route::get('/sample1',[fish_cntrlr::class,'sample1']);
Route::get('/select_amount/{number1}',[fish_cntrlr::class,'select_amount']);
Route::post('/sample2',[fish_cntrlr::class,'sample2']);
Route::get('/view_cart',[fish_cntrlr::class,'view_cart']);
Route::get('/delete_cart/{cart_id}',[fish_cntrlr::class,'delete_cart']);
Route::post('/insert_order',[fish_cntrlr::class,'insert_order']);
Route::post('/insert_orders',[fish_cntrlr::class,'insert_orders']);
Route::get('/view_customer_cart/{sid}',[fish_cntrlr::class,'view_customer_cart']);
Route::get('/admin_action_dispatched/{sid}',[fish_cntrlr::class,'admin_action_dispatched']);
Route::get('/admin_action_delivered/{sid}',[fish_cntrlr::class,'admin_action_delivered']);
Route::get('/get_category',[fish_cntrlr::class,'get_category']);
Route::get('/get_product/{cid}',[fish_cntrlr::class,'get_product']);














