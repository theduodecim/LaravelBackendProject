<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));

    }

    public function create()
    {

        return view('projects.create');

    }

    public function store(request $project)
    {

        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/project');

    }

//route module binding

    public function edit($id) //now track the $id // this will responce to example.com/projects/1/edit

    {
        $project = Project::find($id); //pass to the project
        return view('projects.edit', compact('project')); // and show this project id to the view
    }

    public function show() // this will responce to example.com/projects/1/edit

    {

    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }

}
