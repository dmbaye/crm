<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::latest()
            ->where('owner_id', auth()->id())->get();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        // Validates submitted data
        $this->validate($request, [
            'name' => 'required|string',
            'status' => 'required',
            'description' => 'required|string',
            'tags' => 'sometimes',
        ]);

        $project = new Project();
        $project->owner_id = auth()->id();
        $project->name = $request->name;
        $project->status = $request->status;
        $project->description = $request->description;
        $project->tags = $request->tags;

        if (!$project->save()) {
            return redirect()->back()
                ->with('error', 'Please fill out the form correctly and try again.');
        }

        return redirect()->route('projects.index')
            ->with('success', 'Project saved successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        // Validate submitted data
        $this->validate($request, [
            'name' => 'required|string',
            'status' => 'required',
            'description' => 'required|string',
            'tags' => 'sometimes',
        ]);

        $project = $project;
        $project->name = $request->name;
        $project->status = $request->status;
        $project->description = $request->description;
        $project->tags = $request->tags;

        if (!$project->save()) {
            return redirect()->back()
                ->with('error', 'Please fill out the form correctly and try again.');
        }

        return redirect()->back()
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project = $project;

        if (!$project->delete()) {
            return redirect()->back()
                ->with('error', 'Unable to delete entry. Try again later.');
        }

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
