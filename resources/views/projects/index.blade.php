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



    @foreach($projects as $project)

    <li> {{ $project->title }} </li>

    @endforeach



</div>
<br>
<br>
<br>
    <a href="/project/create"> Create </a>
    <a href="/edit"> Edit </a>
</body>
</html>
