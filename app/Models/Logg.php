<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logg extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'txt',
        'new',
        'old',
        'bruker_id'

    ];
}
