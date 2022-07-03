<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use App\Models\Table;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['show', 'destroy', 'index', 'update', 'edit']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['bookings'] = Booking::paginate(10);

        return view('bookings.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tables'] = Table::all();
        return view('bookings.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        $booking = new Booking();
        $booking->name = $request->post('name');
        $booking->date = $request->post('date');
        $booking->time = $request->post('time');
        $booking->phone_number = $request->post('phone_number');
        $booking->email = $request->post('email');
        $booking->comment = $request->post('comment');
        $booking->table_id = $request->post('table_id');

        $booking->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data['booking'] = Booking::find($id);

        return view('bookings.single', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $data['booking'] = $booking;
        $data['tables'] = Table::all();
        return view('bookings.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, int $id)
    {
        dd($request);
        $booking = Booking::find($id);
        $booking->name = $request->post('name');
        $booking->date = $request->post('date');
        $booking->time = $request->post('time');
        $booking->email = $request->post('email');
        $booking->phone_number = $request->post('phone_number');
        $booking->comment = $request->post('comment');
        $booking->table_id = $request->post('table_id');

        $booking->save();
        return redirect()->route('booking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);

        $booking->delete();
        return redirect()->route('booking.index');
    }
}
