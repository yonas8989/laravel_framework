<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    return view("jobs", [
        "jobs" => [
            [
                "id" => "1",
                "title" => "director",
                "salery" => "$2000"
            ],
            [
                "id" => "2",
                "title" => "programmer",
                "salery" => "$10000"
            ],
            [
                "id" => "3",
                "title" => "teacher",
                "salery" => "$4000"
            ]
        ]
    ]);
});

Route::get("/jobs/{id} ", function (
    $id
) {
    $jobs = [
        [
            "id" => "1",
            "title" => "director",
            "salery" => "$2000"
        ],
        [
            "id" => "2",
            "title" => "programmer",
            "salery" => "$10000"
        ],
        [
            "id" => "3",
            "title" => "teacher",
            "salery" => "$4000"
        ]
    ];

   $job =  Arr::first($jobs, function($jobs) use($id)  {
        return $jobs['id'] === $id;
    });
    return view("job", ['job' => $job]);
});



Route::get("/contact ", function () {
    return view("contact");
});
