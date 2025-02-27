<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\CategorieController;



Route::get('/', function () {
    return view('welcome');
});

// Routepour les restaurants

Route::get('/restaurants',[RestaurantsController::Class,'index'])->name('restaurants.index');

Route::get('/restaurants/create',[RestaurantsController::Class,'create'])->name('restaurants.create');

Route::post('/restaurants',[RestaurantsController::Class,'store'])->name('restaurants.store');

Route::get('/restaurants/{id}/show',[RestaurantsController::Class,'show'])->name('restaurants.show');

Route::get('/restaurants/{id}/edit',[RestaurantsController::Class,'edit'])->name('restaurants.edit');

Route::put('/restaurants/{id}/update',[RestaurantsController::Class,'update'])->name('restaurants.update');

Route::delete('/restaurants/{id}/destroy',[RestaurantsController::Class,'destroy'])->name('restaurants.destroy');


// Route pour les categories:

Route::get('/categories',[CategorieController::Class,'index'])->name('categories.index');

Route::get('/categories/create',[CategorieController::Class,'create'])->name('categories.create');

Route::post('/categories',[CategorieController::Class,'store'])->name('categories.store');

Route::get('/categories/{id}/show',[CategorieController::Class,'show'])->name('categories.show');

Route::get('/categories/{id}/edit',[CategorieController::Class,'edit'])->name('categories.edit');

Route::put('/categories/{id}/update',[CategorieController::Class,'update'])->name('categories.update');

Route::delete('/categories/{id}/destroy',[CategorieController::Class,'destroy'])->name('categories.destroy');
