@extends('layouts.app')

@section('content')
    <div class="container content">
        <br>
        <div class="row justify-content-center">
            @foreach ($bookings as $booking)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Name: {{ $booking->name }}</div>
                        <div class="card-header">Booked for: {{ $booking->date }}</div>
                        <div class="card-header">{{ $booking->table->name }}</div>

                        <div class="card-footer">
                            <a class="btn btn-primary float-end" href="{{ route('booking.show', $booking->id) }}">
                                Read more
                            </a>
                            <a class="btn btn-primary float-end" href="{{ route('booking.edit', $booking->id) }}">
                                Edit
                            </a>
                            <form action="{{ route('booking.destroy', $booking->id) }}" method="POST"> @csrf
                                @method('DELETE') <button class="btn btn-danger float-end" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $bookings->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
