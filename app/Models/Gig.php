<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use Notifiable,HasFactory;


    protected $fillable = [
        'user_id',
        'heading',
        'description',
        'piclocation',
        'amount',
        'status',
        'serial',
        'reviewby',
        'review_time',
        'actionby',
        'action_time',
        'view',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
