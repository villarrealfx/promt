<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PermitCaution;

class Caution extends Model
{
    use HasFactory;

    protected $table = 'cautions';

    protected $fillable = [
        'name',
    ];

    public function checked()
    {
        return $this->hasMany(PermitCaution::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('name', 'LIKE', "%$keyword%");
    }
}
