<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('home', compact('projects'));
    }

    public function showPublicProject(Project $project)
    {
        return view('public_show', compact('project'));
    }
}

