<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\WebsiteController;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[WebsiteController::class, "home"]);
Route::get('/login', [WebsiteController::class, "login_page"]);
Route::get('/register', [WebsiteController::class, "register_page"]);
Route::get('/logout', [WebsiteController::class, "logout"]);
Route::get('/view_product/{id}',[WebsiteController::class, "view_product"]);
Route::get('/view_category/{id}', [WebsiteController::class, "view_category"]);
Route::get('/view_subcategory/{id}', [WebsiteController::class, "view_subcategory"]);
Route::get('/search', [WebsiteController::class, "search"]);
Route::get('/wishlist',[WebsiteController::class, "wishlist"]);
Route::get('/shoppingCart', [WebsiteController::class, "shoppingCart"]);
Route::get('/cart_checkout', [WebsiteController::class, "cart_checkout"]);

Route::post('/login_check', [WebsiteController::class, "login_check"]);
Route::post('/create_account', [WebsiteController::class, "create_account"]);
Route::post('/post_review', [WebsiteController::class, "post_review"]);
Route::post('/add_to_wishlist',[WebsiteController::class, "add_to_wishlist"]);
Route::post('/add_to_cart', [WebsiteController::class, "add_to_cart"]);
Route::post('/remove_wish', [WebsiteController::class, "remove_wish"]);
Route::post('/remove_from_cart', [WebsiteController::class, "remove_from_cart"]);
Route::post('/cart_product_increase', [WebsiteController::class, "cart_product_increase"]);
Route::post('/make_payment', [WebsiteController::class, "make_payment"]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
