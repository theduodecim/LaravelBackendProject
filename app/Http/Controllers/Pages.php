<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{

    public function home()
    {
        $tasks = [
            'Go to the store',
            'go to the market',
            'go to work',
            'go to concert',
        ];
    
        // i want to return and view the home view and i want to give this a var
        return view('home', [
            'tasks' => $tasks,
            'foo' => 'foobar', // this will equal to foobar
        ]);

    }

    public function about() 
    {
        $tasks2 = [
            'manzanas',
            'naranjas',
            'topos',
            'crakers',
        ];
        return view('about')->withTasks2($tasks2)->withFoo('foo');
    }

    public function contact()
     {
    return view('contact')->with([
        'foo' => 'bar',
        'tasks3' => [
            'martin',
            'pedro',
            'jose',
            'raul',
        ],

    ]);
}










  
}
