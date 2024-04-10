<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;

class EquipmentClass extends Model
{
    use HasFactory;

    protected $table = 'equipment_classes';

    protected $fillable = [
        'name',
        'has_brand',
        'has_serial',
        'has_lenght',
        'has_towers',
        'has_vain',
    ];

    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('name', 'LIKE', "%$keyword%");
    }
}
