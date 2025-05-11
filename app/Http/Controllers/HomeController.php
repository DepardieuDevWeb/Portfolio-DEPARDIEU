<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Project::with('technologies')->get());
        return view('index', [
            'projects' => Project::with('technologies')->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function project(Project $project)
    {
        return view('view_project', ['project' => $project]);
    }

    public function contact()
    {
        
    }
}
