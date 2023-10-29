<?php

use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\paymentcontroller;
use App\Models\services;
use App\Http\Controllers\category;
use App\Http\Controllers\tourscontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\servicescontroller;
use App\Http\Controllers\singleController;
use App\Http\Controllers\UsersController;


/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});














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
Route::get('adduser',[UsersController::class, 'adduser'])->name('users');
Route::get('deleteuser/{id}',[UsersController::class, 'deleteuser'])->name('users');



Route::get('/adminwidget',function(){
    return view('dashmin/widget');
});
Route::get('/admintable',function(){
    return view('dashmin/table');
});
Route::get('/chart',function(){
    return view('dashmin/chart');
});

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/AgriculturalTourism', function () {
    return view('/pages/AgriculturalTourism');
});

// Route::get('/booking/{id} ', function () {
//     return view('pages.booking ');
// })->name('booking');


Route::get('/booking/{id}',[UsersController::class, 'showBookingPage'])->name('booking');
Route::post('/adduser',[UsersController::class, 'store'])->name('adduser');
Route::get('/create',[UsersController::class, 'create'])->name('creatuser');
Route::get('/users',[UsersController::class, 'userlist'])->name('users.index');
Route::get('/users/{id}',[UsersController::class, 'delete'])->name('delete');
Route::get('/thanks',[bookingcontroller::class, 'payment'])->name('thanks');

Route::get('/contact ', function () {
    return view('pages.contact ');
});

Route::get('/contacts ', function () {
    return view('pages.contacts ');
});

Route::get('/package ', function () {
    return view('pages.package ');
});
Route::post('/payment/{id} ', [bookingcontroller::class,'create'])->name('payment');
Route::get('/payment', [bookingcontroller::class,'index'])->name('payment1');


Route::get('/payment_options ', function () {
    return view('pages.payment_options ');
});

Route::get('/product-cart ', function () {
    return view('pages.product-cart  ');
});

Route::get('/product-details ', function () {
    return view('pages.product-details');
});

Route::get('/products ', function () {
    return view('pages.products');
});

Route::get('/profile ', function () {
    return view('pages.profile');
});
Route::get('/registration ', function () {
    return view('pages.registration');
});

Route::get('/reset ', function () {
    return view('pages.reset');
});


Route::get('/service', function () {
    $services = services::all();
    return view('pages.service', compact('services'));
});


Route::get('/single_page ', function () {
    return view('pages.single_page');
});

Route::get('/team ', function () {
    return view('pages.team');
});

Route::get('/trips ', function () {
    return view('pages.trips');
});

// Route::get('/welcome1 ', function () {
//     return view('pages.welcome1')->name('welcome1');
// });
Route::get('/welcome1',[paymentcontroller::class,'index'])->name('welcome1');






Route::get('pages/', [ServicesController::class, 'Agricultural Tourism.']);



Route::get('services/create', [ServicesController::class, 'create']);
Route::get('services', [ServicesController::class, 'index'])->name('services');

Route::post('services/insert', [ServicesController::class, 'insert'])->name('services.insert');
Route::get('services/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit'); 
Route::post('services/update/{id}', [ServicesController::class, 'update'])->name('services.update');
Route::get('services/delete/{id}', [ServicesController::class, 'delete'])->name('services.delete'); 

Route::get('single_page/{id}', [singleController::class, 'index'])->name('single_page'); 

Route::get('/booking-form', [UsersController::class, 'showBookingForm']);







require __DIR__.'/auth.php';
