@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Blog</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Our Blog</a>
                        </li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- blogs -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- blog post -->
                @foreach ($blogs as $blog)
                    <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div
                            class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ asset($blog->image) }}" alt="Post thumb">
                            <div class="card-body">
                                <!-- post meta -->
                                <ul class="list-inline mb-3">
                                    <!-- post date -->
                                    <li class="list-inline-item mr-3 ml-0">{{ date('F d, Y', strToTime($blog->date)) }}</li>
                                    <!-- author -->
                                    <li class="list-inline-item mr-3 ml-0">By {{ $blog->user->name }}</li>
                                </ul>
                                <a href="{{ route('blog.details', $blog->slug) }}">
                                    <h4 class="card-title">{{ $blog->title }}</h4>
                                </a>
                                <p class="card-text">{{ $blog->short_description }}</p>
                                <a href="{{ route('blog.details', $blog->slug) }}" class="btn btn-primary btn-sm">read
                                    more</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /blogs -->
@endsection
