<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function index(){
        $sponsors = Sponsor::all();
        return view('sponsors', compact('sponsors'));
    }
}
