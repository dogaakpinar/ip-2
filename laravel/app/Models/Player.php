<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Player.php
class Player extends Model
{
    protected $fillable = ['user_id', 'team_id', 'position', 'date_of_birth'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}

