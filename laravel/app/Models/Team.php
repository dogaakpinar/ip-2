<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Team.php
class Team extends Model
{
    protected $fillable = ['name', 'sport_id', 'coach_id'];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id');
    }
}
