<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>

    @can('view' , $projects)
    <p> You are allow to View this message Admin</p>
    @endcan
    
    @cannot('view', $projects)
<p> You are allow to View this message</p>
    @endcannot
<br>
    <h1>Projects!</h1>

<br>
<div class="container">

<table class="table">
<tr>
    <td>
    <label class="subtitle is-3"  for="title">Title</label>
    @foreach($projects as $project)

    <li><a href="/project/{{ $project->id }}"> {{ $project->title }} </a> <a class="subtitle is-6"  href="/project/{{ $project->id }}/edit"> edit </a></li>

    @endforeach
    </td>
 </tr>
</table>
</div>
<br>
<a class="button is-success is-outlined" href="/project/create"> Create a new Project</a>
<br>
<br>
<a class="subtitle is-2" href="/"> Home </a>


  
</body>
</html>
