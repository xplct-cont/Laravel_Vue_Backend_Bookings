<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(){

        return response()->json(Booking::orderBy('bus_name')->get());

    }


    public function show(Booking $booking){
        return response()->json($booking);
    }

    public function store(){

    }


    public function update(Request $request, Booking $booking){

    }

    public function destroy(Booking $booking){

    }
}
