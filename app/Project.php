<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [ // which fields are mass assingment

        'title', 'description',

    ];

// building a new relationship with projects and tasks

    public function tasks()
    {
//relationship available
        // belongsTo, HasMany , hasManyThrough,  morphMany

//if the project has many tasks we use hasMany
        //within on this method we reference/passed the class of the Model
        return $this->hasMany(Task::class);

    }

}
