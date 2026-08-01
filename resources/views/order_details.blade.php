@extends('layout.app')

@section('content')

<section class="py-5">
    <div class="container">

        <h2 class="mb-4">
            Order #{{ $order->id }}
        </h2>

        <div class="card shadow mb-4">

            <div class="card-header">
                <strong>Order Information</strong>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">

                        <p><strong>Name:</strong>
                            {{ $order->first_name }}
                            {{ $order->last_name }}
                        </p>

                        <p><strong>Email:</strong>
                            {{ $order->email }}
                        </p>

                        <p><strong>Phone:</strong>
                            {{ $order->phone }}
                        </p>

                    </div>

                    <div class="col-md-6">

                        <p>
                            <strong>Status:</strong>

                            <span class="badge
                             @if($order->status == 'Pending') bg-warning
                                @elseif($order->status == 'Processing') bg-primary
                                @elseif($order->status == 'Completed') bg-success
                                @elseif($order->status == 'Cancelled') bg-danger
                                @endif">
                                {{ $order->status }}
                            </span>

                        </p>

                        <p>
                            <strong>Payment:</strong>
                            {{ $order->payment_method }}
                        </p>

                        <p>
                            <strong>Total:</strong>
                            Rs {{ number_format($order->total_amount,2) }}
                        </p>

                        <p>
                            <strong>Date:</strong>
                            {{ $order->created_at->format('d M Y h:i A') }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="card shadow">

            <div class="card-header">

                <strong>Products</strong>

            </div>

            <div class="card-body">

                <table class="table">

                    <thead>

                        <tr>

                            <th>Product</th>

                            <th>Price</th>

                            <th>Quantity</th>

                            <th>Subtotal</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($order->orderItems as $item)

                        <tr>

                            <td>

                                @if($item->product)

                                <img
                                    src="{{ asset('storage/'.$item->product->image) }}"
                                    width="70"
                                    class="me-2">

                                @endif

                                {{ $item->product_name }}

                            </td>

                            <td>

                                Rs {{ number_format($item->price,2) }}

                            </td>

                            <td>

                                {{ $item->quantity }}

                            </td>

                            <td>

                                Rs {{ number_format($item->subtotal,2) }}

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>
            @if($order->status == 'Pending')

            <form action="{{ route('orders.cancel', $order->id) }}"
                method="POST"
                onsubmit="return confirm('Are you sure you want to cancel this order?');">

                @csrf

                <button class="btn btn-danger">
                    Cancel Order
                </button>

            </form>

            @endif

        </div>

        <a href="{{ route('orders.index') }}"
            class="btn btn-primary mt-4">

            ← Back to My Orders

        </a>

    </div>
</section>

@endsection