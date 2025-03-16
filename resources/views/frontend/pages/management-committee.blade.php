@extends('frontend.layouts.master')

@push('frontend-css')
    <title>DCPI | Management Committee</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Our
                                Management Committees</a></li>
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
                    <h2 class="section-title">Our Management Committees</h2>
                </div>
                <!-- teacher -->
                @foreach ($managementCommittees as $managementCommittee)
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ asset($managementCommittee->image) }}"
                                alt="teacher">
                            <div class="card-body">
                                <a href="{{ route('our-management-committee.details', $managementCommittee->slug) }}">
                                    <h4 class="card-title">{{ limitText($managementCommittee->name, 26) }}</h4>
                                </a>
                                <p>{{ $managementCommittee->designation }}</p>
                                <ul class="list-inline">
                                    @if ($managementCommittee->facebook_url)
                                        <li class="list-inline-item"><a class="text-color" target="_blank"
                                                href="{{ $managementCommittee->facebook_url }}"><i
                                                    class="ti-facebook"></i></a></li>
                                    @endif
                                    @if ($managementCommittee->whatsapp)
                                        <li class="list-inline-item h6"><a class="text-color" target="_blank"
                                                href="{{ $managementCommittee->whatsapp }}"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </li>
                                    @endif
                                    @if ($managementCommittee->twitter_url)
                                        <li class="list-inline-item"><a class="text-color" target="_blank"
                                                href="{{ $managementCommittee->twitter_url }}"><i
                                                    class="ti-twitter-alt"></i></a></li>
                                    @endif
                                    @if ($managementCommittee->linkedin_url)
                                        <li class="list-inline-item"><a class="text-color" target="_blank"
                                                href="{{ $managementCommittee->linkedin_url }}"><i
                                                    class="ti-linkedin"></i></a></li>
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
