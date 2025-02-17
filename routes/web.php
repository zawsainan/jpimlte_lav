<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view("pages.home");
});


Route::get('/home',function(){
    return view("pages.home");
})->name('home');


Route::prefix('about')->group(function(){
    Route::get('firm',function(){
        return view("pages.about-firm");
    })->name('firm');
    Route::get('team',function(){
        return view("pages.about-team");
    })->name('team');
});


Route::controller(PropertyController::class)->group(function(){
    Route::prefix('/portfolio')->group(function(){
        Route::get("/",'index')->name('portfolio');
        Route::get("/interior/{id}",'showInterior')->name('interior');
        Route::get("/attraction/{id}",'showAttraction')->name('attraction');
    });
});