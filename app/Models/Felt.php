<?php

namespace App\Models;

use App\Models\Bruker;
use App\Models\Kategori;
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
        'causer_id'
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

  
}
