<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/TrainingSession.php
class TrainingSession extends Model
{
    protected $fillable = ['team_id', 'session_time', 'agenda'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
