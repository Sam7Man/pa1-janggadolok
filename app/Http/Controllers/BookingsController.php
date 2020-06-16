<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Booking_user;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Booking::all();
        return view('user.booking', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'check_in' => 'required|date|after:yesterday',
            'check_out' => 'required|date|after:check_in'
        ]);

        Booking_user::create([
            'id_paket' => $request->jenis,
            'id_user' => Auth::user()->id,
            'Total' => $request->cost,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out
        ]);
        return redirect('detail')->with('message', 'List telah ditambah');
    }

    public function detail(){
        $data = DB::table('booking_user')
                ->join('booking', 'booking_user.id_paket', '=', 'booking.id')
                ->select('booking.jenis_paket', 'booking.cost', 'booking_user.created_at', 'booking_user.id', 'booking_user.check_in', 'booking_user.check_out')
                ->where('id_user', Auth::user()->id)
                ->get();

        return view('user.detail', compact('data'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('user.showBooking', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */

    public function edit(Booking_user $booking_user)
    {
        $data = $booking_user;
        $booking = DB::table('booking')
                    ->where('id', $booking_user->id_paket)
                    ->get();
        $result = array();
        array_push($result, $booking[0]);
        array_push($result, $data);

        return view('user.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking_user $booking_user)
    {
        $request->validate([
            'check_in' => 'required|date|after:yesterday',
            'check_out' => 'required|date|after:check_in'
        ]);
        Booking_user::where('id', $booking_user->id)
                    ->update([
                        'id_paket' => $request->jenis,
                        'Total' => $request->cost,
                        'check_in' => $request->check_in,
                        'check_out' => $request->check_out
                    ]);

        return redirect('detail')->with('message', 'Data berhasil diubah');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking_user $booking_user)
    {
        Booking_user::destroy($booking_user->id);
        return redirect('detail')->with('message', 'Data berhasil dihapus');
    }
}
