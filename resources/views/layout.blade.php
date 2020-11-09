<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
    @livewireStyles
 
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    @yield('meta')
    <title>{{ config('app.name') }}</title>
</head>
<body>

<div style="background-color:beige">
@if(Auth::check())
    @livewire('navigation-dropdown')
    <a href="{{action('CarController@index')}}">Home</a>
<a href="{{action('CarController@create')}}">Add a Car</a>
<a href="{{action('ReservationController@index')}}">Reservations</a>
<a href="{{action('ReservationController@create')}}">Create a Reservation</a>
@endif
</div>
 
    @yield('content')

@livewireScripts
</body>
</html>