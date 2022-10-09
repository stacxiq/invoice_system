<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\InvoiceController;
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
    });
});

Auth::routes();


Route::get('/{page}', AdminController::class);



