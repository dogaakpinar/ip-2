<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class FinancialsController extends Controller
{
    public function index() {

        return view('Financial-Status');

    }
}
