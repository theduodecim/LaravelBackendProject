@extends('layouts.app')
  


        @section('content')

<div class="container">
        <section class="hero is-primary">
                <div class="hero-body">
                  <div class="container">
                    <h1 class="title">
                            Edit Projects
                    </h1>
                    <h2 class="subtitle">
                     
                    </h2>
                  </div>
                </div>
              </section>



<form method="POST" action="/project/{{ $project->id }}">

@csrf
@method('PATCH')

<div class="field">
<label class="label" for="title">Title</label>

    <div class="control">
        <input minlength="6"  name="title" type="text" class="input" value="{{ $project->title }}"  placeholder="Title" required>
    </div>

</div>


<div class="field">

<label class="label" for="title">Description</label>

    <div class="control">
        <textarea minlength="6" name="description"  class="textarea" required> {{ $project->description }} </textarea>
    </div>

</div>

<div class="field">

    <div class="control">
      <button type="submit" class="button is-link">Update Project</button>
    </div>

</div>
@include('errors')
</form>

<div class="field">
   <form method="POST"  action="/project/{{ $project->id }}">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <div class="control">
      <button type="submit" class="button is-danger">Delete Project</button>
    </div>
    </form>
</div>




</div>
<br>
<br>
<br>

    <a class="button is-success is-outlined" href="/project/create"> Create </a> 
    <br>
    <a class="subtitle is-2" href="/project"> Projects </a>



@endsection    
