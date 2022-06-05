<?php



use App\Models\SingleRowData;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;







Route::get('services', 'HomePageController@services');

Route::get('about', 'HomePageController@about');

Route::get('rates', 'HomePageController@rates');

Route::get('contact', 'HomePageController@contact');

Route::get('/', function () {

   // try {

     //   DB::connection()->getPdo();

      //  $logo = SingleRowData::where('field_name','logo_file')->first();

      //  if($logo != null){

         //   $logo = $logo->field_value;

       // }else{

      //      $logo = null;

      //  }

  //  } catch (\Exception $e) {

      //  $logo = null;

//    }




return view('auth.login');

});







Route::get('lang/{locale}', function($locale){

    if (! in_array($locale, ['en', 'hi'])) {

        abort(400);

    }

    App::setLocale($locale);

    session()->put('applocale', $locale);

    return redirect()->back();

});



Auth::routes([

    'register'=>false

]);



Route::resource("task/manager","TaskManagerController")->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home');

