<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchOfficialsController extends Controller
{
    public function index(){
        return view('matchofficials');
    }
}
