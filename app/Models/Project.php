<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mainmenu_id',
        'submenu_id',
        'heading',
        'description',
        'jobtype',
        'amount',
        'startdate',
        'enddate',
        'status',
        'view',
        'reviewby',
        'review_time',
        'actionby',
        'action_time',
        'skill_name',
        'proposal',
        'pintocategory',
        'pintohome',
        'pindatecategory',
        'pindatehome',
    ];

    public function mainmenu()
    {
        return $this->belongsTo(Mainmenu::class);
    }

    public function submenu()
    {
        return $this->belongsTo(Submenu::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}
