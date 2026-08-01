@extends('layout.admin')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-4">

        <h2>Blog Categories</h2>

        <a href="{{ route('blog-categories.create') }}"
            class="btn btn-primary">

            Add Category

        </a>

    </div>


    <table class="table table-bordered table-striped">

        <thead>

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Slug</th>

                <th>Total Blogs</th>

                <th width="220">Action</th>

            </tr>

        </thead>

        <tbody>

            @forelse($categories as $category)

            <tr>

                <td>{{ $category->id }}</td>

                <td>{{ $category->name }}</td>

                <td>{{ $category->slug }}</td>

                <td>{{ $category->blogs_count }}</td>

                <td>

                    <a href="{{ route('blog-categories.edit',$category->id) }}"
                        class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="{{ route('blog-categories.destroy',$category->id) }}"
                        method="POST"
                        class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Delete this category?')"
                            class="btn btn-danger btn-sm">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="5" class="text-center">

                    No Categories Found

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

    {{ $categories->links() }}

</div>

@endsection