<?php

namespace App\Models;

use App\Models\Bruker;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Felt extends Model
{
    use HasFactory;

    protected $fillable = [

        'bruker_id',
        'title',
        'antall_rom',
        'antall_lager'
    ];

    public function bruker () {

        return $this->belongsTo(Bruker::class);
    }

    public function kategori () {

        return $this->belongsTo(Kategori::class);
    }
}
