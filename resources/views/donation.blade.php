<!-- <div> -->
<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
<!-- </div> -->

@extends('layout.app')
@section('content')

<div class="main_2">
	<section id="center" class="center_donate">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
						<div class="center_o1l">
							<h1 class="font_60 text-white">Donation</h1>
							<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Lord Krishna</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="center_o1r text-end">
							<h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="{{url('/')}}">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">DONATION</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>

<section id="donate" class="p_4 pb-0">
	<div class="container-xl">
		<div class="donate_2 row">
			<div class="col-md-4">
				<div class="donate_2l">
					<div class="donate_2li">
						<div class="grid clearfix">
							<figure class="effect-jazz mb-0">
								<a href="{{ url('/donation_detail') }}"><img src="{{asset('img/5.jpg')}}" class="w-100" alt="img25"></a>
							</figure>
						</div>
					</div>
					<div class="donate_2li1 p-4 border_1 border-top-0">
						<h4><a class="col_blue a_tag" href="{{ url('/donation_detail') }}">Become those who do</a></h4>
						<p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
						<h6 class="mb-3">Raised: <span class="fw-bold">$2410</span> <span class="float-end">Goal: <span class="fw-bold">$4000</span></span></h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
						</div>
						<h6 class="mb-0 mt-4"><a class="button_1" href="{{ url('/donation_detail') }}">Donate Now</a></h6>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="donate_2l">
					<div class="donate_2li">
						<div class="grid clearfix">
							<figure class="effect-jazz mb-0">
								<a href="{{ url('/donation_detail') }}"><img src="{{asset('img/6.jpg')}}" class="w-100" alt="img25"></a>
							</figure>
						</div>
					</div>
					<div class="donate_2li1 p-4 border_1 border-top-0">
						<h4><a class="col_blue a_tag" href="{{ url('/donation_detail') }}">Donate Ngos</a></h4>
						<p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
						<h6 class="mb-3">Raised: <span class="fw-bold">$1400</span> <span class="float-end">Goal: <span class="fw-bold">$2000</span></span></h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
						</div>
						<h6 class="mb-0 mt-4"><a class="button_1" href="{{ url('/donation_detail') }}">Donate Now</a></h6>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="donate_2l">
					<div class="donate_2li">
						<div class="grid clearfix">
							<figure class="effect-jazz mb-0">
								<a href="{{ url('/donation_detail') }}"><img src="{{asset('img/7.jpg')}}" class="w-100" alt="img25"></a>
							</figure>
						</div>
					</div>
					<div class="donate_2li1 p-4 border_1 border-top-0">
						<h4><a class="col_blue a_tag" href="{{ url('/donation_detail') }}">Feed Poors</a></h4>
						<p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
						<h6 class="mb-3">Raised: <span class="fw-bold">$2090</span> <span class="float-end">Goal: <span class="fw-bold">$3000</span></span></h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
						</div>
						<h6 class="mb-0 mt-4"><a class="button_1" href="{{ url('/donation_detail') }}">Donate Now</a></h6>
					</div>
				</div>
			</div>
		</div>
		<div class="donate_2 row mt-4">
			<div class="col-md-4">
				<div class="donate_2l">
					<div class="donate_2li">
						<div class="grid clearfix">
							<figure class="effect-jazz mb-0">
								<a href="{{ url('/donation_detail') }}"><img src="{{('img/44.jpg')}}" class="w-100" alt="img25"></a>
							</figure>
						</div>
					</div>
					<div class="donate_2li1 p-4 border_1 border-top-0">
						<h4><a class="col_blue a_tag" href="{{ url('/donation_detail') }}">Become those who do</a></h4>
						<p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
						<h6 class="mb-3">Raised: <span class="fw-bold">$2410</span> <span class="float-end">Goal: <span class="fw-bold">$4000</span></span></h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
						</div>
						<h6 class="mb-0 mt-4"><a class="button_1" href="{{ url('/donation_detail') }}">Donate Now</a></h6>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="donate_2l">
					<div class="donate_2li">
						<div class="grid clearfix">
							<figure class="effect-jazz mb-0">
								<a href="{{ url('/donation_detail') }}"><img src="{{asset('img/45.jpg')}}" class="w-100" alt="img25"></a>
							</figure>
						</div>
					</div>
					<div class="donate_2li1 p-4 border_1 border-top-0">
						<h4><a class="col_blue a_tag" href="{{ url('/donation_detail') }}">Donate Ngos</a></h4>
						<p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
						<h6 class="mb-3">Raised: <span class="fw-bold">$1400</span> <span class="float-end">Goal: <span class="fw-bold">$2000</span></span></h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
						</div>
						<h6 class="mb-0 mt-4"><a class="button_1" href="{{ url('/donation_detail') }}">Donate Now</a></h6>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="donate_2l">
					<div class="donate_2li">
						<div class="grid clearfix">
							<figure class="effect-jazz mb-0">
								<a href="{{ url('/donation_detail') }}"><img src="{{asset('img/46.jpg')}}" class="w-100" alt="img25"></a>
							</figure>
						</div>
					</div>
					<div class="donate_2li1 p-4 border_1 border-top-0">
						<h4><a class="col_blue a_tag" href="{{ url('/donation_detail') }}">Feed Poors</a></h4>
						<p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
						<h6 class="mb-3">Raised: <span class="fw-bold">$2090</span> <span class="float-end">Goal: <span class="fw-bold">$3000</span></span></h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
						</div>
						<h6 class="mb-0 mt-4"><a class="button_1" href="{{ url('/donation_detail') }}">Donate Now</a></h6>
					</div>
				</div>
			</div>
		</div>
		<div class="pages  text-center mt-4 row">
			<div class="col-md-12">
				<ul class="mb-0">
					<li><a href="{{ url('/donation_detail') }}"><i class="fa fa-chevron-left"></i></a></li>
					<li><a class="act" href="{{ url('/donation_detail') }}">1</a></li>
					<li><a href="{{ url('/donation_detail') }}">2</a></li>
					<li><a href="{{ url('/donation_detail') }}">3</a></li>
					<li><a href="{{ url('/donation_detail') }}">4</a></li>
					<li><a href="{{ url('/donation_detail') }}">5</a></li>
					<li><a href="{{ url('/donation_detail') }}">6</a></li>
					<li><a href="{{ url('/donation_detail') }}"><i class="fa fa-chevron-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

@endsection