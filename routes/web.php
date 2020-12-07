<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('/','AdminController@index')->name('admin');

    Route::group(['prefix' => 'heroes'],function(){
        Route::get('/','HeroController@index')->name('admin.heroes');
        Route::get('create','HeroController@create')->name('admin.heroes.create');
        Route::post('store','HeroController@store')->name('admin.heroes.store'); 
        Route::get('edit/{id}','HeroController@edit')->name('admin.heroes.edit'); 
        Route::post('update/{id}','HeroController@update')->name('admin.heroes.update');
        Route::post('destroy/{id}','HeroController@destroy')->name('admin.heroes.destroy');           
    });    

    Route::group(['prefix' => 'items'],function(){
        Route::get('/','ItemController@index')->name('admin.items');
        Route::get('create','ItemController@create')->name('admin.items.create');
        Route::post('store','ItemController@store')->name('admin.items.store'); 
        Route::get('edit/{id}','ItemController@edit')->name('admin.items.edit'); 
        Route::post('update/{id}','ItemController@update')->name('admin.items.update');
        Route::post('destroy/{id}','ItemController@destroy')->name('admin.items.destroy'); 
    });  
    
    Route::group(['prefix' => 'enemies'],function(){
        Route::get('/','EnemyController@index')->name('admin.enemies');
        Route::get('create','EnemyController@create')->name('admin.enemies.create');
        Route::post('store','EnemyController@store')->name('admin.enemies.store'); 
        Route::get('edit/{id}','EnemyController@edit')->name('admin.enemies.edit'); 
        Route::post('update/{id}','EnemyController@update')->name('admin.enemies.update');
        Route::post('destroy/{id}','EnemyController@destroy')->name('admin.enemies.destroy');
    });

});

