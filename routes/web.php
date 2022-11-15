<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});



//من حمايه الصفحة الا من المستخدم لا يمكن الوصل الى الصفحة لا بعد تسجيل الدخول او انشاء حساب
// والعكس لا يمكن الدخول الى صفحة تيسجل او انشاء الحساب لا بعد عمل تسجيل خروج
// Route::get('dashboard',function(){
//     return 'login in sccess';
// })->middleware('checkAuth');




Route::group(['middleware'=>'loginAuth'],function(){
    //في حاله تم تسجيل الدخول
    Route::get('login',[LoginController::class,'index']);
    Route::post('/login',[LoginController::class,'login'])->name('loginUser');
    
    Route::get('register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'create'])->name('createUser');

// Route::get('lyoutusers',[LoginController::class,'lyout']);

});




Route::group(['middleware'=>'checkAuth'],function(){
    
//من حمايه الصفحة الا من المستخدم لا يمكن الوصل الى الصفحة لا بعد تسجيل الدخول او انشاء حساب
// والعكس لا يمكن الدخول الى صفحة تيسجل او انشاء الحساب لا بعد عمل تسجيل خروج
// Route::get('dashboard',function(){
//     return 'login in sccess';});
    Route::get('home',function(){
        return view('home');
    });

    //
});

//تسجل الخروج
Route::group(['middleware'=>'loyoutAuth'],function(){
    Route::get('lyoutusers',[LoginController::class,'lyout']);
});

//



