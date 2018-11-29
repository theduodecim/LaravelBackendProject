<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        //  $projects = Project::where('owner_id', auth()->id())->take(1)->get(); // select * from projects where owner_id = 4
        // $projects = Project::all();

        //  $projects = Project::where('owner_id', auth()->id())->get();

        //dont Forget readability another approach to say " i want the user project "
        //  $projects = auth()->user()->projects;
        //   return view('projects.index', compact('projects'));

        return view('projects.index', [
            'projects' => auth()->user()->projects,
        ]);

    }

    public function create()
    {

        return view('projects.create');

    }

    public function store()
    {
        $validation = $this->validateProject();
        $validation['owner_id'] = auth()->id();
        //Project::create(['title' => request('title'), 'description' => request('description')]);
        $project = Project::create($validation);

// In the real scenario
        /*
        \Mail::to($project->owner->email)->send(
        new ProjectCreated($project)
        );
         */
        return redirect('/project');

    }

//route module binding

    public function edit(Project $project) //now track the $id // this will responce to example.com/projects/1/edit

    {
        abort_if(\Gate::allows('view', $project), 403);

        return view('projects.edit', compact('project')); // and show this project id to the view
    }
/*
public function show(Project $project) // this will responce to example.com/projects/1/edit

{
return view('projects.show', compact('project'));

}
 */

//FileSystem
    // Filesystemattributes  dd($file*->get()); dd($file*->put()); dd($file*->read()); dd($file*->delete());
    //
    public function show(Project $project)
    {

        abort_if(\Gate::allows('view', $project), 403);

/*
if(\Gate::allows('view', $project))
{
abort(403);
}
 */
        // abort_if($project->owner_id !== auth()->id(), 403);
        // abort_unless($project->owner_id !== auth()->id(), 403);
        //  $this->authorize('view', $project);

        // abort_if(auth()->user()->owns($project), 403);
        //
        /*
        if($project->owner_id !== auth()->id()){
        abort(403);
        }
         */
        // $fileSystem = app('Illuminate\Filesystem\Filesystem');

        return view('projects.show', compact('project'));

    }

/*
public function show($id) // this will responce to example.com/projects/1/edit
{

$project = Project::findorfail($id);
return view('projects.show', compact('project'));

}
 */

    public function update(Project $project)
    {

        $project->update($this->validateProject());

        abort_if(\Gate::allows('view', $project), 403);

        return redirect('/project');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        abort_if(\Gate::allows('view', $project), 403);
        return redirect('/project');
    }

    public function validateProject()
    {

        return request()->validate([
            'title' => ['required', 'min:6'],
            'description' => ['required', 'min:6'],
        ]);

    }

}
