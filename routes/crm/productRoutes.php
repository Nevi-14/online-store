<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGroupController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SubCategoriesController;
Route::group(['prefix'=>'/product','middleware'=>['auth']], function(){

    // SECTION Product Group Routes
    Route::get('/productgroup', [ProductGroupController::class, 'index']);
    Route::post('/productgroup/store', [ProductGroupController::class, 'store']);
    Route::put('/productgroup/{productGroup}', [ProductGroupController::class, 'update']);
    Route::delete('/productgroup/destroy/{productGroup}', [ProductGroupController::class, 'destroy']);
    // !SECTION Product Group Routes
    
    // SECTION Product Categories Routes
    Route::get('/categories', [CategoriesController::class, 'index']);
    Route::post('/categories/store', [CategoriesController::class, 'store']);
    Route::put('/categories/{category}', [CategoriesController::class, 'update']);
    Route::delete('/categories/destroy/{category}', [CategoriesController::class, 'destroy']);
    // !SECTION Categories Group Routes
    
    // SECTION Product Subcategories Routes
    Route::get('/subcategories', [SubCategoriesController::class, 'index']);
    Route::post('/subcategories/store', [SubCategoriesController::class, 'store']);
    Route::put('/subcategories/{subcategory}', [SubCategoriesController::class, 'update']);
    Route::delete('/subcategories/destroy/{subcategory}', [SubCategoriesController::class, 'destroy']);
    // !SECTION Product Subcategories Routes

    // SECTION Product Routes
    Route::get('/', [ProductController::class, 'index'])->middleware(['can:view-product']);
    Route::get('/create', [ProductController::class, 'create'])->middleware(['can:create-product']);
    Route::post('/store', [ProductController::class, 'store'])->middleware(['can:create-product']);
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('product.edit')->middleware(['can:view-product']);
    Route::put('/update/{product}', [ProductController::class, 'update'])->middleware(['can:update-product']);
    Route::delete('/destroy/{product}', [ProductController::class, 'destroy'])->middleware(['can:delete-product']);
    
    
    // Bulk Excel Import Users
    Route::get('/import', [ ProductController::class, 'import'])->middleware(['can:create-product']);
    Route::post('/import', [ ProductController::class, 'importStore'])->middleware(['can:create-product']);
    // !SECTION Product Routes


});
?>