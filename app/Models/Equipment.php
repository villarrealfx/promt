<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permit;
use App\Models\Facility;
use App\Models\Event;
use App\Models\Department;
use App\Models\EquipmentClass;
use App\Models\VoltageLevel;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';

    protected $fillable = [
        'facility_id',
        'department_id',
        'code',
        'description',
        'operations_warning',
        'maintenance_warning',
        'brand',
        'serial',
        'comments',
        'type',
        'belongs_to',
        'local_procedure',
        'in_service_date',
        'lenght',
        'vain_average',
        'towers',
        'parent_id',
        'class_id',
        'voltage_level_id',
    ];

    public function permits()
    {
        $this->hasMany(Permit::class);
    }

    public function facility()
    {
        $this->belongsTo(Facility::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function equipment()
    {
        return $this->belongsToMany(Department::class, 'department_equipment');
    }

    public function equipmentClass()
    {
        return $this->belongsTo(EquipmentClass::class);
    }

    public function voltageLevel()
    {
        return $this->belongsTo(VoltageLevel::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('code', 'LIKE', "%$keyword%")
                     ->orwhere('description', 'LIKE', "%$keyword%");
    }

    public function parent()
    {
        return $this->belongsTo(Equipment::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Equipment::class, 'parent_id');
    }
}
