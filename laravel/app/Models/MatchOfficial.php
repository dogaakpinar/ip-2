<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/MatchOfficial.php
class MatchOfficial extends Model
{
    protected $fillable = ['match_id', 'user_id', 'role'];

    public function match()
    {
        return $this->belongsTo(Match::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

