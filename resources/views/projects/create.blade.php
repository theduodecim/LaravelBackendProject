<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
<h1>Create a new project</h1>

<form method="POST" action="/project">

    {{ csrf_field() }}

<div class="field">
<label class="label" for="title">Title</label>

<div class="control">
    <input minlength="6" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}" type="text" name="title" placeholder="Project title" required>
</div>
</div>
<div class="field">
<label class="label" for="description">Description</label>
    <div class="control">
         <textarea minlength="6"  class="input" name="description" placeholder="description" required></textarea>
    </div>
</div>
<div>
        <button class="button is-link" type="submit">Create Project</button>
</div>


@if($errors-> any())
<div class="notification is-danger">

        <ul>
            @foreach ( $errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

</form>




<br>

<a class="subtitle is-2" href="/project"> Projects </a>

</body>

</html>
