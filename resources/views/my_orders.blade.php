@extends('layout.app')

@section('content')

<section class="py-5">
    <div class="container">

        <h2 class="mb-4">My Orders</h2>

        @if($orders->count())

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th></th>
                </tr>

            </thead>

            <tbody>

                @foreach($orders as $order)

                <tr>

                    <td>#{{ $order->id }}</td>

                    <td>{{ $order->created_at->format('d M Y') }}</td>

                    <td>
                        Rs {{ number_format($order->total_amount,2) }}
                    </td>

                    <td>

                        <span class="badge
                            @if($order->status == 'Pending') bg-warning
                            @elseif($order->status == 'Processing') bg-primary
                            @elseif($order->status == 'Completed') bg-success
                            @elseif($order->status == 'Cancelled') bg-danger
                            @endif">
                            {{ $order->status }}
                        </span>

                    </td>

                    <td>

                        <a href="{{ route('orders.show',$order) }}"
                            class="btn btn-primary btn-sm">

                            View

                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

        @else

        <div class="alert alert-info">

            You haven't placed any orders yet.

        </div>

        @endif

    </div>
</section>

@endsection