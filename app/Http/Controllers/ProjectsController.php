<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store() {
        // persist
        Project::create(request(['title', 'description']));

        // redirect
        return redirect('/projects');
    }
}
