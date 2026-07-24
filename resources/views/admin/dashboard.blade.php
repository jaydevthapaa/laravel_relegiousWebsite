@extends('layout.admin')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Admin Dashboard</h2>

    <!-- Dashboard Cards -->
    <div class="row">

        <!-- Total Contacts -->
        <div class="col-md-4 mb-3">
            <a href="{{ url('/admin/contacts') }}" class="text-decoration-none">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-envelope fa-2x text-primary mb-3"></i>

                        <h5 class="text-dark">Total Contacts</h5>

                        <h2 class="fw-bold text-primary">
                            {{ $totalContacts }}
                        </h2>
                    </div>
                </div>
            </a>
        </div>

        <!-- Unread Messages -->
        <div class="col-md-4 mb-3">
            <a href="{{ url('/admin/contacts?status=Unread') }}" class="text-decoration-none">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-envelope-open-text fa-2x text-danger mb-3"></i>

                        <h5 class="text-dark">Unread Messages</h5>

                        <h2 class="fw-bold text-danger">
                            {{ $unreadContacts }}
                        </h2>
                    </div>
                </div>
            </a>
        </div>

        <!-- Read Messages -->
        <div class="col-md-4 mb-3">
            <a href="{{ url('/admin/contacts?status=Read') }}" class="text-decoration-none">
                <div class="card shadow border-0 h-100">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-check-circle fa-2x text-success mb-3"></i>

                        <h5 class="text-dark">Read Messages</h5>

                        <h2 class="fw-bold text-success">
                            {{ $readContacts }}
                        </h2>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <!-- Recent Messages -->
    <div class="card shadow mt-4">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Recent Messages</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($recentContacts as $contact)

                    <tr>

                        <td>{{ $contact->name }}</td>

                        <td>{{ $contact->email }}</td>

                        <td>
                            @if($contact->status == 'Unread')

                            <span class="badge bg-danger">
                                Unread
                            </span>

                            @else

                            <span class="badge bg-success">
                                Read
                            </span>

                            @endif
                        </td>

                        <td>{{ $contact->created_at->diffForHumans() }}</td>

                        <td>
                            <a href="{{ url('/admin/contacts/'.$contact->id) }}"
                                class="btn btn-primary btn-sm">
                                View
                            </a>
                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" class="text-center">
                            No recent messages found.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection