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
        //validate
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // persist
        Project::create(request(['title', 'description']));

        // redirect
        return redirect('/projects');
    }
}
