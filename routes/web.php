<?php

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
Route::get('/check', function () {
    return view('index');
});
Route::get('/doctor', function () {
    return view('doctor');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/department', function () {
    return view('department');
});
// Route::get('/buymedicine', function () {
//     return view('buymedicine');
// });
// Route::get('/payment', function () {
//     return view('payment');
// });
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/location', function () {
    return view('location');
});

Route::get('/buymedicine', function () {
    $user= \App\Medicine::all();

    return view('buymedicine',compact('user'));
});

// Route::get('/payment', function () {

//     return view('payment');
// });
Route::get('/mail', function () {

    return view('mail');
});

//Route::post('/buy','BuyController@store');
Route::get('/up/{id}',function ($id)
{
    $user= \App\Medicine::find($id);
//    return $user;
   return view('payment',compact('user'));
});
Route::post('/pay','PaymentController@store');


Route::post('/doc','DoctorController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/contact','UserContactController@store');