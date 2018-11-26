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
    
      
        return view('home', [
            'tasks' => $tasks,
            'foo' => 'foobar', 
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
