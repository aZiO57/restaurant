@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Edit of booking reservation:' }} {{ $booking->id }}</div>
                    <div class="card-body">
                        <form class="form" method="post" action="{{ route('booking.update', $booking->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input value="{{ $booking->name }}" type="text" name="name" class="form-control"
                                    placeholder="First name" required>
                                <label for="appt">Change date of booking</label>
                                <br>
                                <input value="{{ $booking->date }}" type="date" name="date"
                                    min="{{ date('Y-m-d') }}" required />
                                <br>
                                <label for="appt">Change time of booking</label>
                                <br>
                                <input value="{{ $booking->time }}" type="time" name="time" min="10:00"
                                    max="22:00" required>

                                <input value="{{ $booking->phone_number }}" name="phone_number" class="form-control"
                                    placeholder="370********" minlength="11" maxlength="11">
                                <input value="{{ $booking->email }}" name="email" type="email" class="form-control"
                                    placeholder="email@mail.com" required>
                                <select name="table_id" class="form-control">
                                    <option>Table size</option>
                                    @foreach ($tables as $table)
                                        @if ($table->id == $booking->table_id)
                                            <option selected value="{{ $table->id }}">{{ $table->name }}</option>
                                        @else
                                            <option value="{{ $table->id }}">{{ $table->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <textarea name="comment" class="form-control" placeholder="Comment *Optional*">{{ $booking->comment }}</textarea>
                                <input type="submit" value="Edit booking" class="btn btn-outline-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
