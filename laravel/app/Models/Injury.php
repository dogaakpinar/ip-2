<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Injury.php
class Injury extends Model
{
    protected $fillable = ['player_id', 'injury_type', 'injury_date', 'recovery_date'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

