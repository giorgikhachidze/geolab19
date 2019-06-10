<?php



Route::namespace('Front')->name("blog.")->group(function () {
    
    Route::get("", "BlogController@index")->name("index");
    Route::get("/blog/{id}/{title?}", "BlogController@article")->name("article");

});



