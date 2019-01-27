<?php

use Illuminate\Http\Request;

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

Route::get('pages', 'PagesController@pages');
Route::get('getposts', 'PagesController@posts');
Route::get('getcategorys', 'PagesController@categorys');
Route::post('page', 'PagesController@page');
Route::get('menus', 'PagesController@menus');
Route::get('sliders', 'PagesController@sliders');
