<?php

namespace App\Models;

use App\Models\Felt;
use App\Models\Bruker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fremstilling extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rom', 'lager', 'info', 'felt_id', 'bruker_id'];

    public function bruker () {

        return $this->belongsTo(Bruker::class);
    }

    public function fremstilling() {

        return $this->belongsTo(Felt::class);
    }

    public function felt() {

        return $this->belongsTo(Felt::class);
    }
}
