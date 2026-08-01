@extends('layout.admin')

@section('content')

<div class="container mt-4">

    <h2>Edit About</h2>

    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control"
                value="{{ $about->title ?? '' }}">

            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Subtitle</label>
            <input type="text" name="subtitle" class="form-control"
                value="{{ $about->subtitle ?? '' }}">

            @error('subtitle')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5">{{ $about->description ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label>Mission</label>
            <input type="text" name="mission" class="form-control"
                value="{{ $about->mission ?? '' }}">

            @error('mission')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Vision</label>
            <input type="text" name="vision" class="form-control"
                value="{{ $about->vision ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button class="btn btn-primary">
            Update About
        </button>

    </form>

</div>

@endsection