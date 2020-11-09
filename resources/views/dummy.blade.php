@extends('layout')
@section('meta')
    <meta type="keywords" value="dummy, bootcamp, project">
@endsection
@section('content')
    <h1 style="font-size:5rem;" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">My First Auth Project</h1>

    @if(Auth::check())
        <h3>Hello, {{$user->name}}!</h3>
    @else 
        <h3>Hello, stranger!</h3>
    @endif
        <p>This is some content.</p>
 @endsection