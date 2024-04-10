<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Supervisor;

class Dispatch extends Model
{
    use HasFactory;

    protected $table = 'dispatches';

    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function departments()
    {
        return $this->belongsToMany(Department::class. 'department_dispatch');
    }

    public function supervisors()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function parent()
    {
        return $this->belongsTo(Dispatch::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Dispatch::class, 'parent_id');
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('name', 'LIKE', "%$keyword%");
    }
}
