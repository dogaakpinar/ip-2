<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class LeagueController extends Controller
{

    public function index()
    {
        $teams = Team::WHERE ('sport_id', 2)->orderBy('id', 'asc')->get();
        return view('lig', compact('teams'));
    }
    }


