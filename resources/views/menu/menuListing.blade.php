@extends('layouts.app')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            @foreach ($categories as $category)
                <h2>{{ $category->title }}</h2>
                @foreach ($menus as $menu)
                    @if ($menu->category_id === $category->id)
                        <div class="col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item"><b>{{ $menu->name }}</li>
                            </ul>
                            <div class="card">
                                <div class="card-footer">
                                    <a class="btn btn-primary float-end" href="{{ route('menu.edit', $menu->id) }}">
                                        Edit item
                                    </a>
                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST"> @csrf
                                        @method('DELETE') <button class="btn btn-danger float-end"
                                            type="submit">Delete</button> </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
