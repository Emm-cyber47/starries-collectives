@extends('layout.admin')

@section('content')
    <div class="container">
        <h2>Manage Content</h2>
       <a href="{{ route('contents.create') }}" class="btn btn-primary mb-3">Add New Content</a>


        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Page</th>
                    <th>Section</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                    <tr>
                        <td>{{ $content->id }}</td>
                        <td>{{ $content->page }}</td>
                        <td>{{ $content->section }}</td>
                        <td>{{ $content->title }}</td>
                        <td>
                            <a href="{{ route('admin.contents.edit', $content->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.contents.destroy', $content->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
