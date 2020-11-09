@extends('layout')
@section('content')
<h1>Cars</h1>

@foreach ($cars as $car)
    <h3>{{$car->name}}</h3>
    <strong>{{$car->price}}</h3>
    <p>{{$car->description}}</p>
    <button><a href="{{action('CarController@show')}}">Details</a></button>
@endforeach

@endsection