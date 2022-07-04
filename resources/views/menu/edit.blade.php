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
                    <div class="card-header">{{ __('Edit menu item') }}</div>
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{ route('menu.update', $menu->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input value="{{ $menu->name }}"type="text" name="name" class="form-control" placeholder="Name of dish" required>
                                <input value="{{ $menu->price }}"type="text" name="price" class="form-control" placeholder="Price in €" required>
                                <textarea name="description" class="form-control" placeholder="Description">{{ $menu->description }}</textarea>
                                <form action="/action_page.php">
                                    <label for="img">Select image:</label>
                                    <input value="{{ $menu->image }}"type="file" id="img" name="image" accept="image/*" required>
                                </form>
                                <select name="category_id" class="form-control" required>
                                    <option>Category</option>
                                    @foreach($categories as $category)
                                        @if ($category->id == $menu->category_id)
                                            <option selected value="{{ $category->id }}">{{ $category->title }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endif

                                    @endforeach
                                </select>
                                <br>
                                <select name="enable" required>
                                    <option value="">Select action</option>
                                    <option value="1">Show item</option>
                                    <option value="0">Hide item</option>
                                </select>
                                <br>
                                <br>
                                <input type="submit" value="Edit menu item" class="btn btn-outline-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
