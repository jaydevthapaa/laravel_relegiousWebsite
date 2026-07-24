@extends('layout.app')
@section('content')

<div class="main_2">
	<section id="center" class="center_shopdt">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
						<div class="center_o1l">
							<h1 class="font_60 text-white">Product Detail</h1>
							<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="center_o1r text-end">
							<h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="{{url('/')}}">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">PRODUCT DETAIL</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<section id="shop_dt" class="p_4 pb-0">
	<div class="container-xl">
		<div class="shop_pg1 row">
			<div class="col-md-8">
				<div class="shop_pgdt">
					<div class="shop_1dt1">
						<div class="shop_1dt1i row">
							<div class="col-md-6">
								<div class="shop_1dt1il">
									<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item">
												<img src="{{ asset('storage/'.$product->image) }}"
													class="d-block w-100"
													alt="{{ $product->name }}">

											</div>
											<div class="carousel-item active">
												<img src="{{ asset('storage/'.$product->image) }}"
													class="d-block w-100"
													alt="{{ $product->name }}">

											</div>
											<div class="carousel-item">
												<img src="{{ asset('storage/'.$product->image) }}"
													class="d-block w-100"
													alt="{{ $product->name }}">

											</div>
										</div>
										<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="shop_1dt1ir">
									<h6 class="bg_oran font_14 p-1 px-2 text-white d-inline-block">IN STOCK</h6>
									<h2 class="mt-2">{{ $product->name }}</h2>
									<h6 class="mt-2">
										<span class="font_12 text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
										(1 customer review)
									</h6>
									<h4 class="col_oran mt-3">Rs{{ number_format($product->price,2)}}</h4>
									<p class="mt-3">{{ $product -> description }}</p>
									<form action="{{ url('/cart/add/'.$product->id) }}" method="POST">

										@csrf

										<input
											type="number"
											name="quantity"
											min="1"
											value="1"
											class="form-control float-start me-3 rounded-0"
											style="width:80px;height:52px;">

										<button type="submit" class="button_1 border-0">
											ADD TO CART
										</button>

									</form>
									<h6 class="mt-4"><a href="#"><i class="fa fa-heart me-1 align-middle col_oran"></i> Add To Wishlist</a>
										<a class="ms-3" href="#"><i class="fa fa-recycle me-1 align-middle col_oran"></i> Compare</a>
									</h6>
									<h6 class="mt-4"><span class="fw-bold text-muted">Sku:</span> <a href="#">Product-{{ $product->id }}</a></h6>
									<h6 class="mt-3 mb-3"><span class="fw-bold text-muted">Tags: </span> <a href="#">Candle</a>, <a href="#">Holder</a>, <a href="#">Stand</a></h6>
									<h6 class="mb-0"><span class="fw-bold text-muted">Category: </span> <a href="#">{{ $product->category?->name }}</a></h6>
									<div class="shop_1dt1irn row mt-4">
										<div class="col-md-6 col-6">
											<div class="shop_1dt1irnl">
												<h5 class="mb-3">Share</h5>
												<ul class="mb-0">
													<li class="d-inline-block"><a class="text-muted a_tag" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
													<li class="d-inline-block ms-1"><a class="text-muted a_tag" href="#"><i class="fa-brands fa-instagram"></i></a></li>
													<li class="d-inline-block ms-1"><a class="text-muted a_tag" href="#"><i class="fa-brands fa-pinterest"></i></a></li>
													<li class="d-inline-block ms-1"><a class="text-muted a_tag" href="#"><i class="fa-brands fa-linkedin"></i></a></li>
													<li class="d-inline-block ms-1"><a class="text-muted a_tag" href="#"><i class="fa-brands fa-twitter"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-6">
											<div class="shop_1dt1irnr text-end pt-4">
												<ul class="mb-0">
													<li class="d-inline-block"><a class="d-block text-center" href="#"><i class="fa fa-bar-chart"></i></a></li>
													<li class="d-inline-block ms-1"><a class="d-block text-center" href="#"><i class="fa fa-heart"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="shop_1dt2 mt-4">
						<ul class="nav nav-tabs mb-0">
							<li class="nav-item d-inline-block me-2">
								<a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
									<span class="d-md-block">Description</span>
								</a>
							</li>
							<li class="nav-item d-inline-block me-2">
								<a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
									<span class="d-md-block">Additional Information</span>
								</a>
							</li>
							<li class="nav-item d-inline-block">
								<a href="#profile2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
									<span class="d-md-block">Reviews (1)</span>
								</a>
							</li>
						</ul>
						<div class="tab-content border_1 border-top-0 p-4">
							<div class="tab-pane active" id="home">
								<div class="homei">
									<h4>Description</h4>
									<p class="mt-3">{{$product -> description}}</p>
								</div>
							</div>
							<div class="tab-pane" id="profile1">
								<div class="profile1i">
									<h4 class="mb-3">Additional Information</h4>
									<div class="table-responsive">
										<table class="table mb-0">
											<tbody>
												<tr>
													<th scope="row">Material</th>
													<td>
														Plastic, Stainless Steel, Wood</td>
												</tr>
												<tr>
													<th scope="row">Color</th>
													<td>Blue, Green, Red, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="profile2">
								<div class="profile2i">
									<h4 class="mb-3">1 Review</h4>
									<div class="profile1i1 row">
										<div class="col-md-2">
											<div class="profile1i1l text-center">
												<span class="col_oran font_80"><i class="fa fa-user"></i></span>
											</div>
										</div>
										<div class="col-md-10">
											<div class="profile1i1r border_1 p-4">
												<h6>
													<span class="fw-bold fs-4">Lorem <span class="font_14 text-muted fw-normal">/</span> </span>December 4, 2018
													<span class="font_12 text-warning float-end mt-1">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</span>
												</h6>
												<p class="mb-0">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante
													Very good product and amazing quality.</p>
											</div>
										</div>
									</div>
									<h4 class="mt-4">Add a Review</h4>
									<p>Your email address will not be published. Required fields are marked *</p>
									<h6>Your rating*</h6>
									<span class="font_12 text-warning">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>
									<textarea placeholder="Write Review*" class="form-control form_text  mt-3"></textarea>
									<input class="form-control mt-3 " placeholder="Name*" type="text">
									<input class="form-control mt-3" placeholder="Email*" type="text">
									<div class="form-check mt-3 font_14">
										<input class="form-check-input" type="checkbox" value="">
										<label class="form-check-label" for="flexCheckDefault">
											Save my name, email, and website in this browser for the next time I comment.
										</label>
									</div>
									<h6 class="mb-0 mt-4 center_sm"><a class="button_1" href="#">Post Review</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="shop_pg1r">
					<div class="shop_pg1r1 border_1 p-4">
						<h4 class="head_1 mb-4">SEARCH</h4>
						<div class="input-group">
							<input type="text" class="form-control font_14" placeholder="Search Keyword">
							<span class="input-group-btn">
								<button class="btn btn-primary bg_oran border-0 rounded-0 p-3 px-4" type="button">
									<i class="fa fa-search"></i> </button>
							</span>
						</div>
					</div>
					<div class="shop_pg1r1 border_1 p-4 mt-4 center_sm">
						<h4 class="head_1 mb-4">FILTER BY PRICE</h4>
						<label for="customRange3" class="form-label">Range 1% to 100%</label>
						<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
						<h6 class="mb-0 mt-3"><a class="button" href="{{ url('/detail') }}">Filter</a></h6>
					</div>
					<div class="shop_pg1r1 border_1 p-4 mt-4">
						<h4 class="head_1 mb-4"> CATEGORIES</h4>
						@foreach($categories as $category)

						<h6 class="font_14">
							<a class="bg-light d-block p-3" href="#">
								{{ $category->name }}

								<span class="float-end">
									({{ $category->products_count }})
								</span>
							</a>
						</h6>

						@endforeach

					</div>
				</div>
				<h4 class="head_1 mb-4">LATEST PRODUCTS</h4>

				@forelse($latestProducts as $latest)

				<div class="shop_pg1r1i row mb-3">

					<div class="col-md-3 col-3">

						<figure class="effect-jazz mb-0">

							<a href="{{ url('/detail/'.$latest->id) }}">

								@if($latest->image)

								<img src="{{ asset('storage/'.$latest->image) }}"
									class="w-100"
									style="height:70px;object-fit:cover;">

								@else

								<img src="{{ asset('img/no-image.png') }}"
									class="w-100"
									style="height:70px;object-fit:cover;">

								@endif

							</a>

						</figure>

					</div>

					<div class="col-md-9 col-9">

						<h6>

							<a href="{{ url('/detail/'.$latest->id) }}">

								{{ $latest->name }}

							</a>

						</h6>

						<small class="text-muted">

							{{ \Illuminate\Support\Str::limit($latest->description,35) }}

						</small>

						<h6 class="mt-2 col_oran">

							Rs {{ number_format($latest->price,2) }}

						</h6>

					</div>

				</div>

				@if(!$loop->last)
				<hr>
				@endif

				@empty

				<div class="alert alert-info">

					No latest products available.

				</div>

				@endforelse
				<div class="shop_pg1r1 border_1 p-4 mt-4">
					<h4 class="head_1 mb-4">PRODUCT TAGS</h4>
					<ul class="mb-0 tags">
						<li class="d-inline-block"><a href="{{ url('/detail') }}">Candle</a></li>
						<li class="d-inline-block"><a href="{{ url('/detail') }}">Temple</a></li>
						<li class="d-inline-block"><a href="{{ url('/detail') }}">Book</a></li>
						<li class="d-inline-block"><a href="{{ url('/detail') }}">Stand</a></li>
						<li class="d-inline-block"><a href="{{ url('/detail') }}">Wood</a></li>
						<li class="d-inline-block"><a href="{{ url('/detail') }}">Bottle</a></li>
						<li class="d-inline-block"><a href="{{ url('/detail') }}">Lorem</a></li>
						<li class="d-inline-block"><a href="{{ url('/detail') }}">Porta</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="shop_1dt3 mt-5">

		<h2 class="center_sm">Related Products</h2>

		<div class="shop_1 row mt-4">

			@forelse($relatedProducts as $related)

			<div class="col-md-4 mb-4">

				<div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">

					<div class="shop_1im1 position-relative">

						<figure class="effect-jazz mb-0">

							<a href="{{ url('/detail/'.$related->id) }}">

								@if($related->image)

								<img
									src="{{ asset('storage/'.$related->image) }}"
									class="w-100"
									style="height:250px;object-fit:cover;"
									alt="{{ $related->name }}">

								@else

								<img
									src="{{ asset('img/no-image.png') }}"
									class="w-100"
									style="height:250px;object-fit:cover;">

								@endif

							</a>

						</figure>

					</div>

					<div class="shop_1im2 mt-3">

						<h5>

							<a href="{{ url('/detail/'.$related->id) }}">

								{{ $related->name }}

							</a>

						</h5>

						<p>

							{{ \Illuminate\Support\Str::limit($related->description,50) }}

						</p>

						<h6 class="col_oran fw-bold">

							Rs {{ number_format($related->price,2) }}

						</h6>

					</div>

				</div>

			</div>

			@empty

			<div class="col-12">

				<div class="alert alert-info text-center">

					No related products available.

				</div>

			</div>

			@endforelse

		</div>

	</div>
</section>

@endsection