@extends('layout')
@section('content')
<h1>Add a Car</h1>

<form method="post" action="{{action('CarController@store', $car->id)}}">
    <input type="text" name="name" id="" placeholder="name">
    <input type="text" name="description" placeholder="description">
    <input type="submit">
</form>
@endsection