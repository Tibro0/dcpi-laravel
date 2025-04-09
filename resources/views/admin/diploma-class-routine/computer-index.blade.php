@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Civil</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Civil</h1>
        </div>
        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update Civil</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.civil.update',1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>1st Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->civil_1st_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>1st Semester</label>
                            <input type="file" class="form-control" name="civil_1st_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>2nd Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->civil_2nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>2nd Semester</label>
                            <input type="file" class="form-control" name="civil_2nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>3rd Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->civil_3nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>3rd Semester</label>
                            <input type="file" class="form-control" name="civil_3nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>4th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->civil_4nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>4th Semester</label>
                            <input type="file" class="form-control" name="civil_4nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>5th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->civil_5nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>5th Semester</label>
                            <input type="file" class="form-control" name="civil_5nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>6th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->civil_6nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>6th Semester</label>
                            <input type="file" class="form-control" name="civil_6nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>7th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->civil_7nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>7th Semester</label>
                            <input type="file" class="form-control" name="civil_7nd_semester_routine_image">
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
