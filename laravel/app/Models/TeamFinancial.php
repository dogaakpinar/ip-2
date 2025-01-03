<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/TeamFinancial.php
class TeamFinancial extends Model
{
    protected $fillable = ['team_id', 'revenue', 'expenses', 'profit'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}

