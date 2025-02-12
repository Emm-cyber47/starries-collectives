@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Edit Content</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contents.update', $content->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Page Name:</label>
                <input type="text" name="page" class="form-control" value="{{ $content->page }}" required>
            </div>
            <div class="mb-3">
                <label>Section:</label>
                <input type="text" name="section" class="form-control" value="{{ $content->section }}" required>
            </div>
            <div class="mb-3">
                <label>Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $content->title }}">
            </div>
            <div class="mb-3">
                <label>Body:</label>
                <textarea name="body" class="form-control">{{ $content->body }}</textarea>
            </div>
            <div class="mb-3">
                <label>Image:</label>
                <input type="file" name="image" class="form-control">
                @if($content->image)
                    <img src="{{ asset('storage/' . $content->image) }}" width="100" class="mt-2">
                @endif
            </div>
            <div class="mb-3">
                <label>Publish:</label>
                <input type="checkbox" name="is_published" value="1" {{ $content->is_published ? 'checked' : '' }}>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
