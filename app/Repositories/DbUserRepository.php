<?php

namespace App\Repositories;

class DbUserRepository implements userRepository
{

    public function create($attributes)
    {
        dd('creating the user');

    }

}
