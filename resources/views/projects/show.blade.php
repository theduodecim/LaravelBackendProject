<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>



<div class="container">

<h1 class="title">{{ $project-> title }}</h1>

<h1 class="subtitle is-6">{{ $project-> description }}</h1>


@if ($project->tasks->count())

    <div>
        @foreach ($project->tasks as $task)

            <div>
            <form method="post" action="/tasks/{{ $task->id }}">
            @csrf
            @method('PATCH')
        
             <label class="checkbox" for="completed">

             <input type="checkbox" name="completed" onChange="this.form.submit()">

              {{ $task->body }}

             </label>

            </form>


            </div>

         @endforeach
    </div>

@endif

<p>

    <a href="/project/{{ $project->id }}/edit"> Edit </a>
    <br>
    <br>
    <a href="/project"> Back </a>

</p>


</body>
</html>
