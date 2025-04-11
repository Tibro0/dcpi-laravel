@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | BTEB Course Routine</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Update BTEB Course Routine</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Update BTEB Course Routine</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.bteb-course-routine.update', $btebCourseRoutine->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Image <code>(PNG, JPG Format Image)</code></label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" name="course_name" value="{{ $btebCourseRoutine->course_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Course Duration</label>
                        <input type="text" name="course_duration" value="{{ $btebCourseRoutine->course_duration }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Priority Number</label>
                        <input type="text" name="priority_number" value="{{ $btebCourseRoutine->priority_number }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option @selected($btebCourseRoutine->status === 1) value="1">Active</option>
                            <option @selected($btebCourseRoutine->status === 0) value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('admin-js')
    <!-- image-preview js -->
    <script src="{{ asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script>
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.image-preview').css({
                'background-image': 'url({{ asset($btebCourseRoutine->image) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
