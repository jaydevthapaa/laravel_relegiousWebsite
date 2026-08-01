@extends('layout.admin')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h3 class="mb-0">

                Edit Blog Category

            </h3>

        </div>

        <div class="card-body">

            <form action="{{ route('blog-categories.update',$blogCategory->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">

                        Category Name

                    </label>

                    <input type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name',$blogCategory->name) }}">

                    @error('name')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                    @enderror

                </div>

                <button class="btn btn-success">

                    Update Category

                </button>

                <a href="{{ route('blog-categories.index') }}"
                    class="btn btn-secondary">

                    Cancel

                </a>

            </form>

        </div>

    </div>

</div>

@endsection