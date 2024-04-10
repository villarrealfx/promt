<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\PermitRecord;
use App\Models\Equipment;
use App\Models\Anomaly;
use App\Models\PermitCaution;
use App\Models\Department;
use App\Models\Petitioner;

class Permit extends Model
{
    use HasFactory;

    protected $table = 'permits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'requested_for',
        'approved_for',
        'duration',
        'ends_on',
        'emergency_availability',
        'work_to_do',
        'consequence',
        'precautions',
        'starting_note',
        'closing_note',
        'equipment_giving',
        'consequences',
        'emergency',
        'out_of_time',
        'load',
        'reason',
        'status',
        'department_id',
        'parent_id',
        'petitioner_id',
        'equipment_id',

    ];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_permit');
    }

    public function records()
    {
        return $this->hasMany(PermitRecord::class);
    }

    public function equipment()
    {
        $this->belongsTo(Equipment::class);
    }

    public function anomalies()
    {
        return $this->belongsToMany(Anomaly::class, 'anomaly_permit');
    }

    public function precautions()
    {
        return $this->hasMany(PermitCaution::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id','LIKE',"%$keyword%")
            ->orwhere('work_to_do','LIKE',"%$keyword%")
            ;
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function parent()
    {
        return $this->belongsTo(Permit::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Permit::class, 'parent_id');
    }

    public function petitioner()
    {
        return $this->belongsTo(Petitioner::class);
    }
}
