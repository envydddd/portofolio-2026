<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('pages.projects', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)
            ->with('sections')
            ->firstOrFail();

        return view('pages.project-detail', compact('project'));
    }
}