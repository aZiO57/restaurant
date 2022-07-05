@extends('layouts.app')
@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="details">
                    <h2>Booking No.: {{ $booking->id }}</h2>
                    <ul>
                        <div class="card-header"><b>Name:</b> {{ $booking->name }}</div>
                        <div class="card-header"><b>Date:</b> {{ $booking->date }}</div>
                        <div class="card-header"><b>Time:</b> {{ Str::substr($booking->time, 0, -3) }}</div>
                        <div class="card-header"><b>Phone:</b> {{ $booking->phone_number }}</div>
                        <div class="card-header"><b>Email:</b> {{ $booking->email }}</div>
                        <div class="card-header"><b>Comment:</b> {{ $booking->comment }}</div>
                        <div class="card-header"><b>Table size:</b> {{ $booking->table->name }} -
                            {{ $booking->table->seats }}</div>
                        <a class="btn btn-primary float-end" href="{{ route('booking.index') }}">
                            Back
                        </a>
                        <a class="btn btn-primary float-end" href="{{ route('booking.edit', $booking->id) }}">
                            Edit
                        </a>
                        <form action="{{ route('booking.destroy', $booking->id) }}" method="POST"> @csrf
                            @method('DELETE') <button class="btn btn-danger float-end" type="submit">Delete</button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
