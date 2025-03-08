@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Course Details</title>
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
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- section -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">{{ $diplomaEngineeringCourse->name }}</h2>
                </div>
                <div class="col-12 mb-4">
                    <!-- course thumb -->
                    <img src="{{ asset($diplomaEngineeringCourse->image) }}" class="img-fluid w-100">
                </div>
            </div>
            <!-- course info -->
            <div class="row align-items-center mb-5">
                <div class="col-xl-4 order-1 col-sm-6 mb-4 mb-xl-0">
                    <h2>{{ limitText($diplomaEngineeringCourse->name, 12) }}</h2>
                </div>
                <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-book text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">COURSES</h6>
                                    <p class="mb-0">{{ $diplomaEngineeringCourse->month }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">DURATION</h6>
                                    <p class="mb-0">{{ $diplomaEngineeringCourse->duration }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">FEE</h6>
                                    <p class="mb-0">From: {{ $diplomaEngineeringCourse->course_fee }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-2 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
                    <a href="#" class="btn btn-primary">Apply now</a>
                </div>
                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>
            <!-- course details -->
            <div class="row">
                <div class="col-12 mb-4">
                    {!! $diplomaEngineeringCourse->long_description !!}
                </div>

                <!-- teacher start -->
                {{-- <div class="col-12">
                    <h5 class="mb-3">Teacher</h5>
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="media mb-2 mb-sm-0">
                            <img class="mr-4 img-fluid" src="images/teacher.jpg" alt="Teacher">
                            <div class="media-body">
                                <h4 class="mt-0">Sam Somrat</h4>
                                Photographer
                            </div>
                        </div>
                        <div class="social-link">
                            <h6 class="d-none d-sm-block">Social Link</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i
                                            class="ti-linkedin"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i
                                            class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-bottom border-primary mt-4"></div>
                </div> --}}
                <!-- teacher end -->
            </div>
        </div>
    </section>
    <!-- /section -->

    <!-- related course -->
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Related Course</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Photography</h4>
                            </a>
                            <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut labore et dolore magna.</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Programming</h4>
                            </a>
                            <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut labore et dolore magna.</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Lifestyle Archives</h4>
                            </a>
                            <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor
                                incididunt ut labore et dolore magna.</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /related course -->
@endsection
