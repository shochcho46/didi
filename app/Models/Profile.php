<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'email_verified_at',
        'birthday',
        'gender',
        'address',
        'title',
        'skill_name',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
