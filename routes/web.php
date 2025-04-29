<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\AssetController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

# Buat /welcome
Route::get('/welcome', function ()
{
    return view('welcome');
});

# Buat /user/(ID)
Route::get('/user/{id}', function($id)
{
    return 'User Dengan ID ' . $id;
});

#Prefix = Group
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function (){
        return 'Admin Dashboard';
    });

    Route::get ('/users', function (){
        return 'Admin Users';
    });
});

// Route List Barang - id - nama
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

// Route Asset
Route::get('/asset', [AssetController::class, 'index']);

// Routing menuju controller ProductController dan view list_product
use App\Http\Controllers\ProductController;

Route::get('/produk', [ProductController::class, 'index']);

Route::get('/about', function () {
    return view('pages.about');
});
