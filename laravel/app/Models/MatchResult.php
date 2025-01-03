<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/MatchResult.php
class MatchResult extends Model
{
    protected $fillable = ['match_id', 'home_team_score', 'away_team_score'];

    public function match()
    {
        return $this->belongsTo(Match::class);
    }
}

