<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permit;
use App\Models\EventRecord;
use App\Models\Equipment;
use App\Models\Reason;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'equipment_id',
        'description',
        'consequence',
        'comments',
        'notified',
        'closing_note',
        'restriction',
        'consequences',
        'load',
        'starting_time',
        'resolution_time',
        'reason_id',
    ];

    public function permits()
    {
        return $this->belongsToMany(Permit::class, 'event_permit');
    }

    public function records()
    {
        return $this->hasMany(EventRecord::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function reason()
    {
        return $this->belongsTo(Reason::class);
    }
}
