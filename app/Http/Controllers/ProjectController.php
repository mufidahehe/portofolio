<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|url',
        ]);

        $imagePath = $request->file('image')->store('projects', 'public');
        
        Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'url' => $validated['url'],
        ]);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|url',
        ]);

        $data = [
            'title' => $validated['title'],
            'description' => $validated['description'],
            'url' => $validated['url'],
        ];

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::disk('public')->delete($project->image);
            
            // Upload gambar baru
            $imagePath = $request->file('image')->store('projects', 'public');
            $data['image'] = $imagePath;
        }

        $project->update($data);

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        // Hapus gambar
        Storage::disk('public')->delete($project->image);
        
        // Hapus project
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully');
    }
}
