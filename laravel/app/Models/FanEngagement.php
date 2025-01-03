<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/FanEngagement.php
class FanEngagement extends Model
{
    protected $fillable = ['user_id', 'team_id', 'engagement_score'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}

