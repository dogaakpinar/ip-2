<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class SporcularController extends Controller
{ public function index()
{
    $players = Player::Where('team_id', [2,3,4])->orderBy('id', 'asc')->get();
    $teams = Team::WHERE ('sport_id', 2)->orderBy('id', 'asc')->get();
    return view('players', compact('players', 'teams'));
}
}
