@extends('layout.app')
@section('content')
<div class="main_2">
	<section id="center" class="center_check">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
						<div class="center_o1l">
							<h1 class="font_60 text-white">Checkout</h1>
							<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="center_o1r text-end">
							<h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="{{url('/')}}">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran text-uppercase">Checkout</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>


<section id="checkout" class="p_4 pb-0">
	<div class="container-xl">
		<div class="checkout_1 row">
			<div class="col-md-8">
				<div class="checkout_1l shadow_box bg-white p-4">
					<div class="checkout_1l1">
						<h4 class="mb-4">Billing Details</h4>
					</div>
					<form action="{{ url('/checkout/place-order') }}" method="POST">
						@csrf
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul class="mb-0">
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<div class="checkout_1l2">
							<div class="checkout_1l2i row">
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="First Name"
											name="first_name"
											value="{{ old('first_name') }}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="Last Name"
											name="last_name"
											value="{{ old('last_name') }}">
									</div>
								</div>
							</div>
							<div class="checkout_1l2i row mt-4">
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="Country"
											name="country"
											value="{{ old('country') }}">
									</div>
								</div>
							</div>
							<div class="checkout_1l2i row mt-4">
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="City"
											name="city"
											value="{{ old('city') }}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="State / Province"
											name="state"
											value="{{ old('state') }}">
									</div>
								</div>
							</div>
							<div class="checkout_1l2i row mt-4">
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="Street"
											name="street"
											value="{{ old('street') }}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="Postcode"
											name="postcode"
											value="{{ old('postcode') }}">
									</div>
								</div>
							</div>
							<div class="checkout_1l2i row mt-4">
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="Phone"
											name="phone"
											value="{{ old('phone') }}"
											type="tel">

									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout_1l2il">
										<input class="form-control font_14 border-0 bg_light"
											placeholder="Email"
											name="email"
											value="{{ old('email') }}"
											type="email">
									</div>
								</div>
							</div>
						</div>
						<div class="checkout_1l1 mt-4">
							<h4 class="mb-4">Additional Information</h4>
						</div>
						<div class="checkout_1l2">
							<div class="checkout_1l2i row">
								<div class="col-md-12">
									<div class="checkout_1l2il">
										<textarea placeholder="Other Notes"
											class="form-control font_14 form_text border-0 bg_light"
											name="notes">{{ old('notes') }}</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="checkout_1l1 mt-4">
							<h4 class="mb-4">Payment Method</h4>

							<div class="form-check">
								<input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault2" checked="" value="Bank Transfer">
								<label class="form-check-label" for="flexRadioDefault2">
									Direct bank transfer
								</label>
							</div>
							<div class="form-check mt-3">
								<input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault1" value="Check Payment">
								<label class="form-check-label" for="flexRadioDefault1">
									Check payments
								</label>
							</div>
							<div class="form-check mt-3">
								<input class="form-check-input" type="radio" name="payment_method" id="flexRadioDefault3" value="Cash on Delivery">
								<label class="form-check-label" for="flexRadioDefault3">
									Cash on delivery
								</label>
							</div>
							<button type="submit" class="button_1 border-0">
								Place Order
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<ul class="drop_cart">
					<li>

						<div class="drop_1i row">
							<div class="col-md-6">
								<h5>{{ count($cart) }} ITEM(S)</h5>
							</div>

							<div class="col-md-6 text-end">
								<h5>
									<a href="{{ url('/cart') }}">VIEW CART</a>
								</h5>
							</div>
						</div>

						@foreach($cart as $item)

						<div class="drop_1i1 row">

							<div class="col-md-6">

								<h6>
									{{ $item['name'] }}
									<br>

									<span>
										{{ $item['quantity'] }} × Rs {{ number_format($item['price'],2) }}
									</span>
								</h6>

							</div>

							<div class="col-md-4">

								<img
									src="{{ asset('storage/'.$item['image']) }}"
									class="w-100"
									style="height:60px;object-fit:cover;">

							</div>

						</div>

						@endforeach

						<div class="drop_1i2 row">

							<div class="col-md-6">
								<h5>Total</h5>
							</div>

							<div class="col-md-6 text-end">
								<h5 class="col_oran">
									Rs {{ number_format($subtotal,2) }}
								</h5>
							</div>

						</div>

					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

@endsection