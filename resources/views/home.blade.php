@extends('layouts.app')

@section('content')
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">

            <img class="masthead-avatar mb-5" src="images/restaurantlogo.png" alt="..." />

            <h1 class="masthead-heading text-uppercase mb-0">Welcome to Restaurant</h1>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <p class="masthead-subheading font-weight-light mb-0">Tasty - Food - Drinks - Snacks </p>
        </div>
    </header>
    <!--Indicators-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-bs-ride="carousel" data-bs-interval="3000" >
        <div class="carousel-inner">
            <!--/.Indicators-->

            <!--First slide-->
            @for ($i = 0; $i < 3; $i++)
                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">

                    <div class="row">
                        @for ($j = 0; $j < 3; $j++)
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="https://i.pravatar.cc/160?u=b{{ $feedback[3 * $i + $j]->id }}.svg" width="160" height="140"
                                        margin-left="205" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $feedback[3 * $i + $j]->name }}</h4>
                                        <p class="card-text">{{ $feedback[3 * $i + $j]->message  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <script>
        // A $( document ).ready() block.
        $(document).ready(function() {
            $('.carousel').carousel();
        });
    </script>
@endsection
