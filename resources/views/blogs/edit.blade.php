@extends('layout.admin')

@section('content')

<div class="container mt-5">

    <h2>Edit Blog</h2>

    <form action="{{ url('/blogs/update/'.$blog->id) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">Blog Title</label>

            <input
                type="text"
                name="title"
                class="form-control"
                value="{{ $blog->title }}"
                required>
        </div>

        <div class="mb-3">

            <label>Description</label>

            <textarea
                name="description"
                rows="6"
                class="form-control"
                required>{{ $blog->description }}</textarea>

        </div>

        <div class="mb-3">

            <label>Current Image</label>

            <br>

            @if($blog->image)

            <img src="{{ asset('storage/'.$blog->image) }}"
                width="180">

            @endif

        </div>

        <div class="mb-3">

            <label>New Image</label>

            <input
                type="file"
                name="image"
                class="form-control">

        </div>

        <button class="btn btn-primary">
            Update Blog
        </button>

    </form>

</div>

@endsection