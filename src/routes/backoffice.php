<?php

Route::get('test', function (){
    return view('Larastore::index');
});
Route::resource('products', 'ProductController');
Route::resource('products-categories', 'ProductCategoryController');