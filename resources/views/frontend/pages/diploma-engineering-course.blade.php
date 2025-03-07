@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | All Course Details</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Our
                                Diploma Engineering Course
                            </a></li>
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
            <!-- course list -->
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach ($diplomaEngineeringCourses as $diplomaEngineeringCourse)
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ asset($diplomaEngineeringCourse->image) }}"
                                alt="course thumb">
                            <div class="card-body">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i
                                            class="ti-calendar mr-1 text-color"></i>{{ date('d-m-Y', strToTime($diplomaEngineeringCourse->created_at)) }}
                                    </li>
                                </ul>
                                <a
                                    href="{{ route('diploma-engineering-course.details', $diplomaEngineeringCourse->slug) }}">
                                    <h4 class="card-title">{{ $diplomaEngineeringCourse->name }}</h4>
                                </a>
                                <p class="card-text mb-4">{{ $diplomaEngineeringCourse->short_description }}</p>
                                <a href="{{ route('diploma-engineering-course.details', $diplomaEngineeringCourse->slug) }}"
                                    class="btn btn-primary btn-sm">View Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /course list -->
        </div>
    </section>
    <!-- /courses -->
@endsection
