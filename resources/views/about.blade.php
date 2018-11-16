@extends('layoutMaster')


@section('content')
<h1>About Us Page</h1>

<ul>

@foreach($tasks2 as $task)

<li> {{ $task }} </li>

@endforeach

</ul>

@endsection


@section('title', 'About Us Page')
