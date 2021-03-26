<?php

namespace App\Models;

use App\Models\Felt;
use App\Models\Objekt;
use App\Models\Profile;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bruker extends Model
{
    use HasFactory;
    use LogsActivity;

    // protected $filllabel = [

    //   'navn',
    //   'hylle',
    //   'rom',
    //   'innsatt_nummer',
    //   'betjent_navn'

    // ];

    protected $guarded = [];

    public function felt () {

        return $this->hasMany(Felt::class);
    }

    public function profile () {

      return $this->hasMany(Profile::class);
    }

    public function kategori () {

      return $this->hasMany(Kategori::class);
    }

    public function felts () { //country

      return $this->hasManyThrough(Felt::class, kategori::class);
  }


}
