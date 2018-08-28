<?php


Route::get('/', function () {
    return view('welcome');
});

// Admin panel

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    Route::get('/', 'Admin\IndexController@index');

    /* Блог */
    Route::group(['prefix' => 'post'], function (){
        Route::get('/', 'Admin\PostController@index');

        Route::get('/add', 'Admin\PostController@addIndex');
        Route::post('/add', 'Admin\PostController@add');

        Route::get('/edit/{id}', 'Admin\PostController@editIndex');
        Route::post('/edit/{id}', 'Admin\PostController@edit');

        Route::post('/delete', 'Admin\PostController@delete');

        // Корзина блога
        Route::group(['prefix' => 'basket'], function (){
            Route::get('/', 'Admin\PostController@basketIndex');
            Route::post('/delete', 'Admin\PostController@basketDelete');
            Route::post('/recover', 'Admin\PostController@basketRecover');
            Route::post('/clear', 'Admin\PostController@basketClear');
        });
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
