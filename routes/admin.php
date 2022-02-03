<?php

Route::group(['middleware' => ['guest:admin']], function () {
    Route::get('/login', 'AuthController@viewLogin')->name('admin.login');
    Route::post('/login', 'AuthController@login');
    Route::post('admin-logout', 'AuthController@adminLogout')->name('admin.logout');
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
});

Route::resource('clients', 'ClientController');
Route::resource('categories', 'CategoryController');


?>

