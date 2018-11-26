@extends('layouts.app')
  


@section('content')
    @can('view' , $projects)
    <p> You are allow to View this message Admin</p>
    @endcan
    
    @cannot('view', $projects)

    @endcannot
<br>
    <h1 class="title is-size-1 has-text-Info">Projects!</h1>

<br>
<div class="container">
    <section id="selectorcolor" class="hero is-light">
        <div class="hero-body">
          <div class="container">
            <h1 id="title" class="title">
             Projects Titles
            </h1>
            <h2 class="subtitle">
                <table class="table">
                    <tr>
                        <td>
                       
                        @foreach($projects as $project)
                    
                        <li><a href="/project/{{ $project->id }}"> {{ $project->title }} </a> <a class="subtitle is-6"  href="/project/{{ $project->id }}/edit"> edit </a></li>
                    
                        @endforeach
                        </td>
                     </tr>
                    </table>
            </h2>
          </div>
        </div>
      </section>

</div>
<br>
<a class="button is-success is-outlined" href="/project/create"> Create a new Project</a>
<br>

@endsection