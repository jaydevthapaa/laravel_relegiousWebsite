<!-- <div> -->
<!-- When there is no desire, all things are at peace. - Laozi -->
<!-- </div> -->



@extends('layout.app')
@section('content')
<div class="main_2">
	<section id="center" class="center_donate_dt">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
						<div class="center_o1l">
							<h1 class="font_60 text-white">Donation Detail</h1>
							<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Lord Krishna</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="center_o1r text-end">
							<h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="{{url('/')}}">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">DONATION DETAIL</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>

<section id="donate_dt" class="p_4 pb-0 w-75 mx-auto">
	<div class="container-xl">
		<div class="donate_dt1 row">
			<div class="col-md-8">
				<div class="donate_dt1l rounded_20 p-4 border_1">
					<div class="donate_dt1l1 bg_oran p-2 px-3 rounded_20">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-primary bg-transparent border-0 rounded-0 p-3" type="button">
									<i class="fa fa-dollar fs-3"></i> </button>
							</span>
							<input type="text" class="form-control fs-3 bg-transparent border-0 text-white">
						</div>
					</div>
					<div class="donate_dt1l2 mt-3">
						<ul class="mb-0">
							<li class="d-inline-block">$25</li>
							<li class="d-inline-block">$45</li>
							<li class="d-inline-block">$75</li>
							<li class="d-inline-block">$90</li>
							<li class="d-inline-block">Custom Amount</li>
						</ul>
						<h5 class="mt-4">Select Payment Method</h5>
						<div class="donate_dt1l2i row mt-3">
							<div class="col-md-6">
								<div class="donate_dt1l2il">
									<div class="form-check font_14">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
										<label class="form-check-label" for="flexRadioDefault2">
											Default checked radio
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="donate_dt1l2il">
									<div class="form-check font_14">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										<label class="form-check-label" for="flexRadioDefault1">
											Default radio
										</label>
									</div>
								</div>
							</div>
						</div>
						<h5 class="mt-4">Personal Info</h5>
						<div class="donate_dt1l2i1 row mt-3">
							<div class="col-md-6">
								<div class="donate_dt1l2i1l">
									<input class="form-control rounded_20 border-0 bg_light font_14" placeholder="Name" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="donate_dt1l2i1l">
									<input class="form-control rounded_20 border-0 bg_light font_14" placeholder="Email Address" type="text">
								</div>
							</div>
						</div>
						<div class="donate_dt1l2i1 row mt-3">
							<div class="col-md-6">
								<div class="donate_dt1l2i1l">
									<input class="form-control rounded_20 border-0 bg_light font_14" placeholder="Phone" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="donate_dt1l2i1l">
									<input class="form-control rounded_20 border-0 bg_light font_14" placeholder="Subject" type="text">
								</div>
							</div>
						</div>
						<div class="donate_dt1l2i1 row mt-3">
							<div class="col-md-12">
								<div class="donate_dt1l2i1l">
									<textarea placeholder="Write a Messsage" class="form-control rounded_20 border-0 bg_light font_14 form_text"></textarea>
									<h6 class="mb-0 mt-4 center_sm"><a class="button" href="#"><i class="fa fa-heart me-1"></i> Donate Now</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="donate_dt1r">
					<div class="donate_dt1r1 p-3  border_1">
						<div class="donate_dt1r1i position-relative">
							<div class="donate_dt1r1i1">
								<div class="grid clearfix">
									<figure class="effect-jazz mb-0">
										<a href="#"><img src="{{asset('img/6.jpg')}}" class="w-100" alt="img25"></a>
									</figure>
								</div>
							</div>
							<div class="donate_dt1r1i2 position-absolute">
								<span class="d-inline-block text-white bg_oran font_12 p-2 px-3">EDUCATION</span>
							</div>
						</div>
						<div class="donate_dt1r1io px-2 pt-3">
							<h5><a href="#">Educate children to get good life</a></h5>
							<p class="mb-0 mt-3">There are many variations of passages of Lorem Ipsum available</p>
						</div>
					</div>
					<div class="donate_dt1r2 p-3 bg_light border_1">
						<h6 class="text-center">46%</h6>
						<div class="progress-bar mt-3">
							<div class="progress" style="width:46%;">
							</div>
						</div>
						<h6 class="mb-0 mt-3">Raised: <span class="fw-bold">$1410</span> <span class="float-end">Goal: <span class="fw-bold">$2000</span></span></h6>
					</div>
					<div class="donate_dt1r3 mt-4 rounded_20">
						<h5 class="p-3 mb-0  text-white bg_oran">Organizer :</h5>
						<div class="bg_light donate_dt1r3i row mx-0 pt-4 pb-4">
							<div class="col-md-3">
								<div class="donate_dt1r3il">
									<img src="{{asset('img/25.jpg')}}" class="rounded-circle w-100" alt="abc">
								</div>
							</div>
							<div class="col-md-9">
								<div class="donate_dt1r3ir">
									<h5 class="fw-bold fs-6 mb-3">Lorem Amet</h5>
									<h6 class="font_14"><a href="#"><i class="fa fa-tag col_oran me-1 align-middle"></i> Medical</a></h6>
									<h6 class="font_14 mb-0"><a href="#"><i class="fa fa-tag col_oran me-1 align-middle"></i> New York, Usa</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection