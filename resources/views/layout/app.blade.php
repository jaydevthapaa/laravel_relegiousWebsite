<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hindu Temple</title>

	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/global.css') }}" rel="stylesheet">
	<link href="{{ asset('css/index.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	@stack('styles')
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		setTimeout(function() {

			['successAlert', 'warningAlert', 'errorAlert'].forEach(function(id) {

				let alert = document.getElementById(id);

				if (alert) {
					bootstrap.Alert.getOrCreateInstance(alert).close();
				}

			});

		}, 3000);
	</script>
</head>

<body>
	<div class="main position-relative">
		<div class="main_1 position-absolute top-0 w-100">

			<section id="top" class="pt-3 pb-3">
				<div class="container-xl">
					<div class="row top_1">
						<div class="col-md-4">
							<div class="top_1l">
								<ul class="mb-0 font_14">
									<li class="d-inline-block"><a class="text-white a_tag" href="#"><i class="fa fa-phone me-1 col_oran"></i> +123) 123 4567 890</a></li>
									<li class="d-inline-block ms-3"><a class="text-white a_tag" href="#"><i class="fa fa-envelope me-1 col_oran"></i> info@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="top_1m text-center">
								<ul class="mb-0 font_14">
									<li class="d-inline-block"><a class="text-white a_tag" href="#"> EVENTS</a></li>
									<li class="d-inline-block ms-3"><a class="text-white a_tag" href="#"> SERMONS</a></li>
									<li class="d-inline-block ms-3"><a class="text-white a_tag" href="#"> MINISTRIES</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="top_1r text-end">
								<ul class="mb-0 fs-6">
									<li class="d-inline-block me-4 font_14"><a class="col_oran fw-bold" href="#"> <i class="fa fa-circle me-1 font_10 text-success"></i> ONLINE</a></li>
									<li class="d-inline-block"><a class="text-white fw-bold a_tag" href="#"> <i class="fa-brands fa-facebook-f"></i> </a></li>
									<li class="d-inline-block ms-2"><a class="text-white fw-bold a_tag" href="#"> <i class="fa-brands fa-instagram"></i> </a></li>
									<li class="d-inline-block ms-2"><a class="text-white fw-bold a_tag" href="#"> <i class="fa-brands fa-linkedin"></i> </a></li>
									<li class="d-inline-block ms-2"><a class="text-white fw-bold a_tag" href="#"> <i class="fa-brands fa-pinterest"></i> </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="header">
				<nav class="navbar navbar-expand-md navbar-light  p-0 bg-white" id="navbar_sticky">
					<div class="container-xl">
						<a class="p-0 navbar-brand fw-bold me-0  text-black" href="{{ url('/') }}"><i class="fa-solid fa-om me-1 col_oran"></i> Krishna <br>
							<span class="fw-normal font_14 text-muted">Mega Temple</span>
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mb-0 ms-auto">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{url('/about')}}">About </a>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Events
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
											<path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
										</svg>
									</a>
									<ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="{{url('/event')}}"> Events</a></li>
										<li><a class="dropdown-item border-0" href="{{url('/event_detail') }}"> Event Detail</a></li>
									</ul>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Donation
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
											<path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
										</svg>
									</a>
									<ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="{{url('/donation')}}"> Donation</a></li>
										<li><a class="dropdown-item border-0" href="{{url('/donation_detail')}}"> Donation Detail</a></li>
									</ul>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Product
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
											<path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
										</svg>
									</a>
									<ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="{{url('/shop')}}"> Product</a></li>
										<li><a class="dropdown-item" href="{{url('/shop_details')}}"> Product Detail</a></li>
										<li><a class="dropdown-item" href="{{url('/shoping_carts')}}"> Shopping Cart</a></li>
										<li><a class="dropdown-item border-0" href="{{url('/checkout')}}"> Checkout</a></li>
									</ul>
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Blog
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
											<path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
										</svg>
									</a>
									<ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="{{url('/blog')}}"> Blog</a></li>
										<li><a class="dropdown-item border-0" href="{{url('/blog_detail')}}"> Blog Detail</a></li>
									</ul>
								</li>


								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Pages
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
											<path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
										</svg>
									</a>
									<ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="{{url('/team')}}"> Team</a></li>
										<li><a class="dropdown-item" href="{{url('/faq')}}"> Faq</a></li>
										<!-- <li><a class="dropdown-item border-0" href="{{url('/login')}}"> Login</a></li> -->
									</ul>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
								</li>
								@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ url('/login') }}">
										Login / Register
									</a>
								</li>
								@endguest

								@auth
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="userDropdown"
										role="button" data-bs-toggle="dropdown" aria-expanded="false">
										👤 {{ Auth::user()->name }}
									</a>

									<ul class="dropdown-menu">
										<li>
											<span class="dropdown-item-text">
												Welcome, {{ Auth::user()->name }}
											</span>
										</li>

										<li>
											<hr class="dropdown-divider">
										</li>

										<li>
											<form action="{{ url('/logout') }}" method="POST">
												@csrf
												<button class="dropdown-item" type="submit">
													Logout
												</button>
											</form>
										</li>
									</ul>
								</li>
								@endauth

							</ul>
							<ul class="navbar-nav mb-0 ms-auto">
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav_hide nav-link fs-6" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fa fa-search"></i>
									</a>
									<ul class="dropdown-menu drop_1 drop_search p-3" aria-labelledby="navbarDropdown">
										<form class="navbar-form" role="search">
											<div class="input-group">
												<input type="text" class="form-control font_14" placeholder="Search Keyword">
												<span class="input-group-btn">
													<button class="btn btn-primary bg_blue border-0 rounded-0 p-2 px-3" type="button">
														<i class="fa fa-search"></i> </button>
												</span>
											</div>
										</form>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link fs-6" href="#"><i class="fa fa-heart"></i> </a>
								</li>
								<li class="nav-item dropdown">

									<a class="nav-link dropdown-toggle drop_togn nav_hide fs-6 position-relative"
										href="#"
										id="cartDropdown"
										role="button"
										data-bs-toggle="dropdown"
										aria-expanded="false">

										<i class="fa fa-shopping-cart"></i>

										@php
										$cartCount = collect(session('cart', []))->sum('quantity');
										@endphp

										@if($cartCount)
										<span
											class="badge bg-danger rounded-pill position-absolute"
											style="top:0; right:-8px; font-size:10px;">
											{{ $cartCount }}
										</span>
										@endif

									</a>
									@php
									$cart = session('cart', []);

									$cartCount = collect($cart)->sum('quantity');

									$cartTotal = collect($cart)->sum(function ($item) {
									return $item['price'] * $item['quantity'];
									});
									@endphp

									<ul class="dropdown-menu drop_cart rounded-0 border-0"
										aria-labelledby="cartDropdown">

										<li>

											<div class="drop_1i row">

												<div class="col-md-6">
													<h5 class="fs-6">
														{{ $cartCount }} ITEM{{ $cartCount!=1 ? 'S' : '' }}
													</h5>
												</div>

												<div class="col-md-6 text-end">
													<h5 class="fs-6">
														<a href="{{ url('/cart') }}">VIEW CART</a>
													</h5>
												</div>

											</div>

											@forelse($cart as $item)

											<div class="drop_1i1 row align-items-center">

												<div class="col-md-6">

													<h6 class="fs-6 mb-1">
														<a href="{{ url('/detail/'.$item['id']) }}">
															{{ $item['name'] }}
														</a>
													</h6>

													<small>
														{{ $item['quantity'] }} × Rs {{ number_format($item['price'],2) }}
													</small>

												</div>

												<div class="col-md-4">

													<img src="{{ asset('storage/'.$item['image']) }}"
														class="w-100"
														style="height:60px;object-fit:cover;">

												</div>

												<div class="col-md-2 text-end">

													<a href="{{ url('/cart/remove/'.$item['id']) }}"
														onclick="return confirm('Remove this item?')">

														<i class="fa fa-times text-danger"></i>

													</a>

												</div>

											</div>

											@empty

											<div class="text-center p-3">
												Your cart is empty.
											</div>

											@endforelse

											<hr>

											<div class="drop_1i2 row">

												<div class="col-md-6">

													<strong>Total</strong>

												</div>

												<div class="col-md-6 text-end">

													<strong class="col_oran">

														Rs {{ number_format($cartTotal,2) }}

													</strong>

												</div>

											</div>

											<div class="drop_1i3 text-center mt-3">

												<a href="{{ url('/cart') }}"
													class="button px-3">

													View Cart

												</a>

												@if($cartCount)

												<a href="{{ url('/checkout') }}"
													class="button_1 px-3">

													Checkout

												</a>

												@endif

											</div>

										</li>

									</ul>

							</ul>
							</li>
						</div>
					</div>
				</nav>
			</section>
		</div>
		<div class="main_2">
			@if(session('success'))
			<div class="alert alert-warning alert-dismissible fade show"
				id="successAlert"
				role="alert">

				{{ session('success') }}

				<button type="button"
					class="btn-close"
					data-bs-dismiss="alert"
					aria-label="Close"></button>
			</div>
			@endif
			@if(session('error'))

			<div class="alert alert-danger"
				id="warningAlert"
				role="alert">

				{{ session('error') }}

			</div>
			@endif
			@yield('content')
		</div>
	</div>

	<div class="footer_m position-relative">
		<div class="footer_m1">
			<section id="footer" class="p_4 bg_blue">
				<div class="container-xl">
					<div class="footer_1 row">
						<div class="col-md-4">
							<div class="footer_1l">
								<h4 class="text-white mb-4">About Us</h4>
								<p class="text-light">Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium ut lacinia in</p>
								<ul class="mb-0 flex_box">
									<li class="d-flex text-light"><span class="me-3"><i class="fa fa-phone col_oran"></i></span> +123) 123 4567 890 </li>
									<li class="d-flex text-light mt-3"><span class="me-3"><i class="fa fa-envelope col_oran"></i></span> info@gmail.com </li>
									<li class="d-flex text-light mt-3"><span class="me-3"><i class="fa fa-map-marker col_oran"></i></span> 13/D, Amet Street City Tower, New York USA </li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer_1l">
								<h4 class="text-white mb-4">Information</h4>
								<div class="row footer_3ism">
									<h6 class="col-md-12 col-6"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Ministries</a></h6>
									<h6 class="col-md-12 col-6 mt-2"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Services</a></h6>
									<h6 class="col-md-12 col-6 mt-2"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Sermons</a></h6>
									<h6 class="col-md-12 col-6 mt-2"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Donations</a></h6>
									<h6 class="col-md-12 col-6 mt-2"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Volunteers</a></h6>
									<h6 class="col-md-12 col-6 mt-2 mb-0"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Events</a></h6>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer_1l">
								<h4 class="text-white mb-4">Others</h4>
								<div class="row footer_3ism">
									<h6 class="col-md-12 col-6"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Shop</a></h6>
									<h6 class="col-md-12 col-6 mt-2"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Cart</a></h6>
									<h6 class="col-md-12 col-6 mt-2"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Checkout</a></h6>
									<h6 class="col-md-12 col-6 mt-2"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Blog</a></h6>
									<h6 class="col-md-12 col-6 mt-2"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Contact Us</a></h6>
									<h6 class="col-md-12 col-6 mt-2 mb-0"><i class="fa fa-chevron-right col_oran me-1 font_13 align-middle"></i> <a class="text-light a_tag" href="#"> Policy</a></h6>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer_1l">
								<h4 class="text-white mb-4">Recent Posts</h4>
								<div class="footer_1li row">
									<div class="col-md-3 col-4">
										<div class="footer_1lil">
											<div class="grid clearfix">
												<figure class="effect-jazz mb-0">
													<a href="#"><img src="{{asset('img/13.jpg')}}" class="w-100" alt="img25"></a>
												</figure>
											</div>
										</div>
									</div>
									<div class="col-md-9 col-8">
										<div class="footer_1lir">
											<h6 class="font_13 text-white"><i class="fa fa-calendar col_oran me-1"></i> October 26, 2020</h6>
											<h5 class="mb-0 fs-6"><a class="text-light a_tag" href="#">All we’ve discovered by now</a></h5>
										</div>
									</div>
								</div>
								<div class="footer_1li row mt-4">
									<div class="col-md-3 col-4">
										<div class="footer_1lil">
											<div class="grid clearfix">
												<figure class="effect-jazz mb-0">
													<a href="#"><img src="{{asset('img/14.jpg')}}" class="w-100" alt="img25"></a>
												</figure>
											</div>
										</div>
									</div>
									<div class="col-md-9 col-8">
										<div class="footer_1lir">
											<h6 class="font_13 text-white"><i class="fa fa-calendar col_oran me-1"></i> October 28, 2020</h6>
											<h5 class="mb-0 fs-6"><a class="text-light a_tag" href="#">We Who Believe In God</a></h5>
										</div>
									</div>
								</div>
								<div class="footer_1li row mt-4">
									<div class="col-md-3 col-4">
										<div class="footer_1lil">
											<div class="grid clearfix">
												<figure class="effect-jazz mb-0">
													<a href="#"><img src="{{asset('img/15.jpg')}}" class="w-100" alt="img25"></a>
												</figure>
											</div>
										</div>
									</div>
									<div class="col-md-9 col-8">
										<div class="footer_1lir">
											<h6 class="font_13 text-white"><i class="fa fa-calendar col_oran me-1"></i> October 29, 2020</h6>
											<h5 class="mb-0 fs-6"><a class="text-light a_tag" href="#">Expecting new issued cases</a></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="footer_b" class="bg_blue">
				<div class="container-xl">
					<div class="footer_b1 row">
						<div class="col-md-5">
							<div class="footer_b1l">
								<p class="mb-0 text-light">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_oran fw-bold" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer_b1m p-4 bg-white">
								<h3 class="mb-0"><a href="{{url('/')}}"><i class="fa-solid fa-om me-1 col_oran"></i> Krishna <br>
										<span class="fw-normal font_14 text-muted">Mega Temple</span>
									</a></h3>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer_b1r text-end">
								<ul class="mb-0">
									<li class="d-inline-block"><a class="d-block text-center" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li class="d-inline-block ms-2"><a class="d-block text-center" href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li class="d-inline-block ms-2"><a class="d-block text-center" href="#"><i class="fa-brands fa-pinterest"></i></a></li>
									<li class="d-inline-block ms-2"><a class="d-block text-center" href="#"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="footer_m2  w-100">
			<section id="subs" class="p_3">
				<div class="container-xl">
					<div class="subs1 row mx-0 bg-white p-5 px-3 shadow_box">
						<div class="col-md-6">
							<div class="subs1l">
								<h2>Subscribe To Our Newsletter</h2>
								<p class="mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="subs1r mt-4">
								<div class="input-group">
									<input type="text" class="form-control font_14" placeholder="Your Email">
									<span class="input-group-btn">
										<button class="btn btn-primary bg_oran border-0 rounded-0 p-3 px-4" type="button">
											Subscribe </button>
									</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
		</div>
	</div>



	<script src="{{asset('js/common.js')}}"></script>


</body>

</html>