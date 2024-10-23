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

// index

Route::get("/jobs", function () {

    return view("jobs/index", ['jobs' => Job::with('employer')->latest()->paginate(10)]);
});


// create jobs
Route::get("/jobs/create", function () {
    return view("jobs/create");
});
// store in the database
Route::post("/jobs", function () {
    // here is validation
    request()->validate([
        "title" => ['required', 'min:3'],
        "salary" => ['required']
    ]);
    Job::create(
        [
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]
    );
    return redirect('/jobs');
});


// show jobs
Route::get("/jobs/{id} ", function (
    $id
) {


    $job = Job::find($id);
    return view("jobs.show", ['job' => $job]);
});
// edit job
Route::get("/jobs/{id}/edit ", function ($id) {
    $job = Job::find($id);
    return view("jobs.edit", ["job" => $job]);
});
// update job
Route::patch("/jobs/{id} ", function (
    $id
) {
    // validate
    request() ->validate([
        "title" => ['required', 'min:3'],
        "salary" => ['required']
    ]);
    // authrize the requst
    // update
    $job =Job::findOrFail($id);
    // $job->title =request('title');
    // $job->salary =request('salary');


    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),

    ]);

    // redirect
    return redirect('/jobs/'.$job->id);
});
//delete job
Route::delete("/jobs/{id} ", function (
    $id
) {

    // find the job 
    $job = Job::findOrFail($id);
    $job->delete();
    // redirect 
    return redirect ('/jobs');
});

// contact
Route::get("/contact ", function () {
    return view("contact");
});
