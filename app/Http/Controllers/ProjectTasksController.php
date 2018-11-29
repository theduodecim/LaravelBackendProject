<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{

    public function update(Task $task)
    {
        /*
            this approach is base on the completed value and his request sended by bladeTemplate
        $task->update([

            'completed' => request()->has('completed'),

        ]);
        */

    //now we are calling this method within the model and passing to the paramters the request
    
    //    $task->complete(request()->has('completed'));
        //to call to the database when it's incompleted
      //  complete(request()->has('completed'));
        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();


        return back(); // this return to the last page after submit
    }

    public function store(Project $project) // this is an instance of project this id is

    {

/*
Validation
 */
$validationBody = request()->validate(['body' => 'required']); // required|min:255 good practice

/*
Approach 1
public function store(Project $project)  passing the id
Task::create([
'project_id' => $project->id,
'body' => request('description')
]);
 */
/* Approach 2 */

//passing the addTask method
        /*
        $project->addTask(request('body'));

        return back();

        }
         */
        $project->addTask($validationBody);

        return back();

    }


   

}
