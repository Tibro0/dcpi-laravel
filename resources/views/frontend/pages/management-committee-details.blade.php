@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Our Management Committee Details</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">
                                Our Management Committee</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{ $managementCommittee->name }}
                        </li>
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
                    <img class="img-fluid w-100" src="{{ asset($managementCommittee->image) }}" alt="teacher">
                </div>
                <div class="col-md-6 mb-5">
                    <h3>{{ $managementCommittee->name }}</h3>
                    <h6 class="text-color">{{ $managementCommittee->designation }}</h6>
                    <p class="mb-5">{{ $managementCommittee->short_description }}</p>
                    <div class="row">
                        <div class="col-md-12 mb-5 mb-md-0">
                            <h4 class="mb-4">CONTACT INFO:</h4>
                            <ul class="list-unstyled">
                                @if ($managementCommittee->email)
                                    <li class="mb-3"><a class="text-color"
                                            href="mailto:{{ $managementCommittee->email }}"><i
                                                class="ti-email mr-2"></i>{{ $managementCommittee->email }}</a></li>
                                @endif
                                @if ($managementCommittee->whatsapp)
                                    <li class="mb-3"><a class="text-color"
                                            href="callto:+88{{ $managementCommittee->whatsapp }}"><i
                                                class="ti-mobile mr-2"></i>+88{{ $managementCommittee->whatsapp }}</a></li>
                                @endif
                                @if ($managementCommittee->facebook_id_name && $managementCommittee->facebook_url)
                                    <li class="mb-3"><a class="text-color"
                                            href="{{ $managementCommittee->facebook_url }}"><i
                                                class="ti-facebook mr-2"></i>{{ $managementCommittee->facebook_id_name }}</a>
                                    </li>
                                @endif
                                @if ($managementCommittee->twitter_id_name && $managementCommittee->twitter_url)
                                    <li class="mb-3"><a class="text-color"
                                            href="{{ $managementCommittee->twitter_url }}"><i
                                                class="ti-twitter-alt mr-2"></i>{{ $managementCommittee->twitter_id_name }}</a>
                                    </li>
                                @endif

                                @if ($managementCommittee->linkedin_id_name && $managementCommittee->linkedin_url)
                                    <li class="mb-3"><a class="text-color"
                                            href="{{ $managementCommittee->linkedin_url }}"><i
                                                class="fa-brands fa-linkedin-in mr-2"></i>{{ $managementCommittee->linkedin_id_name }}</a>
                                    </li>
                                @endif

                                @if ($managementCommittee->website_url)
                                    <li class="mb-3"><a class="text-color"
                                            href="{{ $managementCommittee->website_url }}"><i
                                                class="ti-world mr-2"></i>{{ $managementCommittee->website_url }}</a></li>
                                @endif

                                @if ($managementCommittee->address && $managementCommittee->address_url)
                                    <li class="mb-3"><a class="text-color"
                                            href="{{ $managementCommittee->address_url }}"><i
                                                class="ti-location-pin mr-2"></i>{{ $managementCommittee->address }}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    {!! $managementCommittee->long_description !!}
                </div>
            </div>
            @include('frontend.home.components.courses')
        </div>
    </section>
    <!-- /teacher details -->
@endsection
