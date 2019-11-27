<?php
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
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');


Route::group(['middleware' => 'auth:api'], function(){
    
    Route::post('items', 'API\ItemController@getItems');
    Route::post('sort/items', 'API\ItemController@sortedItems');
    Route::post('add/item', 'API\ItemController@addItem');
    Route::post('show/item/{id}', 'API\ItemController@showItem');
    Route::post('edit/item', 'API\ItemController@editItem');
    Route::post('delete/item', 'API\ItemController@deleteItem');
    Route::post('search/items', 'API\ItemController@searchItems');

});
