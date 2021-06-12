<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'status',
        'type',
        'lastday',
        'subscrib_id',
        'point_id',
        'piclocation',
        'country',
        'reviewby',
        'review_time',
        'actionby',
        'action_time',
        'view',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}
