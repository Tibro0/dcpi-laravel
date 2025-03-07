@extends('frontend.layouts.master')

@push('frontend-css')
    <title>Educenter | Contact</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Contact
                                Us</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- contact -->
    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <form action="#">
                        <input type="text" class="form-control mb-3" id="name" name="name"
                            placeholder="Your Name">
                        <input type="email" class="form-control mb-3" id="mail" name="mail"
                            placeholder="Your Email">
                        <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
                        <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates
                        doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt.
                        Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo
                        iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum
                    </p>
                    <div class="row">
                        <div class="col-md-1">
                            <a href="#" class="h5"><i class="fa-solid fa-phone text-color"></i></a>
                        </div>
                        <div class="col-md-11">
                            <a href="tel:+8802057843248" class="text-color h5 d-block">+880 20 5784 3248</a>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-1">
                            <a href="#" class="h5"><i class="fa-solid fa-envelope text-color"></i></a>
                        </div>
                        <div class="col-md-11">
                            <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">yourmail@email.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <a href="#" class="h5"><i class="fa-solid fa-location-dot text-color"></i></a>
                        </div>
                        <div class="col-md-11">
                            <a href="#" class="h5 text-color h5 d-block">71 Shelton Street London WC2H 9JQ England</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact -->

    <!-- gmap -->
    <section class="section pt-0">
        <!-- Google Map -->
        <div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
    </section>
    <!-- /gmap -->
@endsection
