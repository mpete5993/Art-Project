<?php

namespace App\Http\Controllers;
use App\Models\Art;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    //
    public  function index()
    {
        
        return view('art')->with([
            'projects' => Art::inRandomOrder()->take(6)->get()
        ]);
    }

    public function show($slug)
    {
        $project = Art::where('slug', $slug)->firstOrFail();

        return view('single-art')->with([
            'project' => $project
        ]);
    }
}
