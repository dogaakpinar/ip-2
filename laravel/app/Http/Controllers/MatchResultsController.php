<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchResultsController extends Controller
{
    public function index()
    {
        return view('matchresults');
    }
}
