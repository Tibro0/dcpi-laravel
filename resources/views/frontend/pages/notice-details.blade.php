@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Notice | Details</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Notice</a>
                        </li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{ limitText($notice->title, 38) }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- notice details -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <div class="text-center mr-4">
                            <div class="p-4 bg-primary text-white">
                                <span class="h2 d-block">{{ date('j', strtotime($notice->date)) }}</span>
                                {{ strtoupper(date('M', strtotime($notice->date))) }},{{ date('Y', strtotime($notice->date)) }}
                            </div>
                        </div>
                        <!-- notice content -->
                        <div>
                            <h3 class="mb-4">{{ $notice->title }}</h3>
                            <img src="{{ asset($notice->image) }}" style="width: 880px; height: 1000px;" alt="">
                            <a href="{{ asset($notice->image) }}" download class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /notice details -->
@endsection
