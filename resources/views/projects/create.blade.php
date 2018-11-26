
        @extends('layouts.app')
  


        @section('content')

<section class="hero is-primary">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
        Create a new project
            </h1>
            <h2 class="subtitle">
              You can Create your new projects and assign task to them!
            </h2>
          </div>
        </div>
      </section>
<div class="box">
<form method="POST" action="/project">

    {{ csrf_field() }}

<div class="field">
<label class="label" for="title"> Titles </label>

    <div class="control">
    <input minlength="6" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}" type="text" name="title" placeholder="Project title" required>
    </div>
</div>

<div class="field">
    <label class="label" for="description">Description</label>
    <div class="control">
         <textarea minlength="6"  class="textarea"  name="description" placeholder="Description Here :)" required></textarea>
    </div>
</div>

<div id="submitdiv">
        <button class="button is-link" type="submit">Create Project</button>
</div>

@include('errors')

</form>
</div>



<br>

<a class="subtitle is-2" href="/project">Back to Projects </a>

@endsection
