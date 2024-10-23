<?php

use App\Http\Controllers\JobControllers;
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
}); // contact
Route::get("/contact ", function () {
    return view("contact");
});
Route::resource("jobs", JobControllers::class);
