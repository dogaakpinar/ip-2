<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/MatchDetail.php
class MatchDetail extends Model
{
    protected $fillable = ['match_id', 'home_team_score', 'away_team_score'];

    public function match()
    {
        return $this->belongsTo(MatchModel::class);
    }
}

