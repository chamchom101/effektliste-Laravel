<?php

namespace App\Models;

use App\Models\Bruker;
use App\Models\Objekt;
use App\Models\Kategori;
use App\Models\Fremstilling;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Felt extends Model
{
    use HasFactory;
    use LogsActivity;
    use CausesActivity;

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->causer_id = Felt::all()->last()->bruker_id;
        $activity->description = "{$eventName}";
    }

    
    protected $table = 'felts';
    
    //public $timestamp = false;

    protected $fillable = [

        'bruker_id',
        'title',
        'antall_rom',
        'antall_lager',
        'info',
        'kategori_id',
        'image',
        'causer_id',
        'tillatt',
        'max_rom'
        
        
    ];

    protected static $logAttributes = ['title', 'antall_rom', 'antall_lager', 'info'];

    // public function getDescriptionForEvent(string $eventName): string
    // {
    //     return "Endring i {$eventName}";
    // }



    
    protected $casts = [
        'preferences' => 'collection' // casting the JSON database column
    ];

    protected static $logOnlyDirty = true;





    public function bruker () {

        return $this->belongsTo(Bruker::class);
    }

    public function kategori () {

        return $this->belongsTo(Kategori::class);
    }

    public function felt () {

        return $this->hasMany(kategori::class);
    }

    public function feltObjekt () {

        return $this->belongsTo(Objekt::class);
    }

    public function fremstilling () {

        return $this->hasMany(Fremstilling::class);
    }

    public function objekt () {

        return $this->hasMany(Objekt::class);
    }


  
}
