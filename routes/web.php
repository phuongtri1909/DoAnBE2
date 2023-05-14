<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;

use App\Models\Manufacturer;

//Route admin
Route::get('/admin', [AdminController::class,'index'])->name(('admin'));


//Route: category
Route::get('category',[CategoryController::class,'index'])->name('category');
Route::get('add-category',[CategoryController::class,'addCategory'])->name('addCategory');
Route::post('add-category', [CategoryController::class, 'adminCreateCategory'])->name('addCategory.admin');
Route::post('edit-category',[CategoryController::class,'editCategory'])->name('editCategory');
Route::post('admin-update-category/{id}',[CategoryController::class,'adminUpdateCategory'])->name('updateCategory.admin');
Route::post('admin-delete-category', [CategoryController::class, 'delete'])->name('deleteCategory.admin');

//Route: Manufacturer
Route::get('manufacturer',[ManufacturerController::class,'index'])->name('manufacturer');
Route::get('create-manufacturer',[ManufacturerController::class,'createManufacturer'])->name('createManufacturer');
Route::post('create-manufacturer', [ManufacturerController::class, 'adminCreateManufacturer'])->name('createManufacturer.admin');
Route::post('edit-manufacturer',[ManufacturerController::class,'editManufacturer'])->name('editManufacturer');
Route::put('admin-update-manufacturer/{id}',[ManufacturerController::class,'adminUpdateManufacturer'])->name('updateManufacturer.admin');
Route::post('admin-delete-manufacturer', [ManufacturerController::class, 'delete'])->name('deleteManufacturer.admin');

//route: properties
Route::resource('/properties',PropertiesController::class);

//route: product
Route::resource('product',ProductController::class);
Route::get('product-create',[ProductController::class,'nextCreate'])->name('selectedCategories');
Route::post('product-selected-edit',[ProductController::class,'nextEdit'])->name('editSelectedCategories');
Route::post('product-edit',[ProductController::class,'edit'])->name('editCategories');



//Website 
Route::get('/',function (){return view('layoutWebs/header');})->name('home');
Route::get('/footer',function (){return view('layoutWebs/footer');});

