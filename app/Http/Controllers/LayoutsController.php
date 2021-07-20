<?php

namespace App\Http\Controllers;
use App\Models\Art;
use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    //
    public  function index()
    {
        
        return view('welcome')->with([
            'projects' => Art::inRandomOrder()->take(6)->get()
        ]);
    }
}
