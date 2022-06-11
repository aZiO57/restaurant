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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Table booking') }}</div>

                    <div class="card-body">
                        <form class="form" method="post" action="{{ route('booking.store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                                <select name="date" class="form-control" placeholder="date">
                                <select name="time" class="form-control" placeholder="time">
                                <input name="phone" class="form-control" placeholder="+370********">
                                <input name="email" type="email" class="form-control" placeholder="email@mail.com">
                                <textarea name="content" class="form-control" placeholder="comment">
                                </textarea>
                                <input type="submit" value="Book table" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
