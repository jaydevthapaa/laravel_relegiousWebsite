@if(session('success'))
<div class="alert alert-warning alert-dismissible fade show"
     id="sucessAlert"
     role="alert">

    {{ session('success') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"></button>
</div>
@endif

<script>
	setTimeout(function(){
		let alert = document.getElementById('sucessAlert');

		if (alert){
			let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
			bsAlert.close();
		}
	}, 3000);
</script>

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
                <th>Action</th>
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

                <td>
                    <a href="{{ url('blogs/edit/'.$blog->id)}}" class="btn btn-warning btn-sm">Edit</a>

                    <a href="{{ url('/blogs/delete/'. $blog->id) }}" class="btn btn-danger btn-sm"
                    onclick="return confirm('Are you sure you want to delete this blog?')">Delete</a>
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection