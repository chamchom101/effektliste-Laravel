<?php

namespace App\Models;

use App\Models\Felt;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bruker extends Model
{
    use HasFactory;

    protected $filllabel = [

      'navn',
      'hylle',
      'rom'

    ];

    public function felt () {

        return $this->hasMany(Felt::class);
    }

    public function profile () {

      return $this->hansOne(Profile::class);
    }
}
