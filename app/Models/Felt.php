<?php

namespace App\Models;

use App\Models\Bruker;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Felt extends Model
{
    use HasFactory;
    use LogsActivity;

    
    protected $table = 'felts';
    
    //public $timestamp = false;

    protected $fillable = [

        'bruker_id',
        'title',
        'antall_rom',
        'antall_lager',
        'info',
        'kategori_id',
        'image'
    ];

    protected static $logAttributes = ['title', 'antall_rom', 'antall_lager', 'info', 'preferences->notifications->status', 'preferences->hero_url'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Endring i {$eventName}";
    }

    
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
