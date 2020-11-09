@extends('layout')
@section('content')
<h1> Car Details: {{$car->name}}</h1>

<p>Price: {{$car->price}}</p>
<p>Description {{$car->description}}</p>
@endsection