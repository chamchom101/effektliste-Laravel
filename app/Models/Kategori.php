<?php

namespace App\Models;

use App\Models\Felt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [

        'titel',
        'betjent'


    ];

    public function felt () {

        return $this->hasMany(Felt::class);
    }

    public function bruker () {

        return $this->belongsTo(Bruker::class);
    }


    public function kategori () {

        return $this->belongsTo(Felt::class);
    }

    public function felts () { //User

        return $this->hasMany(Felt::class);
    }


}
