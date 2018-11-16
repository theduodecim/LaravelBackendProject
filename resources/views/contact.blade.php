@extends('layoutMaster')


@section('content')

<h1>Contact Page</h1>

@foreach($tasks3 as $task)

<li> {{ $task }} </li>

@endforeach

</ul>

@endsection


@section('title')

Contact Page

@endsection
