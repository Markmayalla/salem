<?php

namespace App\Http\Controllers;

use App\Project; 

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('resources.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('resources.projects.create');
    }

    public function store()
    {
        Project::create(request(['title','description']));
        return redirect('/projects');
    }

    public function show(Project $project)
    {
       return view('resources.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('resources.projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title','description']));
       return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
