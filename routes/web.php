<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

/* Route::get('/', function () {
    return view('about');
}); */

/* Route::get('/home', function () {
    return view('welcome');
}); */

/* Route::get('/{name}', function ($name) {
    echo $name;
    return view('welcome');
}); */

//to the welcome blade php

// Route::get('/{name}', function ($name) {
//     return view('welcome' ,['fullname'=>$name]);
// });


// redirecting to another page 
/* Route::get('/', function () {
    return  redirect('about');
}); */

Route::get('/', function () {
    return view('welcome');
    // return redirect('product-page'); // this is the url and not the page name 
});

// Route::get('/', function () {
//     return view('welcome');
// });


/* Route::get('path','controller file') */
//controller Route 

Route::get('firstController', [UserController::class,'index']);

Route::view('about-page','about');
Route::view('contact-page','contact');
Route::view('product-page','products');

