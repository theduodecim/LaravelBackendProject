<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
/*
    public function owns($project)
    {
        return $this->belongsTo(Project::class);
    }
*/

public function projects() 

{
    //What reletionship has project with user?
    //HasOne?
    //HasMany?

    return $this->hasMany(Project::class, 'owner_id'); // fetching this query in sql is SELECT * FROM projects WHERE 'owner_id' = current instance of this user


}



}
