@extends('frontend.layouts.master')

@push('frontend-css')
    <title></title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Our
                                Teacher</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- teachers -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="section-title">Our Teachers</h2>
                </div>
                <!-- teacher -->
                @foreach ($teachers as $teacher)
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ asset($teacher->image) }}" alt="teacher">
                            <div class="card-body">
                                <a href="{{ route('our-teacher.details', $teacher->slug) }}">
                                    <h4 class="card-title">{{ limitText($teacher->name, 26) }}</h4>
                                </a>
                                <p>{{ $teacher->designation }}</p>
                                <ul class="list-inline">
                                    @if ($teacher->facebook_url)
                                        <li class="list-inline-item"><a class="text-color" target="_blank"
                                                href="{{ $teacher->facebook_url }}"><i class="ti-facebook"></i></a></li>
                                    @endif
                                    @if ($teacher->whatsapp)
                                        <li class="list-inline-item h6"><a class="text-color" target="_blank"
                                                href="{{ $teacher->whatsapp }}"><i class="fa-brands fa-whatsapp"></i></a>
                                        </li>
                                    @endif
                                    @if ($teacher->twitter_url)
                                        <li class="list-inline-item"><a class="text-color" target="_blank"
                                                href="{{ $teacher->twitter_url }}"><i class="ti-twitter-alt"></i></a></li>
                                    @endif
                                    @if ($teacher->linkedin_url)
                                        <li class="list-inline-item"><a class="text-color" target="_blank"
                                                href="{{ $teacher->linkedin_url }}"><i class="ti-linkedin"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /teachers -->
@endsection
