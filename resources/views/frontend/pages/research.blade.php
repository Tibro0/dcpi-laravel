@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Research</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Research</a>
                        </li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- research start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- recharch item -->
                @foreach ($research as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
                            <img class="card-img-top rounded-0" src="{{ asset($item->image) }}" alt="research thumb">
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->title }}</h4>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /research end -->
@endsection
