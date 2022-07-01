@extends('layouts.app')
@section('content')
<div class="container content">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class ="details">
                <h2>Info</h2>
                <ul>
                    <li>{{ $booking->name }}</li>
                    <li>{{ $booking->date }}</li>
                    <li>{{Str::substr($booking->time , 0, -3) }}</li>
                    <li>{{ $booking->phone_number}}</li>
                    <li>{{ $booking->email}}</li>
                    <li>{{ $booking->comment}}</li>
                    <li>{{ $booking->table->name}} - {{ $booking->table->seats }}</li>
                    <a class="btn btn-primary float-end" href="{{route('booking.index')}}">
                        Back
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
