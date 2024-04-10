<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\User;
use App\Models\Role;
use App\Models\Permit;

class Petitioner extends Model
{
    use HasFactory;

    protected $table = 'petitioners';

    protected $fillable = [
        'department_id',
        'user_id',
        'role_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function permits()
    {
        return $this->hasMany(Permit::class);
    }
}
