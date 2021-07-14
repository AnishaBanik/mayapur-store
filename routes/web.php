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

Route::post('/login_check', [WebsiteController::class, "login_check"]);
Route::post('/create_account', [WebsiteController::class, "create_account"]);
Route::post('/post_review', [WebsiteController::class, "post_review"]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
