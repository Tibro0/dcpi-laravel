@extends('frontend.layouts.master')

@push('frontend-css')
    <title>DCPI | BTEB Course Class Routine</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">BTEB Course
                                Class Routine</a></li>
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
                    <h1 class="text-center mb-5">BTEB Course Class Routine</h1>
                    <div class="table-responsive table-responsive-sm">
                        <table class="table table-hover border">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">SL.#</th>
                                    <th scope="col" class="text-center">Course Name</th>
                                    <th scope="col" class="text-center">Duration</th>
                                    <th scope="col" class="text-center">Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($btebCourseRoutines as $btebCourseRoutine)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <td class="text-center">{{ $btebCourseRoutine->course_name }}</td>
                                    <td class="text-center">{{ $btebCourseRoutine->course_duration }}</td>
                                    <td class="text-center"><a href="{{ asset($btebCourseRoutine->image) }}" class="btn btn-primary btn-sm"
                                            download>Download</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /notice -->
@endsection
