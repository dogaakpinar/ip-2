<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/League.php
class League extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'description'];
}
