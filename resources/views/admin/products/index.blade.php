@extends('layout.admin')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-4">

        <h2>Products</h2>

        <a href="{{ url('/admin/products/create') }}"
            class="btn btn-primary">

            Add Product

        </a>

    </div>

    <table class="table table-bordered table-striped">

        <thead>

            <tr>

                <th>ID</th>

                <th>Image</th>

                <th>Name</th>

                <th>Price</th>

                <th>Stock</th>

                <th>Status</th>

                <th width="220">Action</th>

            </tr>

        </thead>

        <tbody>

            @forelse($products as $product)

            <tr>

                <td>{{ $product->id }}</td>

                <td>

                    @if($product->image)

                    <img src="{{ asset('storage/'.$product->image) }}"
                        width="70">

                    @endif

                </td>

                <td>{{ $product->name }}</td>

                <td>Rs{{ number_format($product->price,2) }}</td>

                <td>{{ $product->stock }}</td>

                <td>

                    @if($product->status)

                    <span class="badge bg-success">

                        Active

                    </span>

                    @else

                    <span class="badge bg-danger">

                        Inactive

                    </span>

                    @endif

                </td>

                <td>

                    <a href="{{ url('/admin/products/edit/'.$product->id ) }}"
                        class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="{{ url('/admin/products/delete/'.$product->id) }}"
                        method="POST"
                        class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Delete this product?')"
                            class="btn btn-danger btn-sm">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="7" class="text-center">

                    No Products Found

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection