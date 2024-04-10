<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use App\Models\PermitRecord;
use App\Models\Petitioner;
use App\Models\Management;
use App\Models\Supervisor;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_type',
        'identification_card',
        'staff_number',
        'name',
        'last_name',
        'username',
        'email',
        'office_phone',
        'cell_phone',
        'room_phone',
        'password',
        'comments',
        'active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function permitRecords()
    {
        return $this->hasMany(PermitRecord::class);
    }

    public function eventRecords()
    {
        return $this->hasMany(EventRecord::class);
    }

    public function petitioners()
    {
        return $this->hasMany(Petitioner::class);
    }

    public function management()
    {
        return $this->belongsToMany(Management::class, 'management_user');
    }

    public function supervisors()
    {
        return $this->hasMany(Supervisor::class);
    }

    public function scopeSearch($query, $keyword)
    {
        return $query->where('id', 'LIKE', "%$keyword%")
                     ->orwhere('identification_card', 'LIKE', "%$keyword%")
                     ->orwhere('staff_number', 'LIKE', "%$keyword%")
                     ->orwhere('name', 'LIKE', "%$keyword%")
                     ->orwhere('last_name', 'LIKE', "%$keyword%")
                     /*->orwhere('active', 'LIKE', "%$keyword%")*/;
    }
}
