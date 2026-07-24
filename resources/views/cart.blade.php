@extends('layout.app')
@section('content')

<div class="main_2">
	<section id="center" class="center_cart">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
						<div class="center_o1l">
							<h1 class="font_60 text-white">Shopping Cart</h1>
							<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="center_o1r text-end">
							<h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="{{url('/')}}">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran text-uppercase">Shopping Cart</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<section id="cart" class="p_4 pb-0">
	<div class="container-xl">
		<div class="cart_1 row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table align-middle">
						<tbody>

							<tr>
								<td class="fw-bold">Product</td>
								<td class="fw-bold">Quantity</td>
								<td class="fw-bold">Price</td>
								<td class="fw-bold">Total</td>
								<td class="fw-bold"></td>
							</tr>

							@php
							$subtotal = 0;
							@endphp

							@forelse($cart as $item)

							@php
							$total = $item['price'] * $item['quantity'];
							$subtotal += $total;
							@endphp

							<tr>

								<td>

									<img src="{{ asset('storage/'.$item['image']) }}"
										alt="{{ $item['name'] }}"
										class="float-start me-3"
										style="width:80px;height:80px;object-fit:cover;">

									<h5 class="fs-4 mt-3">
										{{ $item['name'] }}
									</h5>

								</td>

								<td>

									<div class="d-flex align-items-center">

										<form action="{{ url('/cart/decrease/'.$item['id']) }}" method="POST" class="me-2">
											@csrf
											<button class="btn btn-outline-secondary btn-sm">
												-
											</button>
										</form>

										<span class="mx-3 fw-bold">
											{{ $item['quantity'] }}
										</span>

										@if($item['quantity'] < $item['stock'])

											<form action="{{ url('/cart/increase/'.$item['id']) }}" method="POST">
											@csrf
											<button class="btn btn-outline-secondary btn-sm">
												+
											</button>
											</form>

											@else

											<button class="btn btn-outline-secondary btn-sm" disabled>
												+
											</button>

											@endif

									</div>

									<small class="text-muted d-block mt-2">
										Stock: {{ $item['stock'] }}
									</small>

									@if($item['stock'] == 0)

									<small class="text-danger d-block">
										Out of Stock
									</small>

									@elseif($item['stock'] <= 5)

										<small class="text-warning d-block">
										Only {{ $item['stock'] }} left
										</small>

										@endif

								</td>

								<td>

									<small class="text-muted">

										Rs {{ number_format($item['price'],2) }}

									</small>

								</td>

								<td>

									<strong>

										Rs {{ number_format($total,2) }}

									</strong>

								</td>

								<td>

									<form action="{{ url('/cart/remove/'.$item['id']) }}"
										method="POST"
										onsubmit="return confirm('Remove this product from cart?')">

										@csrf
										@method('DELETE')

										<button class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</button>

									</form>

								</td>

							</tr>

							@empty

							<tr>

								<td colspan="5">

									<div class="text-center py-5">

										<i class="fa fa-shopping-cart fa-4x text-muted mb-4"></i>

										<h3>Your cart is empty</h3>

										<p class="text-muted">

											Looks like you haven't added anything yet.

										</p>

										<a href="{{ url('/shop') }}" class="button_1">

											Continue Shopping

										</a>

									</div>

								</td>

							</tr>

							@endforelse

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="cart_2 row mt-3">
			<div class="col-md-6">
				<div class="cart_2l"></div>
			</div>
			<div class="col-md-6">
				<div class="cart_2r">
					<h6>

						Items

						<span class="float-end">

							{{ count($cart) }}

						</span>

					</h6>
					<h6 class="fw-bold">
						Subtotal:
						<span class="float-end text-muted">
							Rs {{ number_format($subtotal,2) }}
						</span>
					</h6>

					<h6 class="fw-bold mt-3">
						Estimated shipping:
						<span class="float-end text-muted">
							Rs 0.00
						</span>
					</h6>

					<h4 class="mt-3">
						Total:
						<span class="float-end">
							Rs {{ number_format($subtotal,2) }}
						</span>
					</h4>
					<hr>
					<div class="cart_2ri row">
						<div class="col-md-6">
							<div class="cart_2ril">
								<h6 class="mb-0 fw-bold mt-3"><a href="{{ url('/shop') }}" class="button">Continue Shopping</a></h6>
							</div>
						</div>
						<div class="col-md-6">
							<div class="cart_2rir text-end">
								<h6 class="mb-0">@if(count($cart))

									<a class="button_1" href="{{ url('/checkout') }}">
										Checkout
									</a>

									@else

									<button class="button_1 border-0" disabled>
										Checkout
									</button>

									@endif
								</h6>
							</div>
						</div>
					</div>
					<hr class="mb-0">
				</div>
			</div>
		</div>
	</div>
</section>

@endsection