<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permit;
use App\Models\User;

class PermitRecord extends Model
{
    use HasFactory;

    protected $table = 'permit_records';

    protected $fillable = [
        'permit_id',
        'user_id',
        'action',
        'field',
        'before',
        'after'
    ];

    public function permit()
    {
        return $this->belongsTo(Permit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
