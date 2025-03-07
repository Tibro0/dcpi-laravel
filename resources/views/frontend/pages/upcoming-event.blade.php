@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Upcoming Events</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Upcoming
                                Events</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- courses -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- event -->
                @foreach ($events as $event)
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-img position-relative">
                                <img class="card-img-top rounded-0" src="{{ asset($event->image) }}" alt="event thumb">
                                <div class="card-date">
                                    <span>{{ date('d', strtotime($event->date)) }}</span><br>{{ date('F', strtotime($event->date)) }}
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- location -->
                                <p><i class="ti-location-pin text-primary mr-2"></i>{{ $event->location }}</p>
                                <a href="{{ route('upcoming-event.details', $event->slug) }}">
                                    <h4 class="card-title">{{ $event->name }}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /courses -->
@endsection
