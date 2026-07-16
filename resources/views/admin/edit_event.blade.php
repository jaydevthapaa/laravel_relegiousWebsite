@extends('layout.admin')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Edit Event</h2>

    <form action="{{ url('/admin/events/'.$event->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <!-- Event Title -->
        <div class="mb-3">
            <label class="form-label">Event Title</label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ old('title', $event->title) }}">

            @error('title')
                <div class="alert alert-danger alert-dismissible fade show mt-2 validation-alert">
                    {{ $message }}
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"></button>
                </div>
            @enderror
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label">Description</label>

            <textarea name="description"
                      rows="5"
                      class="form-control">{{ old('description', $event->description) }}</textarea>

            @error('description')
                <div class="alert alert-danger alert-dismissible fade show mt-2 validation-alert">
                    {{ $message }}
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"></button>
                </div>
            @enderror
        </div>

        <!-- Location -->
        <div class="mb-3">
            <label class="form-label">Location</label>

            <input type="text"
                   name="location"
                   class="form-control"
                   value="{{ old('location', $event->location) }}">

            @error('location')
                <div class="alert alert-danger alert-dismissible fade show mt-2 validation-alert">
                    {{ $message }}
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"></button>
                </div>
            @enderror
        </div>

        <div class="row">

            <!-- Event Date -->
            <div class="col-md-4">

                <label class="form-label">Event Date</label>

                <input type="date"
                       name="event_date"
                       class="form-control"
                       min="{{ date('Y-m-d') }}"
                       value="{{ old('event_date', $event->event_date) }}">

                @error('event_date')
                    <div class="alert alert-danger alert-dismissible fade show mt-2 validation-alert">
                        {{ $message }}
                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"></button>
                    </div>
                @enderror

            </div>

            <!-- Start Time -->
            <div class="col-md-4">

                <label class="form-label">Start Time</label>

                <input type="time"
                       name="start_time"
                       class="form-control"
                       value="{{ old('start_time', $event->start_time) }}">

                @error('start_time')
                    <div class="alert alert-danger alert-dismissible fade show mt-2 validation-alert">
                        {{ $message }}
                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"></button>
                    </div>
                @enderror

            </div>

            <!-- End Time -->
            <div class="col-md-4">

                <label class="form-label">End Time</label>

                <input type="time"
                       name="end_time"
                       class="form-control"
                       value="{{ old('end_time', $event->end_time) }}">

                @error('end_time')
                    <div class="alert alert-danger alert-dismissible fade show mt-2 validation-alert">
                        {{ $message }}
                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"></button>
                    </div>
                @enderror

            </div>

        </div>

        <!-- Event Image -->
        <div class="mt-4">

            <label class="form-label">Event Image</label>

            <input type="file"
                   name="image"
                   class="form-control">

            @error('image')
                <div class="alert alert-danger alert-dismissible fade show mt-2 validation-alert">
                    {{ $message }}
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"></button>
                </div>
            @enderror

            @if($event->image)

                <div class="mt-3">

                    <p><strong>Current Image:</strong></p>

                    <img src="{{ asset('storage/'.$event->image) }}"
                         width="200"
                         class="img-thumbnail">

                </div>

            @endif

        </div>

        <div class="mt-4">

            <button type="submit" class="btn btn-primary">
                Update Event
            </button>

            <a href="{{ url('/admin/events') }}"
               class="btn btn-secondary">
                Cancel
            </a>

        </div>

    </form>

</div>

<script>

setTimeout(function () {

    document.querySelectorAll('.validation-alert').forEach(function(alert){

        let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);

        bsAlert.close();

    });

}, 5000);

</script>

@endsection