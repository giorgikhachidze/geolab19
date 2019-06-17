<?php

Route::namespace('Front')->name("blog.")->group(function () {
    
    Route::get("", "BlogController@index")->name("index");
    Route::get("/blog/{id}/{title?}", "BlogController@article")->name("article");

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace("Admin")->name("admin.")->prefix("admin")->middleware(["auth","isAdmin"])->group(function(){

    Route::get("blog/index", "BlogController@index")->name('blog.index');
    Route::get("blog/create", "BlogController@create")->name('blog.create');
    Route::get("blog/trash", "BlogController@trash")->name("blog.trash");
    Route::post("blog/store", "BlogController@store")->name("blog.store");
    Route::post("blog/{id}/destroy", "BlogController@destroy")->name("blog.destroy");
    Route::post("blog/{id}/trashStore", "BlogController@trashStore")->name("blog.trashStore");
    Route::post("blog/{id}/trashDestroy", "BlogController@trashDestroy")->name("blog.trashDestroy");

    Route::get("/dashboard", function (){

        return view("admin.dashboard.index");
    })->name("dashboard");

});