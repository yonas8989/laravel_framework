<?php

use App\Http\Controllers\JobControllers;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Job;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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

Route::get('/', function () {

    return view('home');
}); 
// register 
Route::get("/register", [UserController::class , 'create']);
Route::post("/register", [UserController::class , 'store']);
// login form 
Route::get('/login', [SessionController::class ,'create']);
Route::post('/login', [SessionController::class ,'store']);

// contact
Route::get("/contact ", function () {
    return view("contact");
});
Route::resource("jobs", JobControllers::class);


// route for Vehicle
// Route::resource('vehicle' , [VehicleController::class]);