<?php
use Illuminate\Http\Request;
use App\Models\SingleRowData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Office\GeneralSettingsController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\TaskManagerController;

use App\Http\Controllers\FileUploadController;

use Illuminate\Support\Facades\Artisan;
Route::get('/', function () {

 
    return view('welcome');
});

Route::get('/refresh', function(){
    session()->put('refresh',true);
    return redirect()->back();
})->middleware('crm_counter');

Route::get('/lang', function(Request $request){
    if (! in_array($request->lang_code, config('constants.LOCALES'))) {
        abort(400);
    }
    App::setLocale($request->lang_code);
    session()->put('applocale', $request->lang_code);
    $minutes = 9999;
    Cookie::queue("applocale", $request->lang_code, $minutes);
    return redirect()->back();
});

Auth::routes([
    'register'=>false
]);


Route::get('services', 'HomePageController@services');

Route::get('about', 'HomePageController@about');

Route::get('rates', 'HomePageController@rates');

Route::get('contact', 'HomePageController@contact');



Route::group(['middleware'=>['auth']], function(){




    /***
     * TASK MANAGER
     */


    // Customer Routes
    Route::get('/task/manager/create/{task}', [TaskManagerController::class, 'create'])->middleware(['can:create-task']);
    Route::get('/task/manager', [TaskManagerController::class, 'index'])->middleware(['can:view-task']);
    Route::post('/task/manager', [TaskManagerController::class, 'store'])->middleware(['can:create-task']);
    Route::get('/task/manager/show/{task}',[TaskManagerController::class, 'show'])->middleware(['can:view-task']);
    Route::put('/task/manager/edit/{task}', [TaskManagerController::class, 'update'])->middleware(['can:update-task']);
    Route::delete('/task/manager/destroy/{task}', [TaskManagerController::class, 'destroy'])->middleware(['can:delete-task']);

    // Product Details

    Route::post('/product/details', [ProductDetailController::class, 'store'])->name('product.details.store')->middleware(['can:create-task']);
    Route::put('/product/details/edit/{productDetail}', [ProductDetailController::class, 'update'])->name('product.details.update')->middleware(['can:create-task']);
    Route::delete('/product/details/destroy/{productDetail}', [ProductDetailController::class, 'destroy'])->name('product.details.destroy')->middleware(['can:create-task']);




});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('file',[FileUploadController::class, 'store'])->name('upload.file');
Route::get('download_local',[FileUploadController::class, 'download_local']);
Route::get('show_images',[ProductImageController::class, 'showImage']);
Route::get('show_company_images',[GeneralSettingsController::class, 'showCompanyImage']);

Route::get('/storage/{folder}/{subfolder}/{filename}', function ($folder, $subfolder, $filename)
{
    $path = storage_path( $folder.'/'. $subfolder.'/'. $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


