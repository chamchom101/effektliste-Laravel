<?php

namespace App\Models;

use App\Models\Bruker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    public function bruker () {

        return $this->belongsTo(Bruker::class);
    }
}
