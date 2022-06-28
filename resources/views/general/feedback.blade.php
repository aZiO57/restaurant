@extends('layouts.app')
@section('content')
<div class="row">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Feedback') }}</div>
                <div class="card-body">
                    <form class="form" method="post" action="{{ route('feedback.store') }}">
                        @csrf
                        <br>
                        <br>
                        <strong>Leave feedback on your experience at our restaurant</strong>
                        <br>
                        <br>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            <br>
                            <textarea name="message" class="form-control" placeholder="Message"></textarea>
                            <br>
                            <label class="rating-label">
                                <strong>Rating</strong>
                                <input
                                    class="rating"
                                    name="rating"
                                    max="5"
                                    oninput="this.style.setProperty('--value', this.value)"
                                    step="1"
                                    type="range"
                                    value="1">
                            </label>
                            <input type="submit" value="Leave review" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
