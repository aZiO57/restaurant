@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($bookings as $booking)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ $booking->name}}</div>
                        <div class="card-header">{{ $booking->date}}</div>
                        <div class="card-header">{{ $booking->email}}</div>
                        <div class="card-header">{{ $booking->table->name}}</div>

                        <div class="card-footer">
                            <a class="btn btn-primary float-end" href="{{route('booking.show',$booking->id)}}">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $bookings->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
