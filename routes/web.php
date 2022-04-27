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
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\TaskManagerController;
use App\Http\Controllers\ChesterTrackerNotesController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\OnceHubController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\OnceHub;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PropertyTrackerNotesController;
use App\Http\Controllers\AppointmentNoteController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\PropertyTrackerController;
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





    // CHESTER 



    Route::get('/team', [TeamController::class, 'index']);
    Route::get('/team/create', [TeamController::class, 'create']);
    Route::post('/team', [TeamController::class, 'store']);
    Route::get('/team/lead/show/{lead}', [TeamController::class, 'show']);
    Route::put('/team/lead/{lead}', [TeamController::class, 'update']);
    Route::delete('/team/lead/destroy/{lead}', [TeamController::class, 'destroy']);


    

    Route::get('/status', [StatusController::class, 'index']);
    Route::get('/status/create', [StatusController::class, 'create']);
    Route::post('/status', [StatusController::class, 'store']);
    Route::get('/status/lead/show/{lead}', [StatusController::class, 'show']);
    Route::put('/status/lead/{lead}', [StatusController::class, 'update']);
    Route::delete('/status/lead/destroy/{lead}', [StatusController::class, 'destroy']);


    Route::get('/state', [StateController::class, 'index']);
    Route::get('/state/create', [StateController::class, 'create']);
    Route::post('/state', [StateController::class, 'store']);
    Route::get('/state/lead/show/{lead}', [StateController::class, 'show']);
    Route::put('/state/lead/{lead}', [StateController::class, 'update']);
    Route::delete('/state/lead/destroy/{lead}', [StateController::class, 'destroy']);



    Route::get('/property/tracker', [PropertyTrackerController::class, 'index'])->name('tracker.index')->middleware(['can:view-tracker']);
    Route::get('/property/tracker/create', [PropertyTrackerController::class, 'create']);
    Route::post('/property/tracker/sort', [PropertyTrackerController::class, 'sort']);
    Route::post('/property/tracker', [PropertyTrackerController::class, 'store'])->middleware(['can:create-tracker']);
    Route::get('/property/tracker/show/{propertyTracker}', [PropertyTrackerController::class, 'show'])->name('chester.show')->middleware(['can:view-tracker']);;
    Route::put('/property/tracker/{propertyTracker}', [PropertyTrackerController::class, 'update'])->name('tracker.update')->middleware(['can:update-tracker']);;
    Route::delete('/property/tracker/destroy/{propertyTracker}', [PropertyTrackerController::class, 'destroy'])->middleware(['can:delete-tracker']);;








    Route::get('/property/tracker/notes', [PropertyTrackerNotesController::class, 'index']);
    Route::get('/property/tracker/notes/create', [PropertyTrackerNotesController::class, 'create']);
    Route::post('/property/tracker/notes', [PropertyTrackerNotesController::class, 'store'])->name('tracker.notes');
    Route::get('/property/tracker/notes/show/{propertyTrackerNotes}', [PropertyTrackerNotesController::class, 'show'])->name('trakernotes.show');
    Route::put('/property/tracker/notes/{propertyTrackerNotes}', [PropertyTrackerNotesController::class, 'update']);
    Route::delete('/property/tracker/notes/destroy/{propertyTrackerNotes}', [PropertyTrackerNotesController::class, 'destroy']);


    Route::get('/appointments', [AppointmentController::class, 'index']);
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointment.create');
    Route::get('/appointments/show/{appointment}', [AppointmentController::class, 'show'])->name('trakernotes.show');
    Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/appointments/destroy/{appointment}', [AppointmentController::class, 'destroy']);


    Route::get('/appointment/notes', [AppointmentNoteController::class, 'index']);
    Route::post('/appointment/notes', [AppointmentNoteController::class, 'store'])->name('appointmentnotes.create');
    Route::get('/appointment/notes/show/{appointment_note}', [AppointmentNoteController::class, 'show'])->name('trakernotes.show');
    Route::put('/appointment/notes/{appointment_note}', [AppointmentNoteController::class, 'update']);
    Route::delete('/appointment/notes/destroy/{appointment_note}', [AppointmentNoteController::class, 'destroy']);

    Route::get('/timelines', [TimelineController::class, 'index']);
    Route::post('/timelines', [TimelineController::class, 'store'])->name('timeline.create');
    Route::get('/timelines/show/{timeline}', [TimelineController::class, 'show'])->name('timeline.show');
    Route::put('/timelines/{timeline}', [TimelineController::class, 'update']);
    Route::delete('/timelines/destroy/{timeline}', [TimelineController::class, 'destroy']);



});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/oncehub', [OnceHubController::class, 'index'])->name('oncehub');

Route::post('file',[FileUploadController::class, 'store'])->name('upload.file');
Route::get('download_local',[FileUploadController::class, 'download_local']);
Route::get('show_images',[ProductImageController::class, 'showImage']);
Route::get('show_company_images',[GeneralSettingsController::class, 'showCompanyImage']);






