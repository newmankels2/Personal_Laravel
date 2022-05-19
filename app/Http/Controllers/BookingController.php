<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function saveBookings(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);

        $booking = new Booking;
        $booking->first_name = $request->first_name;
        $booking->last_name = $request->last_name;
        $booking->email = $request->email;
        $booking->mobile = $request->mobile;
        $booking->save();
        return redirect('/booking');
    }

    public function editBookings()
    {
        return 'edit page';
    }
    public function updateBookings(Request $request, Booking $booking)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);

        $booking->update($request->all());
    }
    public function deleteBookings(Booking $booking)
    {
        $booking->delete();
        return back();
    }
}
