@extends('frontend.layouts.master')

@push('frontend-css')
    <title>DCPI | Our Identity</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Our
                                Identity</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- notice -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Our identity</h1>
                    {!! $ourIdentityContent['our_identity_page_content'] !!}
                </div>
            </div>
        </div>
    </section>
    <!-- /notice -->
@endsection
