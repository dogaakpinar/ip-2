<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Transfer.php
class Transfer extends Model
{
    protected $fillable = ['player_id', 'from_team_id', 'to_team_id', 'transfer_fee', 'transfer_date'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function fromTeam()
    {
        return $this->belongsTo(Team::class, 'from_team_id');
    }

    public function toTeam()
    {
        return $this->belongsTo(Team::class, 'to_team_id');
    }
}

