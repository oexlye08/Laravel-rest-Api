<?php




Route::namespace('Auth')->group(function(){

    Route::post('register','RegisterController');
    Route::post('login','LoginController');
    Route::post('logout','LogoutController');

});

Route::namespace('Article')->middleware('auth:api')->group(function(){

    Route::post('create-new-article','ArticleController@store');

});


Route::get('user','UserController');


