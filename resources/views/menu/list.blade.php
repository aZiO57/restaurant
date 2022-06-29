@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($menus as $menu)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ $menu->name}}</div>
                        <div class="card-header">{{ $menu->price}}</div>
                        <div class="card-header">{{ $menu->category->name}}</div>
                        <div class="card-footer">
                            <a class="btn btn-primary float-end" href="{{route('menu.detailed',$menu->id)}}">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $menus->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
