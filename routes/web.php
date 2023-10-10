<?php

use App\Http\Controllers\category;
use App\Http\Controllers\tourscontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\servicescontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('category',category::class);



Route::resource('tours',tourscontroller::class);


Route::get('/adminhome',function(){
    return view('dashmin/index');

});
Route::get('/adminservices',function(){
    return view('dashmin/adminservices');
});
Route::get('/addcategory',function(){
    return view('dashmin/addcategory');
});
Route::get('/adminwidget',function(){
    return view('dashmin/widget');
});
Route::get('/admintable',function(){
    return view('dashmin/table');
});
Route::get('/chart',function(){
    return view('dashmin/chart');
});


Route::get('services/create', [ServicesController::class, 'create']);
Route::post('services/insert', [ServicesController::class, 'insert'])->name('services.insert'); 