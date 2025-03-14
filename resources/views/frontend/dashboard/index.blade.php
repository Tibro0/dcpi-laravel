@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Dashboard</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
@endpush

@section('frontend-content')
    <!-- Page title Start -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Student
                                Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page title End -->

    <!-- Page Content Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 shadow-lg p-5 bg-body rounded">
                    <h2 class="text-center mb-4">Update Student Information</h2>
                    <form action="{{ route('profile.update') }}" method="POST" class="row"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label>Preview</label><br>
                            <img src="{{ asset(auth()->user()->avatar) }}" class="mb-3" width="100">
                        </div>
                        <div class="col-12">
                            <input type="file" name="avatar" value="{{ old('avatar') }}" class="form-control mb-3">
                            <input type="hidden" name="old_avatar" value="{{ auth()->user()->avatar }}">
                        </div>
                        <div class="col-12">
                            <input type="text" name="name" value="{{ auth()->user()->name }}"
                                class="form-control mb-3" placeholder="Full Name">
                        </div>
                        <div class="col-12">
                            <input type="email" name="email" value="{{ auth()->user()->email }}"
                                class="form-control mb-3" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="text" name="phone" value="{{ auth()->user()->phone }}"
                                class="form-control mb-3" placeholder="Phone Number">
                        </div>
                        <div class="col-12">
                            <input type="text" name="address" value="{{ auth()->user()->address }}"
                                class="form-control mb-3" placeholder="Address">
                        </div>

                        <div class="col-12">
                            <select name="department" class="form-select form-select-lg mb-3" aria-label=".form-select-lg">
                                <option value="" selected>Select Department</option>
                                <option value="Civil">Civil</option>
                                <option @selected(auth()->user()->department === 'Electrical') value="Electrical">Electrical</option>
                                <option @selected(auth()->user()->department === 'Computer') value="Computer">Computer</option>
                                <option @selected(auth()->user()->department === 'Electronics') value="Electronics">Electronics</option>
                                <option @selected(auth()->user()->department === 'Telecommunication') value="Telecommunication">Telecommunication</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <select name="semester" class="form-select form-select-lg mb-3" aria-label=".form-select-lg">
                                <option value="" selected>Select Semester</option>
                                <option @selected(auth()->user()->semester === '1st') value="1st">1st</option>
                                <option @selected(auth()->user()->semester === '2nd') value="2nd">2nd</option>
                                <option @selected(auth()->user()->semester === '3rd') value="3rd">3rd</option>
                                <option @selected(auth()->user()->semester === '4th') value="4th">4th</option>
                                <option @selected(auth()->user()->semester === '5th') value="5th">5th</option>
                                <option @selected(auth()->user()->semester === '6th') value="6th">6th</option>
                                <option @selected(auth()->user()->semester === '7th') value="7th">7th</option>
                                <option @selected(auth()->user()->semester === '8th') value="8th">8th</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <select name="student_type" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg">
                                <option value="" selected>Select Student Type</option>
                                <option @selected(auth()->user()->student_type === 'Regular') value="Regular">Regular</option>
                                <option @selected(auth()->user()->student_type === 'Irregular') value="Irregular">Irregular</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <input type="text" name="session" value="{{ auth()->user()->session }}"
                                class="form-control mb-3" placeholder="Session">
                        </div>

                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content End -->
@endsection
