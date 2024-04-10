<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Dispatch;
use App\Models\Role;

class Supervisor extends Model
{
    use HasFactory;

    protected $table = 'supervisors';

    protected $fillable = [
        'user_id',
        'dispatch_id',
        'role_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dispatch()
    {
        return $this->belongsTo(Dispatch::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
