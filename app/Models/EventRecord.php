<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\User;

class EventRecord extends Model
{
    use HasFactory;

    protected $table = 'event_records';

    protected $fillable = [
        'event_id',
        'user_id',
        'action',
        'field',
        'before',
        'after'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
