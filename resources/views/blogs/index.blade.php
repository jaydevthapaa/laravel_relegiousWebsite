@extends('layout.admin')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">
        <h2>All Blogs</h2>

        <a href="{{ url('/blogs/create') }}" class="btn btn-primary">
            Add Blog
        </a>
    </div>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>

            @foreach($blogs as $blog)

            <tr>

                <td>{{ $blog->id }}</td>

                <td>
                    @if($blog->image)
                        <img src="{{ asset('storage/'.$blog->image) }}" width="100">
                    @endif
                </td>

                <td>{{ $blog->title }}</td>

                <td>{{ $blog->description }}</td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection