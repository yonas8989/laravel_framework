<?php

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

Route::get("/jobs", function () {

    return view("jobs/index", ['jobs' => Job::with('employer')->latest  ()->paginate(10)]);
});



Route::get("/jobs/create", function () {
    return view("jobs/create");
});
Route::post("/jobs", function () {
    Job::create(
        [
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]
    );
    return redirect('/jobs');
});



Route::get("/jobs/{id} ", function (
    $id
) {


    $job = Job::find($id);
    return view("jobs.show", ['job' => $job]);
});



Route::get("/contact ", function () {
    return view("contact");
});
