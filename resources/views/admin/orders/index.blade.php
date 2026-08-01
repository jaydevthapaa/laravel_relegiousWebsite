@extends('layout.admin')

@section('content')

<section class="py-5">
    <div class="container">
        <h2 class="mb-4">
            All Orders
        </h2>

        <form method="GET" action="{{ url('/admin/orders') }}" class="row g-3 mb-4">

            <div class="col-md-4">
                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search Order ID, Customer or Email"
                    value="{{ request('search') }}">
            </div>

            <div class="col-md-3">
                <select name="status" class="form-select">

                    <option value="">All Status</option>

                    <option value="Pending"
                        {{ request('status')=='Pending' ? 'selected' : '' }}>
                        Pending
                    </option>

                    <option value="Processing"
                        {{ request('status')=='Processing' ? 'selected' : '' }}>
                        Processing
                    </option>

                    <option value="Completed"
                        {{ request('status')=='Completed' ? 'selected' : '' }}>
                        Completed
                    </option>

                    <option value="Cancelled"
                        {{ request('status')=='Cancelled' ? 'selected' : '' }}>
                        Cancelled
                    </option>

                </select>
            </div>

            <div class="col-md-3">
                <select name="payment_method" class="form-select">

                    <option value="">All Payments</option>

                    <option value="Cash on Delivery"
                        {{ request('payment_method')=='Cash on Delivery' ? 'selected' : '' }}>
                        Cash on Delivery
                    </option>

                    <option value="Bank Transfer"
                        {{ request('payment_method')=='Bank Transfer' ? 'selected' : '' }}>
                        Bank Transfer
                    </option>

                    <option value="Cheque payments"
                        {{ request('payment_method')=='Cheque payments' ? 'selected' : '' }}>
                        Cheque payments
                    </option>

                </select>
            </div>

            <div class="col-md-2 d-grid">
                <button class="btn btn-primary">
                    Search
                </button>
            </div>

        </form>

        <div class="card shadow">

            <div class="card-body">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>#</th>

                            <th>Customer</th>

                            <th>Email</th>

                            <th>Total</th>

                            <th>Payment</th>

                            <th>Status</th>

                            <th>Date</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($orders as $order)

                        <tr>

                            <td>
                                {{ $order->id }}
                            </td>

                            <td>
                                {{ $order->first_name }}
                                {{ $order->last_name }}
                            </td>

                            <td>
                                {{ $order->email }}
                            </td>

                            <td>
                                Rs {{ number_format($order->total_amount,2) }}
                            </td>

                            <td>
                                {{ $order->payment_method }}
                            </td>

                            <td>

                                @if($order->status == 'Pending')

                                <span class="badge bg-warning text-dark">
                                    Pending
                                </span>

                                @elseif($order->status == 'Processing')

                                <span class="badge bg-primary">
                                    Processing
                                </span>

                                @elseif($order->status == 'Completed')

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
                                {{ $order->created_at->format('d M Y') }}
                            </td>

                            <td>

                                <a href="{{ url('/admin/orders/'.$order->id) }}"
                                    class="btn btn-sm btn-info">

                                    View

                                </a>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="8" class="text-center">

                                No Orders Found

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</section>

@endsection