@extends('layouts.app')
  


        @section('content')




<div class="container">

<h1 class="title">{{ $project-> title }} </h1>

<h1 class="subtitle is-6">{{ $project-> description }}</h1>


@if ($project->tasks->count())

    <div class="box">
        @foreach ($project->tasks as $task)
            <div>
            <form method="post" action="/tasks/{{ $task->id }}">
            @csrf
            @method('PATCH')

             <label class="checkbox {{ $task-> completed ? 'is-completed' : '' }} " for="completed">

             <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

              {{ $task->body }}

             </label>

            </form>


            </div>

         @endforeach
    </div>

@endif

{{-- Creating a New Task --}}


<form class="box" method="POST" action="/projects/{{ $project->id }}/tasks">

@csrf

<div class="field">
<label class="label" for="title">Add Tasks</label>

    <div class="control">
    <input type="text" class="input" name="body" placeholder="New Task" minlength="4" required>
    </div>

</div>

<div class="field">

    <div class="control">
      <button type="submit" class="button is-link">Add Task</button>
     
    </div>
  
</div>
@include('errors')
</form>




<p>

    <a class="button is-light" href="/project"> Back </a> <a class="button is-success" href="/project/{{ $project->id }}/edit"> Edit </a>
    <br>
    <br>
   

</p>




@endsection