<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(){
        return[
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
    }
    public static function find(int $id){
        $job = Arr::first(static ::all(),fn($job) => $job['id'] == $id);
        if(!$job){
            abort(404);
        }
        return($job);
    }

}
