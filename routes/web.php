<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductFavoriteController;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\OrderController;
use App\Constants\UserType;
use App\Models\Manufacturer;



Route::prefix('/')->middleware(['auth', 'adminMiddleware:'.UserType::ADMIN])->group(function () {
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

//route: order
Route::post('/confirm-admin', [AdminController::class, 'comfirmAdmin'])->name('comfirmAdmin');
Route::get('all-order-admin',[AdminController::class, 'allOrderAdmin'])->name('allOrderAdmin');
Route::post('order-detail-admin',[AdminController::class, 'orderDetailAdmin'])->name('orderDetailAmin');
Route::post('/cancel-order-admin', [AdminController::class, 'cancelOrderAdmin'])->name('cancelOrderAdmin');
});
  



//Website 
Route::get('/',[HomeController::class,'index'])->name('3TDL Store');
Route::get('category-user/{categoryName}',[HomeController::class,'categoryUser'])->name('categoryUser');
Route::get('category-user/{categoryName}/{manufacturerName}',[HomeController::class,'categoryByManufacturer'])->name('categoryByManufacturer');

Route::get('detail/{productName}', [HomeController::class,'detailProduct'])->name('detailProduct');

//search 
Route::get('search', [HomeController::class,'search'])->name('search');

//register
Route::get('register', [AccountController::class,'registerUser'])->name('registerUser');
Route::post('create-user',[AccountController::class,'createUser'])->name('createUser');

//login
Route::get('login', [AccountController::class,'loginUser'])->name('loginUser');
Route::post('confirm-login',[AccountController::class,'confirmLogin'])->name('confirmLogin');
//logout
Route::get('signout', [AccountController::class, 'signOut'])->name('signout')->middleware('redirectIfNotLoggedIn');

//product_favorite
Route::get('product-favorite',[ProductFavoriteController::class, 'index'])->name('productFavorite');

Route::post('favorite/add', [ProductFavoriteController::class, 'favoriteProductAdd'])->name('favoriteProductAdd')->middleware('loginRequired');
Route::post('favorite/remove', [ProductFavoriteController::class, 'favoriteProductRemove'])->name('favoriteProductRemove')->middleware('loginRequired');

//product_cart
Route::get('product-cart',[ProductCartController::class, 'index'])->name('productCart');

Route::post('cart/add', [ProductCartController::class, 'cartProductAdd'])->name('cartProductAdd')->middleware('loginRequired');
Route::post('cart/decrease', [ProductCartController::class, 'cartProductDecrease'])->name('cartProductDecrease')->middleware('loginRequired');
Route::post('cart/remove', [ProductCartController::class, 'cartProductRemove'])->name('cartProductRemove')->middleware('loginRequired');

Route::post('cart/bye', [ProductCartController::class, 'cartProductBye'])->name('cartProductBye')->middleware('loginRequired');

///order 
Route::get('order',[OrderController::class, 'index'])->name('order')->middleware('redirectIfNotLoggedIn');
Route::post('/payment-confirm', [OrderController::class, 'confirmPayment'])->name('confirmPayment');
Route::post('/confirm', [OrderController::class, 'comfirm'])->name('comfirm');
Route::post('/cancel-order', [OrderController::class, 'cancelOrder'])->name('cancelOrder');

Route::get('all-order',[OrderController::class, 'allOrder'])->name('allOrder')->middleware('redirectIfNotLoggedIn');
Route::post('order-detail',[OrderController::class, 'orderDetail'])->name('orderDetail')->middleware('redirectIfNotLoggedIn');


//looup oreder
Route::get('order-lookup',[OrderController::class, 'orderLookup'])->name('orderLookup');

Route::post('search-results',[OrderController::class, 'searchResults'])->name('searchResults');

//search-results