<?php

use Illuminate\Http\Request;
use App\Category;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signup', 'AuthController@register');
Route::post('/login', 'AuthController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('/account', 'AuthController@user');
    Route::get('/account/menu', 'MenuController@index');
    Route::post('/logout', 'AuthController@logout');

    // extends information after login
    Route::get('/customer', 'CustomerController@index');
});

Route::middleware('jwt.refresh')->get('/token/refresh', 'AuthController@refresh');

Route::group(['prefix' => '/v2', 'middleware' => 'jwt.auth'], function () {
    Route::get('/category', function () {
        $categories = Category::where('deleted_at', null)->paginate(10);
        return $categories;
    });

});
