@extends('layout.admin')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow">

                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Edit Product</h3>
                </div>

                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">

                        <ul class="mb-0">
                            @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                            @endforeach
                        </ul>

                    </div>
                    @endif

                    <form action="{{ url('/admin/products/update/'.$product->id) }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Product Name</label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name', $product->name) }}"
                                required>
                        </div>

                        <div class="mb-3">

                            <label class="form-label">Description</label>

                            <textarea
                                name="description"
                                rows="5"
                                class="form-control"
                                required>{{ old('description', $product->description) }}</textarea>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>

                            <select name="category_id" class="form-control" required>
                                <option value="">Select Category</option>

                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Price
                                    </label>

                                    <input
                                        type="number"
                                        step="0.01"
                                        name="price"
                                        class="form-control"
                                        value="{{ old('price', $product->price) }}"
                                        required>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label class="form-label">
                                        Stock
                                    </label>

                                    <input
                                        type="number"
                                        name="stock"
                                        class="form-control"
                                        value="{{ old('stock', $product->stock) }}"
                                        required>

                                </div>

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Product Image
                            </label>

                            <input
                                type="file"
                                name="image"
                                class="form-control">
                            @if($product->image)
                            <div class="mt-3">
                                <img src="{{ asset('storage/'.$product->image) }}"
                                    width="120"
                                    class="img-thumbnail">
                            </div>
                            @endif
                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Status
                            </label>

                            <select
                                name="status"
                                class="form-select">

                                <option value="1"
                                    {{ $product->status ? 'selected' : '' }}>
                                    Active
                                </option>

                                <option value="0"
                                    {{ !$product->status ? 'selected' : '' }}>
                                    Inactive
                                </option>

                            </select>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-success">

                            Update Product

                        </button>

                        <a href="{{ url('/admin/products') }}"
                            class="btn btn-secondary">

                            Back

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection