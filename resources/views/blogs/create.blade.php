@extends('layout.admin')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4">
        Add new blog
    </h1>

    <form action="{{ url('/blogs/store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Blog Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label  class="form-label"> Description</label>
            <textarea name="description" rows="6" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Blog Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary">
            Save Blog
        </button>

    </form>
</div>

@endsection