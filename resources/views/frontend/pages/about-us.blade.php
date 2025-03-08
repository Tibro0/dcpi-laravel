@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | About Us</title>
@endpush

@section('frontend-content')
    <!-- page title start -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">About Us</a>
                        </li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- about start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid w-100 mb-4" src="{{ asset(@$aboutUs->image) }}" alt="about image">
                    {!! @$aboutUs->description !!}
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- fun facts start -->
    <section class="section-sm bg-primary">
        <div class="container">
            <div class="row">
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="{{ @$aboutUs->first_counter_number }}">0</h2>
                        <h5 class="text-white">{{ @$aboutUs->first_counter_name }}</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="{{ @$aboutUs->second_counter_number }}">0</h2>
                        <h5 class="text-white">{{ @$aboutUs->second_counter_name }}</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="{{ @$aboutUs->third_counter_number }}">0</h2>
                        <h5 class="text-white">{{ @$aboutUs->third_counter_name }}</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="{{ @$aboutUs->fourth_counter_number }}">0</h2>
                        <h5 class="text-white">{{ @$aboutUs->fourth_counter_name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun facts end -->

    <!-- success story start -->
    @include('frontend.home.components.success-story')
    <!-- success story end -->

    <!-- teachers start -->
    @include('frontend.home.components.teachers')
    <!-- teachers end -->
@endsection
