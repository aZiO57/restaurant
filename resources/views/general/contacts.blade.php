@extends('layouts.app')
@section('content')
    <div class="row featurette">
        <div class="page-title-wrap">
        <h1 class="page-title" data-max-size="36" data-min-size="25" style="font-size: 36px;">Contacts</h1>
            </div>
                <div class="col-md-7">
                    <div class="footer-contacts">
                    <p style="margin: 0"><strong>You can find us here.</strong></p>
                    <p style="margin: 0">+370 111 22233<br><p class="lead">Adress street 1A, Klaipeda, Lithuania</p><br><a href="mailto:mail@restaurant.com">mail@restaurant.com</a></p>
                </div>
        <div class="footer-workhours">
            <p><strong><i class="clock"></i> Working hours</strong></p>
            <p><span>Monday-Thursday:</span> 11:00-22:00</p>
            <p><span>Friday:</span> 10:00-24:00</p>
            <p><span>Saturday:</span> 10:00-24:00</p>
            <p><span>Sunday:</span> Closed</p>
        </div>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="restaurantlogo.png/500x500/auto" alt="500x500"
            style="width: 500px; height: 500px;" src="images/restaurantlogo.png" data-holder-rendered="true">
        </div>
    </div>
@endsection
