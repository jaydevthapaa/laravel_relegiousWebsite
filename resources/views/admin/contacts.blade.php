@extends('layout.admin')

@section('content')
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


<div class="container mt-5">

    <h2 class="mb-4">Contact Messages</h2>

    <form action="{{ url('/admin/contacts') }}" method="GET" class="mb-4">
    <div class="row">

        <div class="col-md-6">
            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Search by name or email"
                value="{{ request('search') }}">
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">
                Search
            </button>
        </div>

        <div class="col-md-2">
            <a href="{{ url('/admin/contacts') }}" class="btn btn-secondary w-100">
                Clear
            </a>
        </div>

    </div>
</form>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Service</th>
                <th>Message</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @forelse($contacts as $contact)

                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->service }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                @if($contact->is_read)
                    <span class="badge bg-success">Read</span>
                @else
                    <span class="badge bg-danger">Unread</span>
                @endif
            </td>
                    <td>
                        <a href="{{ url('/admin/contacts/' . $contact->id) }}"
                           class="btn btn-primary btn-sm">
                            View
                        </a>

                        <form action="{{ url('admin/contacts/' .$contact->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm
                            type="submit"
                                onclick="return confirm('Are you sure you want to delete this message?')">
                                Delete
                            </button>

                        </form>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="8" class="text-center">
                        No messages found.
                    </td>
                </tr>

            @endforelse
            



        </tbody>

    </table>

    <div class="mt-3">
        {{ $contacts->links()}}
    </div>
    <div class="mt-4 d-flex justify-content-center">
    {{ $contacts->links() }}
    </div>
</div>
@endsection