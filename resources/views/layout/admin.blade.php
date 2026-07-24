<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admin/contacts') }}">
                Admin Dashboard
            </a>
        </div>
    </nav>

    <div class="container mt-4">

        {{-- Success Message --}}
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show"
            id="successAlert"
            role="alert">

            {{ session('success') }}

            <button type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>

        </div>
        @endif

        {{-- Warning Message --}}
        @if(session('warning'))
        <div class="alert alert-warning alert-dismissible fade show"
            id="warningAlert"
            role="alert">

            {{ session('warning') }}

            <button type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>

        </div>
        @endif

        {{-- Error Message --}}
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show"
            id="errorAlert"
            role="alert">

            {{ session('error') }}

            <button type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>

        </div>
        @endif

        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        setTimeout(function() {

            ['successAlert', 'warningAlert', 'errorAlert'].forEach(function(id) {

                let alert = document.getElementById(id);

                if (alert) {
                    bootstrap.Alert.getOrCreateInstance(alert).close();
                }

            });

        }, 3000);
    </script>

</body>

</html>