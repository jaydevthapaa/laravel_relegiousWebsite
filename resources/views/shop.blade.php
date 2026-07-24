@extends('layout.app')
@section('content')

<div class="main_2">
	<section id="center" class="center_shop">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
						<div class="center_o1l">
							<h1 class="font_60 text-white">Products</h1>
							<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="center_o1r text-end">
							<h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="{{url('/')}}">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">PRODUCTS</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>

<section id="shop_pg" class="p_4 pb-0">
	<div class="container-xl">
		<div class="shop_pg1 row">
			<div class="col-md-8">
				<div class="shop_pg1l">
					<div class="shop_1lt row">
						<div class="col-md-8">
							<div class="shop_1ltl pt-3">
								<p class="mb-0 text-black">
									Showing {{ $products->count() }} Products
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="shop_1ltr">
								<select class="form-select" aria-label="Default select example">
									<option selected="">Sort By Popularity</option>
									<option value="1">Sort By Latest</option>
									<option value="2">Sort By Rating</option>
									<option value="3">Sort By Trending</option>
								</select>
							</div>
						</div>
					</div>

					<div class="shop_1 row mt-4">

						@forelse($products as $product)

						<div class="col-md-6 col-sm-6 mb-4">

							<div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">

								<div class="shop_1im1 position-relative">

									<div class="shop_1im1i">

										<div class="grid clearfix">

											<figure class="effect-jazz mb-0">

												<a href="{{ url('/detail/'.$product->id) }}">

													@if($product->image)

													<img src="{{ asset('storage/'.$product->image) }}"
														class="w-100"
														style="height:250px;object-fit:cover;"
														alt="{{ $product->name }}">

													@else

													<img src="{{ asset('img/no-image.png') }}"
														class="w-100"
														style="height:250px;object-fit:cover;">

													@endif

												</a>

											</figure>

										</div>

									</div>

									<div class="shop_1im1i1 position-absolute w-100 top-0">

										<ul class="mb-0">

											<li class="d-inline-block">

												<a class="hvr-grow"
													href="{{ url('/detail/'.$product->id) }}">

													<i class="fa fa-eye"></i>

												</a>

											</li>

										</ul>

									</div>

								</div>

								<div class="shop_1im2 mt-3">

									<h5 class="mt-3">

										<a href="{{ url('/detail/'.$product->id) }}">

											{{ $product->name }}

										</a>

									</h5>

									<p>

										{{ \Illuminate\Support\Str::limit($product->description,60) }}

									</p>

									<h6 class="mb-0 mt-3 col_oran fw-bold">

										Rs {{ number_format($product->price,2) }}

									</h6>

								</div>

							</div>

						</div>

						@empty

						<div class="col-12">

							<div class="alert alert-warning text-center">

								@if(isset($selectedCategory))

								<h4>No items available in the <strong>{{ $selectedCategory->name }}</strong>category.</h4>

								@elseif(request('search'))

								<h4>No products found for "{{ request('search') }}".</h4>

								@else

								<h4>No products available.</h4>

								@endif

							</div>

						</div>

						@endforelse
					</div>
					<div class="pages  text-center mt-4 row">
						<div class="col-md-12">
							<ul class="mb-0">
								<li><a href="{{ url('/detail/') }}"><i class="fa fa-chevron-left"></i></a></li>
								<li><a class="act" href="{{ url('/detail') }}">1</a></li>
								<li><a href="{{ url('/detail/') }}">2</a></li>
								<li><a href="{{ url('/detail') }}">3</a></li>
								<li><a href="{{ url('/detail') }}">4</a></li>
								<li><a href="{{ url('/detail') }}">5</a></li>
								<li><a href="{{ url('/detail') }}">6</a></li>
								<li><a href="{{ url('/detail') }}"><i class="fa fa-chevron-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="shop_pg1r">
					<div class="shop_pg1r1 border_1 p-4">
						<h4 class="head_1 mb-4">SEARCH</h4>

						<form action="{{ url('/shop') }}" method="GET">

							<div class="input-group">

								<input
									type="text"
									name="search"
									class="form-control font_14"
									placeholder="Search Product..."
									value="{{ request('search') }}">

								<button
									class="btn btn-primary bg_oran border-0 rounded-0 px-4"
									type="submit">

									<i class="fa fa-search"></i>

								</button>

							</div>

						</form>
					</div>
					<div class="shop_pg1r1 border_1 p-4 mt-4 center_sm">
						<h4 class="head_1 mb-4">FILTER BY PRICE</h4>
						<label for="customRange3" class="form-label">Range 1% to 100%</label>
						<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
						<h6 class="mb-0 mt-3"><a class="button" href="{{ url('/detail') }}">Filter</a></h6>
					</div>
					<h6 class="font_14">
						<a class="bg-light d-block p-3"
							href="{{ url('/shop') }}">

							All Products

						</a>
					</h6>
					<div class="shop_pg1r1 border_1 p-4 mt-4">
						<h4 class="head_1 mb-4">CATEGORIES</h4>

						@foreach($categories as $category)

						<h6 class="font_14">
							<a class="bg-light d-block p-3"
								href="{{ url('/shop/'.$category->id) }}">
								{{ $category->name }}
								<span class="float-end">
									({{ $category->products_count }})
								</span>
							</a>
						</h6>
						@endforeach
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
							<li class="d-inline-block"><a href="{{ url('/detail') }}" Porta</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection