<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;
use App\Models\User;
use App\Models\Permit;
use App\Models\Department;

class Anomaly extends Model
{
    use HasFactory;

    protected $table = 'anomalies';

    protected $fillable = [
        'equipment_id',
        'description',
        'comments',
        'reported_by',
        'opened_by',
        'notified',
        'resolved_by',
        'closed_by',
        'reported_on',
        'resolved_on',
        'department_id',
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reported_by');
    }

    public function opener()
    {
        return $this->belongsTo(User::class, 'opened_by');
    }

    public function resolver()
    {
        return $this->belongsTo(User::class, 'resolved_by');
    }

    public function closer()
    {
        return $this->belongsTo(User::class, 'closed_by');
    }

    public function permits()
    {
        return $this->belongsToMany(Permit::class, 'anomaly_permit');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
