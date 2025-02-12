@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Add New Content</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.contents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Page Name:</label>
                <input type="text" name="page" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Section:</label>
                <input type="text" name="section" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Title:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label>Body:</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Image:</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label>Publish:</label>
                <input type="checkbox" name="is_published" value="1" checked>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
