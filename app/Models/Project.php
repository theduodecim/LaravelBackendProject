<?php

namespace App\Models;
use Illuminate\Mail\Mailable;
use App\Mail\projectCreated;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [ // which fields are mass assingment

        'title', 'description', 'body', 'project_id', 'owner_id'

    ];

/*
    protected static function boot()
    {
        // because this overriting a method that is in the model class
        //make sure that you are calling the parent::method() 
        parent::boot();

        static::created(function ($project)
        {
            //this code is executed only after a new project is created
            \Mail::to($project->owner->email)->send(
                new ProjectCreated($project)
            );


        });
    
    }
*/
// building a new relationship with projects and tasks

    public function tasks()
    {
//relationship available
        // belongsTo, HasMany , hasManyThrough,  morphMany

//if the project has many tasks we use hasMany
        //within on this method we reference/passed the class of the Model
        return $this->hasMany(Task::class);

    }

    public function addTask($task)
    {
    //adding validation
  //3 approach    
    return $this->tasks()->create($task); 

//2 approach
//public function addTask($description)
  // $this->tasks()->create(['body' => $description ])

// 1 approach  
/*
 //public function addTask($description)
return  Task::create([
'project_id' => $this->id,
'body' => $description
]);

 */
  //compact already define that the request goes for the given column will fail if this have different names
 // return $this->tasks()->create(compact('name of the sending request with validation somehow fails')); 
    }

public function owner()
{

  return $this->belongsTo(User::class);


}


}
