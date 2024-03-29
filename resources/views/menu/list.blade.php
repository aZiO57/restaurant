@extends('layouts.app')

@section('content')
    <div class="container content">
        <div class="row justify-content-center bg-primary">
            @foreach ($categories as $category)
                <h2>{{ $category->title }}</h2>
                @foreach ($menus as $menu)
                    @if ($menu->category_id === $category->id)
                        <div class="col-md-4 ">
                            <div class="card">
                                <div class="card-header"><b>{{ $menu->name }}</div>
                                <img src="/images/{{ $menu->image }} " style="width:414px;height:auto;">
                                <div class="card-body">
                                    <div>{{ $menu->price }}€</b></div>
                                    <div>{{ $menu->description }}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
