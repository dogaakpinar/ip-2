<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class TransfersController extends Controller
{
    public function index(){
        $transfers = Transfer::all();
        return view('transfers', compact('transfers'));
    }
}
