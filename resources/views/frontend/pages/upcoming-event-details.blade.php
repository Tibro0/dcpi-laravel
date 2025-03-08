@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Event Details</title>
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
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{ $event->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- event single -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">{{ $event->name }}</h2>
                </div>
                <!-- event image -->
                <div class="col-12 mb-4">
                    <img src="{{ asset($event->image) }}" alt="event thumb" class="img-fluid w-100">
                </div>
            </div>
            <!-- event info -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-9">
                    <ul class="list-inline">
                        <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-location-pin text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">LOCATION</h6>
                                    <p class="mb-0">{{ $event->location }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-calendar text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">DATE</h6>
                                    <p class="mb-0">{{ date('F-d-Y', strtotime($event->date)) }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-time text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">TIME</h6>
                                    <p class="mb-0">{{ $event->time }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">ENTRY FEE</h6>
                                    <p class="mb-0">From: {{ $event->fee }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 text-lg-right text-left">
                    <a href="#" class="btn btn-primary">Apply now</a>
                </div>
                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>
            <!-- event details -->
            <div class="row">
                <div class="col-12 mb-50">
                    {!! $event->long_description !!}
                </div>
            </div>
            <!-- event speakers start -->
            {{-- <div class="row">
                <div class="col-12">
                    <h3 class="mb-4">Event Speakers</h3>
                </div>
                <!-- speakers -->
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="media">
                        <img class="mr-3 img-fluid" src="images/event-speakers/speaker-1.jpg" alt="speaker">
                        <div class="media-body">
                            <h4 class="mt-0">Jack Mastio</h4>
                            Teacher
                        </div>
                    </div>
                </div>
                <!-- speakers -->
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="media">
                        <img class="mr-3 img-fluid" src="images/event-speakers/speaker-2.jpg" alt="speaker">
                        <div class="media-body">
                            <h4 class="mt-0">John Doe</h4>
                            Teacher
                        </div>
                    </div>
                </div>
                <!-- speakers -->
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="media">
                        <img class="mr-3 img-fluid" src="images/event-speakers/speaker-3.jpg" alt="speaker">
                        <div class="media-body">
                            <h4 class="mt-0">Randy Luis</h4>
                            Teacher
                        </div>
                    </div>
                </div>
                <!-- speakers -->
                <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                    <div class="media">
                        <img class="mr-3 img-fluid" src="images/event-speakers/speaker-4.jpg" alt="speaker">
                        <div class="media-body">
                            <h4 class="mt-0">Alfred Jin</h4>
                            Teacher
                        </div>
                    </div>
                </div>
                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div> --}}
            <!-- event speakers End -->
        </div>
    </section>
    <!-- /event single -->

    <!-- more event start -->
    @if (count($relatedEvents) > 0)
        <section class="section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">More Events</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- event -->
                    @foreach ($relatedEvents as $event)
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
                                        <h4 class="card-title">{{ limitText($event->name, 52) }}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- more event end -->
@endsection
