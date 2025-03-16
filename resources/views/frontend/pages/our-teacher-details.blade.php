@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Teacher Details</title>
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
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{ $teacher->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- teacher details -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-5">
                    <img class="img-fluid w-100" src="{{ asset($teacher->image) }}" alt="teacher">
                </div>
                <div class="col-md-6 mb-5">
                    <h3>{{ $teacher->name }}</h3>
                    <h6 class="text-color">{{ $teacher->designation }}</h6>
                    <p class="mb-5">{{ $teacher->short_description }}</p>
                    <div class="row">
                        <div class="col-md-12 mb-5 mb-md-0">
                            <h4 class="mb-4">CONTACT INFO:</h4>
                            <ul class="list-unstyled">
                                @if ($teacher->email)
                                    <li class="mb-3"><a class="text-color" href="mailto:{{ $teacher->email }}"><i
                                                class="ti-email mr-2"></i>{{ $teacher->email }}</a></li>
                                @endif
                                @if ($teacher->whatsapp)
                                    <li class="mb-3"><a class="text-color" href="callto:+88{{ $teacher->whatsapp }}"><i
                                                class="ti-mobile mr-2"></i>+88{{ $teacher->whatsapp }}</a></li>
                                @endif
                                @if ($teacher->facebook_id_name && $teacher->facebook_url)
                                    <li class="mb-3"><a class="text-color" href="{{ $teacher->facebook_url }}"><i
                                                class="ti-facebook mr-2"></i>{{ $teacher->facebook_id_name }}</a></li>
                                @endif
                                @if ($teacher->twitter_id_name && $teacher->twitter_url)
                                    <li class="mb-3"><a class="text-color" href="{{ $teacher->twitter_url }}"><i
                                                class="ti-twitter-alt mr-2"></i>{{ $teacher->twitter_id_name }}</a></li>
                                @endif

                                @if ($teacher->linkedin_id_name && $teacher->linkedin_url)
                                    <li class="mb-3"><a class="text-color" href="{{ $teacher->linkedin_url }}"><i
                                                class="fa-brands fa-linkedin-in mr-2"></i>{{ $teacher->linkedin_id_name }}</a>
                                    </li>
                                @endif

                                @if ($teacher->website_url)
                                    <li class="mb-3"><a class="text-color" href="{{ $teacher->website_url }}"><i
                                                class="ti-world mr-2"></i>{{ $teacher->website_url }}</a></li>
                                @endif

                                @if ($teacher->address && $teacher->address_url)
                                    <li class="mb-3"><a class="text-color" href="{{ $teacher->address_url }}"><i
                                                class="ti-location-pin mr-2"></i>{{ $teacher->address }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    {!! $teacher->long_description !!}
                </div>
            </div>
            @include('frontend.home.components.courses')
        </div>
    </section>
    <!-- /teacher details -->
@endsection
