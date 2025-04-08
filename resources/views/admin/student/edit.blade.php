@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Update Student Information</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update Student Information</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Student Information</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                            <label>Image <code>(PNG Format Image)</code></label>
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="avatar" id="image-upload" />
                                <input type="hidden" name="old_avatar" value="{{ $student->avatar }}">
                            </div>
                        </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input type="text" name="email" value="{{ $student->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="{{ $student->address }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <select name="department" class="form-control">
                            <option @selected($student->department === 'Civil') value="Civil">Civil</option>
                            <option @selected($student->department === 'Electrical') value="Electrical">Electrical</option>
                            <option @selected($student->department === 'Computer') value="Computer">Computer</option>
                            <option @selected($student->department === 'Electronics') value="Electronics">Electronics</option>
                            <option @selected($student->department === 'Telecommunication') value="Telecommunication">Telecommunication</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <select name="semester" class="form-control">
                            <option @selected($student->semester === '1st') value="1st">1st</option>
                            <option @selected($student->semester === '2nd') value="2nd">2nd</option>
                            <option @selected($student->semester === '3rd') value="3rd">3rd</option>
                            <option @selected($student->semester === '4th') value="4th">4th</option>
                            <option @selected($student->semester === '5th') value="5th">5th</option>
                            <option @selected($student->semester === '6th') value="6th">6th</option>
                            <option @selected($student->semester === '7th') value="7th">7th</option>
                            <option @selected($student->semester === '8th') value="8th">8th</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Student Type</label>
                        <select name="student_type" class="form-control">
                            <option @selected($student->student_type === 'Regular') value="Regular">Regular</option>
                            <option @selected($student->student_type === 'Irregular') value="Irregular">Irregular</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Session</label>
                        <input type="text" name="session" value="{{ $student->session }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Change Student Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('admin-js')
    <script>
        $(document).ready(function() {
            $('.image-preview').css({
                'background-image': 'url({{ asset($student->avatar) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
