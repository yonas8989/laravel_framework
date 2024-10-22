<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $primaryKey = 'flight_id';
    protected $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;

}
