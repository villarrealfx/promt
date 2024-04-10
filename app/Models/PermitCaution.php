<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permit;
use App\Models\Caution;

class PermitCaution extends Model
{
    use HasFactory;

    protected $table = 'permit_cautions';

    protected $fillable = [
        'permit_id',
        'caution_id',
        'checked',
    ];

    public function permit()
    {
        return $this->belongsTo(Permit::class);
    }

    public function caution()
    {
        return $this->belongsTo(Caution::class);
    }
}
