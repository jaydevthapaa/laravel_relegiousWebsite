@extends('layout.app')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="card shadow">

            <div class="card-body text-center">

                <i class="fa fa-check-circle text-success"
                   style="font-size:80px;"></i>

                <h2 class="mt-3">
                    Order Placed Successfully
                </h2>

                <p class="text-muted">
                    Thank you for your purchase.
                </p>

                <hr>

                <div class="row text-start mt-4">

                    <div class="col-md-6">

                        <p>
                            <strong>Order ID:</strong>
                            #{{ $order->id }}
                        </p>

                        <p>
                            <strong>Name:</strong>
                            {{ $order->first_name }}
                            {{ $order->last_name }}
                        </p>

                        <p>
                            <strong>Email:</strong>
                            {{ $order->email }}
                        </p>

                        <p>
                            <strong>Phone:</strong>
                            {{ $order->phone }}
                        </p>

                    </div>

                    <div class="col-md-6">

                        <p>
                            <strong>Payment Method:</strong>
                            {{ $order->payment_method }}
                        </p>

                        <p>
                            <strong>Status:</strong>

                            <span class="badge bg-warning">
                                {{ $order->status }}
                            </span>

                        </p>

                        <p>
                            <strong>Total:</strong>

                            Rs
                            {{ number_format($order->total_amount,2) }}

                        </p>

                        <p>
                            <strong>Ordered At:</strong>

                            {{ $order->created_at->format('d M Y h:i A') }}

                        </p>

                    </div>

                </div>

                <hr>

                <a href="{{ url('/shop') }}"
                   class="btn btn-primary">

                    Continue Shopping

                </a>

            </div>

        </div>

    </div>
</section>

@endsection