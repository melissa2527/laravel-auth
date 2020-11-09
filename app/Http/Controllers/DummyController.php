<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
        $user = \Auth::user();
        
        // $r = new Reservation;
        // $r->user_id = \Auth::user()->id;
        // or
        // $r->user_id = \Auth::user(id);

        return view('dummy', compact('user'));
    }
}
