<!-- <div> -->
<!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
<!-- </div> -->


@if(session('warning'))
<div class="alert alert-warning alert-dismissible fade show"
	id="warningAlert"
	role="alert">

	{{ session('warning') }}

	<button type="button"
		class="btn-close"
		data-bs-dismiss="alert"
		aria-label="Close"></button>
</div>
@endif

<script>
	setTimeout(function() {
		let alert = document.getElementById('warningAlert');

		if (alert) {
			let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
			bsAlert.close();
		}
	}, 3000);
</script>
@extends('layout.app')
@section('content')
<div class="main_2">
	<section id="center" class="center_log">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
						<div class="center_o1l">
							<h1 class="font_60 text-white">Login / Register</h1>
							<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="center_o1r text-end">
							<h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="{{url('/')}}">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran text-uppercase">Login / Register</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>


<section id="login" class="p_4 pb-0">
	<div class="container-xl">
		<div class="row login_1">
			<div class="col-md-4">
				<div class="login_1l">
					<h5 class="bg_light p-3 rounded-3 fs-6 mb-3 center_sm">Login Now</h5>

					@if ($errors->any())
					<div class="alert alert-danger">
						{{ $errors->first() }}
					</div>
					@endif

					<form method="POST" action="{{ url('/login') }}">
						@csrf
						<input class="form-control rounded-3" name="email" placeholder="Email" type="email">
						<input class="form-control rounded-3 mt-3" name="password" placeholder="Password" type="password">
						<div class="login_1li row mt-3">
							<div class="col-md-6 col-6">
								<div class="login_1lil">
									<div class="form-check mb-0">
										<input type="checkbox" class="form-check-input" id="customCheck1">
										<label class="form-check-label" for="customCheck1">keep me logged in</label>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-6">
								<div class="login_1lir text-end">
									<h6 class="mb-0"><a class="col_oran" href="#">Password?</a></h6>
								</div>
							</div>
						</div>
						<h6 class="mb-0 mt-4 center_sm"><button type="submit" class="button border-0">Login</button></h6>
					</form>
				</div>
			</div>
			<div class="col-md-8">
				<div class="login_1r">
					<h3 class="center_sm">Register Now</h3>
					<hr>

					@if ($errors->any() && old('email') !== null)
					<div class="alert alert-danger">
						{{ $errors->first() }}
					</div>
					@endif

					<form method="POST" action="{{ url('/register') }}">
						@csrf
						<div class="login_1ri row">
							<div class="col-md-6">
								<div class="login_1ril">
									<input class="form-control rounded-3" name="first_name" placeholder="First Name *" type="text" value="{{ old('first_name') }}">
									<input class="form-control rounded-3 mt-3" name="last_name" placeholder="Last Name *" type="text" value="{{ old('last_name') }}">
									<input class="form-control rounded-3 mt-3" name="email" placeholder="Email *" type="email" value="{{ old('email') }}">
									<input class="form-control rounded-3 mt-3" name="password" placeholder="Password" type="password">
									<div class="form-check mt-3">
										<input type="checkbox" class="form-check-input" id="customCheck1">
										<label class="form-check-label" for="customCheck1">By registering, you accept our <a class="col_oran" href="#">Terms & Conditions</a></label>
									</div>
									<h6 class="mb-0 mt-4 center_sm"><button type="submit" class="button border-0">Register</button></h6>
								</div>
							</div>
							<div class="col-md-6">
								<div class="login_1rir">
									<p class="fw-bold">Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur Aut Odit.</p>
									<p>Quis nostrud exercitation ullamcoaris nisiuate aliquip ex ea commodo consequat aute irure dolor atem reprehenderit in esse.</p>
									<ul class="mb-0 font_15">
										<li><a href="#"><i class="fa fa-circle font_8 me-1"></i> Proident sunt in culpa qui officia</a></li>
										<li class="mt-2"><a href="#"><i class="fa fa-circle font_8 me-1"></i> Deserunt mollit anim idestorum</a></li>
										<li class="mt-2"><a href="#"><i class="fa fa-circle font_8 me-1"></i> Sedutana perspiciatis</a></li>
										<li class="mt-2"><a href="#"><i class="fa fa-circle font_8 me-1"></i> Aunde omnis iste natus voluptatem</a></li>
										<li class="mt-2"><a href="#"><i class="fa fa-circle font_8 me-1"></i> Cullamcoaris nisiutia aliquip</a></li>
									</ul>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection