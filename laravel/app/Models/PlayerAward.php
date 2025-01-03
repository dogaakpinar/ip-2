<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/PlayerAward.php
class PlayerAward extends Model
{
    protected $fillable = ['player_id', 'award_name', 'award_date'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

