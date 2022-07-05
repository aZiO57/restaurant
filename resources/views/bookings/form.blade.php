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
                    <div class="card-header bg-primary">{{ __('Table booking') }}</div>
                    <div class="card-body">
                        <form class="form" method="post" action="{{ route('booking.store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="First name" required>
                                <label for="appt">Choose a date for your booking</label>
                                <br>
                                <input type="date" name="date" min="{{ date('Y-m-d') }}" required />
                                <br>
                                <label for="appt">Choose a time for your booking</label>
                                <br>
                                <input type="time" name="time" min="10:00" max="22:00" required>

                                <input name="phone_number" class="form-control" placeholder="370********" minlength="11"
                                    maxlength="11">
                                <input name="email" type="email" class="form-control" placeholder="email@mail.com"
                                    required>
                                <select name="table_id" class="form-control">
                                    <option>Table size</option>
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}">{{ $table->name }}</option>
                                    @endforeach
                                </select>
                                <textarea name="comment" class="form-control" placeholder="Comment *Optional*"></textarea>
                                <input type="submit" value="Book table" class="btn btn-outline-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
