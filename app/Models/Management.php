<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\User;

class Management extends Model
{
    use HasFactory;

    protected $table = 'management';

    protected $fillable = [
        'parent_id',
        'name',
    ];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'management_user');
    }

    public function parent()
    {
        return $this->belongsTo(Management::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Management::class, 'parent_id');
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('name', 'LIKE', "%$keyword%");
    }
}
