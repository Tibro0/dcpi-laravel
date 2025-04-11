@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | BTEB Course Routine</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Create BTEB Course Routine</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create BTEB Course Routine</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.bteb-course-routine.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Image <code>(PNG, JPG Format Image)</code></label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" name="course_name" value="{{ old('course_name') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Course Duration</label>
                        <input type="text" name="course_duration" value="{{ old('course_duration') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Priority Number</label>
                        <input type="text" name="priority_number" value="{{ old('priority_number') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
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
@endpush
