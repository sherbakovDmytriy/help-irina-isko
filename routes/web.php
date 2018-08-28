<?php

Auth::routes();

Route::get('/', "MainController@index");
Route::get('/blog', "MainController@blog");
Route::get('/article/{id}', "MainController@article");

// Admin panel

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    Route::get('/', 'Admin\IndexController@index');

    /* Блог */
    Route::group(['prefix' => 'post'], function ()
    {
        Route::get('/', 'Admin\PostController@index');

        Route::get('/add', 'Admin\PostController@addIndex');
        Route::post('/add', 'Admin\PostController@add');

        Route::get('/edit/{id}', 'Admin\PostController@editIndex');
        Route::post('/edit/{id}', 'Admin\PostController@edit');

        Route::post('/delete', 'Admin\PostController@delete');

        // Корзина блога
        Route::group(['prefix' => 'basket'], function ()
        {
            Route::get('/', 'Admin\PostController@basketIndex');
            Route::post('/delete', 'Admin\PostController@basketDelete');
            Route::post('/recover', 'Admin\PostController@basketRecover');
            Route::post('/clear', 'Admin\PostController@basketClear');
        });
    });

    Route::get('/logout', 'Auth\LoginController@logout');
});