<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public function Company(){
        return $this ->belongsTo(Company::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
