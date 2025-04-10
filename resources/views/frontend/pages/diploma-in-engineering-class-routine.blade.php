@extends('frontend.layouts.master')

@push('frontend-css')
    <title>DCPI | Class Routine</title>
@endpush

@section('frontend-content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="javascript:;">Class
                                Routine</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- notice -->
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-5">Diploma in Engineering Class Routine</h1>
                    <div class="table-responsive table-responsive-sm">
                        <table class="table table-hover border">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">SL.#</th>
                                    <th scope="col" class="text-center">NAME OF TECHNOLOGY</th>
                                    <th scope="col" class="text-center">1ST SEMESTER (PROBIDHAN-2022)</th>
                                    <th scope="col" class="text-center">2ND SEMESTER (PROBIDHAN-2022)</th>
                                    <th scope="col" class="text-center">3RD SEMESTER (PROBIDHAN-2022)</th>
                                    <th scope="col" class="text-center">4TH SEMESTER (PROBIDHAN-2022)</th>
                                    <th scope="col" class="text-center">5TH SEMESTER (PROBIDHAN-2016)</th>
                                    <th scope="col" class="text-center">6TH SEMESTER (PROBIDHAN-2016)</th>
                                    <th scope="col" class="text-center">7TH SEMESTER (PROBIDHAN-2016)</th>
                                    <th scope="col" class="text-center">8TH SEMESTER (PROBIDHAN-2016)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1</th>
                                    <td class="text-center">64-CIVIL TECHNOLOGY</td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->civil_1st_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->civil_2nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->civil_3nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->civil_4nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->civil_5nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->civil_6nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->civil_7nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center">Industrial Training</td>
                                </tr>

                                <tr>
                                    <th scope="row" class="text-center">2</th>
                                    <td class="text-center">66-COMPUTER SCIENCE & TECHNOLOGY</td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->computer_1st_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->computer_2nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->computer_3nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->computer_4nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->computer_5nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->computer_6nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->computer_7nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center">Industrial Training</td>
                                </tr>

                                <tr>
                                    <th scope="row" class="text-center">3</th>
                                    <td class="text-center">67-ELECTRICAL TECNOLOGY</td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electrical_1st_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electrical_2nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electrical_3nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electrical_4nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electrical_5nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electrical_6nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electrical_7nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center">Industrial Training</td>
                                </tr>

                                <tr>
                                    <th scope="row" class="text-center">4</th>
                                    <td class="text-center">68-ELECTRONICS TECHNOLOGY</td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electronics_1st_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electronics_2nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electronics_3nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electronics_4nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electronics_5nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electronics_6nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->electronics_7nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center">Industrial Training</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">5</th>
                                    <td class="text-center">94-TELECOMMUNICATION TECHNOLOGY</td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->telecommunication_1st_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->telecommunication_2nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->telecommunication_3nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->telecommunication_4nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->telecommunication_5nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->telecommunication_6nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center"><a href="{{ asset($diplomaInEngineeringClassRoutine->telecommunication_7nd_semester_routine_image) }}" class="btn btn-primary btn-sm" download>Download</a>
                                    </td>
                                    <td class="text-center">Industrial Training</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /notice -->
@endsection
