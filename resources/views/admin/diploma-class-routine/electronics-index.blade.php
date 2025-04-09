@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Electronics</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Electronics</h1>
        </div>
        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update Electronics</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.electronics.update',1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>1st Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electronics_1st_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>1st Semester</label>
                            <input type="file" class="form-control" name="electronics_1st_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>2nd Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electronics_2nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>2nd Semester</label>
                            <input type="file" class="form-control" name="electronics_2nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>3rd Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electronics_3nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>3rd Semester</label>
                            <input type="file" class="form-control" name="electronics_3nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>4th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electronics_4nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>4th Semester</label>
                            <input type="file" class="form-control" name="electronics_4nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>5th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electronics_5nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>5th Semester</label>
                            <input type="file" class="form-control" name="electronics_5nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>6th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electronics_6nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>6th Semester</label>
                            <input type="file" class="form-control" name="electronics_6nd_semester_routine_image">
                        </div>

                        <div class="form-group">
                            <label>7th Semester Routine Preview</label><br>
                            <img src="{{ asset(@$diplomaClassRoutine->electronics_7nd_semester_routine_image) }}" width="100">
                        </div>
                        <div class="form-group">
                            <label>7th Semester</label>
                            <input type="file" class="form-control" name="electronics_7nd_semester_routine_image">
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
