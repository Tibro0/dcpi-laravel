@extends('admin.layouts.master')

@push('admin-css')
    <title>Admin | Social link</title>
@endpush

@section('admin-content')
    <section class="section">
        <div class="section-header">
            <h1>Create Social link</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Social link</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.social-link.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Icon</label>
                        <input type="text" name="icon" value="{{ old('icon') }}" class="form-control">
                        <code><a href="https://themebubble.com/demo/admint/ui-kits/themify-icons.html" target="_blank" class="text-danger">Themify Icon</a></code>
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" name="url" value="{{ old('url') }}" class="form-control">
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
