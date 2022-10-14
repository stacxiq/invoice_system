<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoicesAttachmentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth'])->group(function (){
    Route::get('/', function () {
        return view('index');
    });
    Route::resource('invoice', InvoiceController::class);
//    Route::resource('sections', SectionsController::class);

    Route::prefix('sections')->name('sections.')->group(function (){
        Route::get('/', [SectionsController::class,'index'])->name('index');
        Route::put('/', [SectionsController::class,'update'])->name('update');
        Route::delete('/', [SectionsController::class,'destroy'])->name('destroy');
        Route::post('/', [SectionsController::class,'store'])->name('store');
        Route::get('/{id}', [SectionsController::class,'getProducts'])->name('get-products');
    });
    Route::prefix('products')->name('products.')->group(function (){
        Route::get('/', [ProductController::class,'index'])->name('index');
        Route::put('/', [ProductController::class,'update'])->name('update');
        Route::delete('/',[ProductController::class,'destroy'])->name('destroy');
        Route::post('/', [ProductController::class,'store'])->name('store');
    });
    Route::post('delete_file', [InvoicesAttachmentController::class,'destroy'])->name('delete_file');

    Route::get('image/{invoice_number}/{file_name}', [InvoicesAttachmentController::class,'show_image'])->name('show_image');
    Route::get('image_download/{invoice_number}/{file_name}', [InvoicesAttachmentController::class,'download_image'])->name('image_download');
});

Auth::routes();


Route::get('/{page}', AdminController::class);



