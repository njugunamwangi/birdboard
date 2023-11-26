<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        $project = Project::all();

        return view('projects.index', compact('project'));
    }

    public function store() {
        // persist
        Project::create(request(['title', 'description']));

        // redirect
        return redirect('/projects');
    }
}
