@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | About Us Page</title>
    <!-- Summernote-->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/summernote/summernote-bs4.css') }}">
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>About Us Page</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>About Us Page</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.about-us.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Image <code>(PNG Format Image)</code></label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                            <input type="hidden" name="old_image" value="{{ @$aboutUs->image }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Counter Name</label>
                                <input type="text" name="first_counter_name" value="{{ @$aboutUs->first_counter_name }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Counter Number</label>
                                <input type="text" name="first_counter_number"
                                    value="{{ @$aboutUs->first_counter_number }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Second Counter Name</label>
                                <input type="text" name="second_counter_name"
                                    value="{{ @$aboutUs->second_counter_name }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Second Counter Number</label>
                                <input type="text" name="second_counter_number"
                                    value="{{ @$aboutUs->second_counter_number }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Third Counter Name</label>
                                <input type="text" name="third_counter_name" value="{{ @$aboutUs->third_counter_name }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Third Counter Number</label>
                                <input type="text" name="third_counter_number"
                                    value="{{ @$aboutUs->third_counter_number }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fourth Counter Name</label>
                                <input type="text" name="fourth_counter_name"
                                    value="{{ @$aboutUs->fourth_counter_name }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fourth Counter Number</label>
                                <input type="text" name="fourth_counter_number"
                                    value="{{ @$aboutUs->fourth_counter_number }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control summernote">{!! @$aboutUs->description !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('admin-js')
    <!-- Summernote js-->
    <script src="{{ asset('admin/assets/modules/summernote/summernote-bs4.js') }}"></script>
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
                'background-image': 'url({{ asset(@$aboutUs->image) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
