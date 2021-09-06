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
            'projects' => Art::paginate(4)
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
