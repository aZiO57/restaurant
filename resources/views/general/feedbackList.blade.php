@extends('layouts.app')

@section('content')
    <div class="container content">
        <br>
        <div class="row justify-content-center">
            @foreach ($feedback as $item)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Name: {{ $item->name }}</div>
                        <div class="card-header">Message: {{ $item->message }}</div>
                        <div class="card-footer">
                            <form action="{{ route('feedback.destroy', $item->id) }}" method="POST"> @csrf
                                @method('DELETE') <button class="btn btn-danger float-end" type="submit">Delete</button> </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $feedback->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
