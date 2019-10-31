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

Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/contact', 'Frontend\PagesController@contact')->name('contact');
/*
 Product Route
 All the routes for our product for frontend
*/
Route::get('/products', 'Frontend\ProductsController@index')->name('products');
Route::get('/products/{slug}', 'ProductsController@show')->name('products.show');

/*
 Admin Routes for Backend
*/

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'Backend\PagesController@index')->name('admin.index');

  /*
   Product Routes
  */

Route::group(['prefix' => '/products'],function(){
  Route::get('/', 'Backend\ProductController@index')->name('admin.products');
  Route::get('/store', 'Backend\ProductController@create')->name('admin.product.create');
  Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('admin.product.edit');

  Route::post('/store', 'Backend\ProductController@store')->name('admin.product.store');

  Route::post('edit/{id}', 'Backend\ProductController@update')->name('admin.product.update');
  Route::post('/delete/{id}', 'Backend\ProductController@delete')->name('admin.product.delete');
  });

  /*
   Category Routes
  */

Route::group(['prefix' => '/categories'],function(){
  Route::get('/', 'Backend\CategoriesController@index')->name('admin.categories');
  Route::get('/store', 'Backend\CategoriesController@create')->name('admin.categories.create');
  Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('admin.categories.edit');

  Route::post('/store', 'Backend\CategoriesController@store')->name('admin.categories.store');

  Route::post('edit/{id}', 'Backend\CategoriesController@update')->name('admin.categories.update');
  Route::post('/delete/{id}', 'Backend\CategoriesController@delete')->name('admin.categories.delete');
});


});
