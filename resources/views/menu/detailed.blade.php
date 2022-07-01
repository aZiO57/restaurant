@extends('layouts.app')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            @foreach($menu as $menu)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ $menu->name}}</div>
                        <div class="card-header">{{ $menu->price}}</div>
                        <div class="card-header">{{ $menu->description}}</div>
                        <div class="card-header">{{ $menu->image}}</div>
                        <div class="card-header">{{ $menu->category->name}}</div>
                    </div>
                </div>
            @endforeach
            {{ $menus->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
