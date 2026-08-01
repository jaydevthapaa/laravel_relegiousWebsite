@extends('layout.app')

@section('content')

<section class="py-5">
    <div class="container">

        <h2 class="mb-4">
            Order #{{ $order->id }}
        </h2>


        {{-- Customer Details --}}
        <div class="card shadow mb-4">

            <div class="card-header">
                <strong>Customer Details</strong>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">

                        <p><strong>Name:</strong>
                            {{ $order->first_name }} {{ $order->last_name }}
                        </p>

                        <p><strong>Email:</strong>
                            {{ $order->email }}
                        </p>

                        <p><strong>Phone:</strong>
                            {{ $order->phone }}
                        </p>

                    </div>

                    <div class="col-md-6">

                        <p><strong>Country:</strong>
                            {{ $order->country }}
                        </p>

                        <p><strong>City:</strong>
                            {{ $order->city }}
                        </p>

                        <p><strong>State:</strong>
                            {{ $order->state }}
                        </p>

                        <p><strong>Street:</strong>
                            {{ $order->street }}
                        </p>

                        <p><strong>Postcode:</strong>
                            {{ $order->postcode }}
                        </p>

                    </div>

                </div>

                @if($order->notes)

                    <hr>

                    <strong>Notes:</strong>

                    <p>{{ $order->notes }}</p>

                @endif

            </div>

        </div>

        {{-- Ordered Products --}}
        <div class="card shadow mb-4">

            <div class="card-header">
                <strong>Ordered Products</strong>
            </div>

            <div class="card-body">

                <table class="table table-bordered">

                    <thead>

                        <tr>

                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($order->orderItems as $item)

                        <tr>

                            <td width="90">

                                @if($item->product)

                                    <img src="{{ asset('storage/'.$item->product->image) }}"
                                         width="70">

                                @endif

                            </td>

                            <td>

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

        </div>

        {{-- Order Summary --}}
        <div class="card shadow">

            <div class="card-header">

                <strong>Order Summary</strong>

            </div>

            <div class="card-body">

                <p>

                    <strong>Payment Method:</strong>

                    {{ $order->payment_method }}

                </p>

                <p>

                    <strong>Total Amount:</strong>

                    Rs {{ number_format($order->total_amount,2) }}

                </p>

                <form method="POST"
                      action="{{ url('/admin/orders/'.$order->id) }}">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label class="form-label">
                            Order Status
                        </label>

                        <select name="status" class="form-control">

                            <option value="Pending"
                                {{ $order->status=='Pending'?'selected':'' }}>
                                Pending
                            </option>

                            <option value="Processing"
                                {{ $order->status=='Processing'?'selected':'' }}>
                                Processing
                            </option>

                            <option value="Completed"
                                {{ $order->status=='Completed'?'selected':'' }}>
                                Completed
                            </option>

                            <option value="Cancelled"
                                {{ $order->status=='Cancelled'?'selected':'' }}>
                                Cancelled
                            </option>

                        </select>

                    </div>

                    <button class="btn btn-success">

                        Update Status

                    </button>

                    <a href="{{ url('/admin/orders') }}"
                       class="btn btn-secondary">

                        Back

                    </a>

                </form>

            </div>

        </div>

    </div>
</section>

@endsection