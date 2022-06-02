<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\Controller;
use App\Models\Product;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Controller::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(["middleware" => ["auth"]], function(){

    Route::get('/categories', [CategoryController::class, 'index']) ->name('categories');
    Route::get('createCategory', [CategoryController::class, 'create'])->name('createCategory');
    Route::post('saveCategory', [CategoryController::class, 'store'])->name('saveCategory');
    Route::get('editCategory/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::put('updateCategory/{id}', [ProductController::class, 'update'])->name('updateCategory');
    Route::get('/destroy', [CategoryController::class, 'destroy'])->name('delete');
    Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('destroy');

    Route::post('saveProduct',[ProductController::class, 'store'])->name('saveProduct');
    Route::get('createProduct',[ProductController::class, 'create'])->name('createProduct');
    Route::get('/products',[ProductController::class, 'index'])->name('products');
    Route::get('editProduct/{id}', [ProductController::class, 'edit'])->name('editProduct');
    Route::put('updateProduct/{id}', [ProductController::class, 'update'])->name('updateProduct');
    Route::get('/destroy', [ProductController::class, 'destroy'])->name('delete');
    Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('destroy');


    Route::get('addVariants',[ProductVariantController::class, 'create'])->name('addVariants');
    Route::post('saveVariant',[ProductVariantController::class, 'store'])->name('saveVariant');
    Route::get('/variants',[ProductVariantController::class, 'index'])->name('variants');
    Route::get('editvariant/{id}', [ProductVariantController::class, 'edit'])->name('editVariant');
    Route::put('updatevariant/{id}', [ProductVariantController::class, 'update'])->name('updateVariant');
    Route::get('/destroy', [ProductVariantController::class, 'destroy'])->name('delete');
    Route::delete('variant/{id}', [ProductVariantController::class, 'destroy'])->name('destroy');

 });

Route::get('/category/{category}', [CategoryController::class, 'getCategoryProducts'])->name('getCategoryProducts');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('showCategoryProducts');

Route::get('/index',[ProductVariantController::class, 'index'])->name('index');

Route::get('/products/{product:slug}', [ProductController::class, 'getProductVariants'])->name('getProductVariants');
// Route::get('editProduct/{id}', [ProductController::class, 'getProductCategories'])->name('getProductCategories');
Route::get('/getProductId/{id}',[ProductVariantController::class, 'getProductId'])->name('addVariant');

require __DIR__.'/auth.php';
