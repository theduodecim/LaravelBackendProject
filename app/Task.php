<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [ // which fields are mass assingment

        'body', 'completed', 'project_id',

    ];
    //
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = true)
    {

        $this->update(compact('completed')); // or $completed => 'completed'
        return back(); // this return to the last page after submit

    }

    public function incomplete($completed = false)
    {

  //     $this->update(compact('completed')); // or $completed => 'completed'

        $this->complete(false); // directly calling the complete function and setup to false

        return back(); // this return to the last page after submit

    }
}
