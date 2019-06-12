<?php

Route::namespace('Front')->name("blog.")->group(function () {
    
    Route::get("", "BlogController@index")->name("index");
    Route::get("/blog/{id}/{title?}", "BlogController@article")->name("article");

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace("Admin")->name("admin.")->prefix("admin")->middleware(["auth","isAdmin"])->group(function(){

    Route::get("blog/create", "BlogController@create");
    Route::post("blog/store", "BlogController@store")->name("blog.store");

    Route::get("/dashboard", function (){

        return view("admin.dashboard.index");
    })->name("dashboard");

});