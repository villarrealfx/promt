<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;
use App\Models\Petitioner;
use App\Models\Management;
use App\Models\Dispatch;
use App\Models\Anomaly;
use App\Models\Permit;
use App\Models\Facility;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $fillable = [
        'management_id',
        'name',
    ];

    public function equipment()
    {
        return $this->belongsToMany(Equipment::class, 'department_equipment');
    }

    public function petitioners()
    {
        return $this->belongsToMany(Petitioner::class);
    }

    public function management()
    {
        return $this->belongsTo(Management::class);
    }

    public function dispatch()
    {
        return $this->belongsToMany(Dispatch::class, 'department_dispatch');
    }

    public function anomalies()
    {
        return $this->hasMany(Anomaly::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('name', 'LIKE', "%$keyword%");
    }

    public function permits()
    {
        return $this->hasMany(Permit::class);
    }

    public function facilities()
    {
        return $this->hasManyThrough(Facility::class, Equipment::class);
    }
}
