<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/PlayerStatistic.php
class PlayerStatistic extends Model
{
    protected $fillable = ['player_id', 'match_id', 'goals', 'assists', 'yellow_cards', 'red_cards'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function match()
    {
        return $this->belongsTo(Match::class);
    }
}

