<?php

namespace App\Models;

use App\Models\Felt;
use App\Models\Bruker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Objekt extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'max_rom',
        'betjent'
    ];


    public function felt () {

        return $this->hasMany(Felt::class, bruker::class);
    }

    public function bruker () {

        return $this->belongsTo(Bruker::class);
    }

    

    //public function felt () {

        //return $this->hasMany(Felt::class);
    //}
}
