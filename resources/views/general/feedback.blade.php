@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card content">
                <div class="card-header bg-primary">{{ __('Feedback') }}</div>
                <div class="card-body">
                    <form class="form" method="post" action="{{ route('feedback.store') }}">
                        @csrf
                        <strong>Leave feedback on your experience at our restaurant</strong>
                        <br>
                        <br>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            <br>
                            <textarea name="message" class="form-control" placeholder="Message"></textarea>
                            <br>
                            <input type="submit" value="Leave review" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
