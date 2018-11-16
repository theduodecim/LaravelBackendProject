<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
    <h1>Projects!</h1>

<br>
<div class="container">

<table class="table">
<tr>
    <td>
    <label class="subtitle is-3"  for="title">Title</label>
    @foreach($projects as $project)

    <li> {{ $project->title }} <a href="/project/{{ $project->id }}/edit"> edit {{ $project->id }} </a></li>

    @endforeach
    </td>

    <td>
    <label class="subtitle is-3" for="description">Description</label>
    @foreach($projects as $project)

    <li> {{ $project->description }} </li>

    @endforeach
    </td>
 </tr>
</table>
</div>
<br>
<br>
<br>
    <a href="/project/create"> Create </a>
    <a href="/edit"> Edit </a>
</body>
</html>
