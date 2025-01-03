<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller


{
    public function show($id)
    {

        $news = News::findOrFail($id);


        return view('show', compact('news'));
    }
    public function index()
    {
        $news = News::all();
        return view('news', compact('news'));
    }






}
