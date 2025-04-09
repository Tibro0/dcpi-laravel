@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Electrical</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Electrical</h1>
        </div>
        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update Electrical</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.electrical.update',1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>1st Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electrical_1st_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>1st Semester</label>
                            <input type="file" class="form-control" name="electrical_1st_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>2nd Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electrical_2nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>2nd Semester</label>
                            <input type="file" class="form-control" name="electrical_2nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>3rd Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electrical_3nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>3rd Semester</label>
                            <input type="file" class="form-control" name="electrical_3nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>4th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electrical_4nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>4th Semester</label>
                            <input type="file" class="form-control" name="electrical_4nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>5th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electrical_5nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>5th Semester</label>
                            <input type="file" class="form-control" name="electrical_5nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>6th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electrical_6nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>6th Semester</label>
                            <input type="file" class="form-control" name="electrical_6nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>7th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electrical_7nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>7th Semester</label>
                            <input type="file" class="form-control" name="electrical_7nd_semester_routine_image">
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
