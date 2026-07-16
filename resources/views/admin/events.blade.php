@extends('layout.admin')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show"
     id="successAlert"
     role="alert">

    {{ session('success') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"></button>

</div>
@endif

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Events</h2>

        <a href="{{ url('/admin/events/create') }}"
           class="btn btn-success">

            Add Event

        </a>

    </div>

    <!-- Search Form -->

    <form action="{{ url('/admin/events') }}"
          method="GET"
          class="mb-4">

        <div class="row">

            <div class="col-md-6">

                <input type="text"
                       name="search"
                       class="form-control"
                       placeholder="Search by title or location"
                       value="{{ request('search') }}">

            </div>

            <div class="col-md-2">

                <button type="submit"
                        class="btn btn-primary w-100">

                    Search

                </button>

            </div>

            <div class="col-md-2">

                <a href="{{ url('/admin/events') }}"
                   class="btn btn-secondary w-100">

                    Clear

                </a>

            </div>

        </div>

    </form>

    <!-- Events Table -->

    <table class="table table-bordered table-hover align-middle">

        <thead class="table-dark">

            <tr>

                <th width="100">Image</th>
                <th>Title</th>
                <th>Location</th>
                <th>Date</th>
                <th>Status</th>
                <th width="180">Action</th>

            </tr>

        </thead>

        <tbody>

        @forelse($events as $event)

            <tr>

                <td>

                    <img src="{{ asset('storage/'.$event->image) }}"
                         width="80"
                         class="img-thumbnail">

                </td>

                <td>{{ $event->title }}</td>

                <td>{{ $event->location }}</td>

                <td>

                    {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}

                </td>

                <td>

                    @if($event->status == 'Upcoming')

                        <span class="badge bg-primary">
                            Upcoming
                        </span>

                    @elseif($event->status == 'Completed')

                        <span class="badge bg-success">
                            Completed
                        </span>

                    @else

                        <span class="badge bg-danger">
                            Cancelled
                        </span>

                    @endif

                </td>

                <td>

                    <a href="{{ url('/admin/events/'.$event->id.'/edit') }}"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="{{ url('/admin/events/'.$event->id) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this event?')">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="6" class="text-center">

                    No events found.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

    <!-- Pagination -->

    <div class="d-flex justify-content-center mt-4">

        {{ $events->appends(request()->query())->links() }}

    </div>

</div>

<script>

setTimeout(function () {

    let alert = document.getElementById('successAlert');

    if (alert) {

        let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);

        bsAlert.close();

    }

}, 3000);

</script>

@endsection