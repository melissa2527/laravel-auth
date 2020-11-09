<table class="table table-striped">
    <tr>
    <th>Car</th>
    <th>User</th>
    <th>From</th>
    <th>To</th>
    <th>Price</th>
    </tr>

    <tr>
    @foreach($reservations as $res)
    <td>{{$res->car_id}}</td>
    <td>{{$res->user_id}}</td>
    <td>{{$res->from}}</td>
    <td>{{$res->to}}</td>
    <td>{{$res->price}}</td> 
    {{-- find way to show price --}}
    @endforeach
    </tr>
</table>

<h3>Create a Reservation</h3>
<form method="post" action="{{action('ReservationController@store', $reservation->id)}}">
    <select>
        <option value="1">{{car->name}}</option>
    </select>
    <input type="date" value="{{$reservation->from}}">
    <input type="date" value="{{$reservation->to}}">
    <button>Submit</button>
</form>