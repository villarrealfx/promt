<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;
use App\Models\FacilityType;
use App\Models\Department;

class Facility extends Model
{
    use HasFactory;

    protected $table = 'facilities';

    protected $fillable = [
        'type_id',
        'name',
        'comments',
        'contact_phone',
    ];

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }

    public function type()
    {
        return $this->belongsTo(FacilityType::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('name', 'LIKE', "%$keyword%");
    }

    public function departments()
    {
        return $this->hasManyThrough(Department::class, Equipment::class);
    }
}
