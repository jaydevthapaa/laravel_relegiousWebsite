@extends('layout.admin')

@section('content')

<div class="container mt-5">

    <h2>Contact Details</h2>

    <div class="card mt-4">
        <div class="card-body">

            <h5>Name</h5>
            <p>{{ $contact->name }}</p>

            <h5>Email</h5>
            <p>{{ $contact->email }}</p>

            <h5>Phone</h5>
            <p>{{ $contact->phone }}</p>

            <h5>Service</h5>
            <p>{{ $contact->service }}</p>

            <h5>Message</h5>
            <p>{{ $contact->message }}</p>

            <h5>Submitted At</h5>
            <p>{{ $contact->created_at }}</p>

            <a href="{{ url('/admin/contacts') }}" class="btn btn-secondary">
                Back
            </a>

        </div>
    </div>

</div>

@endsection