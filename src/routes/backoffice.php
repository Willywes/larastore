<?php

$namespace = "Willywes\Larastore\Http\Controllers";

Route::group(['namespace' => $namespace, 'prefix' => 'larastore/backoffice'], function () {
    Route::get('/', function(){
        return view('Larastore::index');
    })->name('larastore.backoffice');
});