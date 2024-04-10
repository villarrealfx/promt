<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Facility;

class FacilityType extends Model
{
    use HasFactory;

    protected $table = 'facility_types';

    protected $fillable = [
        'name',
    ];

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('name', 'LIKE', "%$keyword%");
    }
}
