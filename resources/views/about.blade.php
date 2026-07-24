<!-- <div> -->
<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<!-- </div> -->

@extends('layout.app')

@section('content')
<div class="main_2">
	<section id="center" class="center_about">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
						<div class="center_o1l">
							<h1 class="font_60 text-white">About</h1>
							<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="center_o1r text-end">
							<h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="{{url('/')}}">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">ABOUT</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>

<section id="about_pg" class="p_4 bg-light">
	<div class="container-xl">
		<div class="row about_pg1">
			<div class="col-md-6">
				<div class="about_pg1l position-relative text-center">
					<img src="{{asset('img/38.jpg')}}" alt="img25" class="about_pg1l1 position-absolute">
					<img src="{{asset('img/67.jpg')}}" alt="img25" class="about_pg1l4 position-absolute">

				</div>
			</div>
			<div class="col-md-6">
				<div class="about_pg1r">
					<h5 class="col_oran fs-6">+ WE HAVE 23+ YEARS OF EXPERIENCE +</h5>
					<h1 class="mb-0 font_50 mt-3">We Provide
						Exceptional Sermons &
						Events</h1>
					<p class="border_2 p-3 mt-3">We are a Temple that belives in Krishna and the followers and We are a Temple that belives in Krishna</p>
					<div class="about_pg1ri row">
						<div class="col-md-2">
							<div class="about_pg1ril">
								<span class="font_60 col_oran lh-1"><i class="fa fa-om"></i></span>
							</div>
						</div>
						<div class="col-md-10">
							<div class="about_pg1rir">
								<h4>Our Temple</h4>
								<p class="mb-0">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt.</p>
							</div>
						</div>
					</div>
					<div class="about_pg1ri row mt-4">
						<div class="col-md-2">
							<div class="about_pg1ril">
								<span class="font_60 col_oran lh-1"><i class="fa fa-leaf"></i></span>
							</div>
						</div>
						<div class="col-md-10">
							<div class="about_pg1rir">
								<h4>Ministries</h4>
								<p class="mb-0">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="story" class="p_4">
	<div class="container-xl">
		<div class="row story_2">
			<div class="col-md-12">
				<ul class="timeline text-end">
					<li>
						<div class="timeline-badge"><i class="fa fa-heart"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h3 class="timeline-title">Volutpat nibh dictum eleifend torquent</h3>
								<h6 class="mt-3 mb-3"><i class="fa fa-clock me-1 col_oran"></i> 21 Feb 2018</h6>
							</div>
							<div class="timeline-body">
								<p>Lorem ipsum dolor sit amet, constetur adicng elit. Ultricies nulla mi tempus mcorper for praesent. Ultricies interdum volutpat morbi nam ornare neque elit leo, diam. Malesuada enim ac amurna tempor vel duis.</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-badge warning"><i class="fa fa-heart"></i></div>
						<div class="timeline-panel">
							<img alt="abc" class="w-100" src="{{asset('img/39.jpg')}}">
						</div>
					</li>
					<li>
						<div class="timeline-badge danger"><i class="fa fa-heart"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h3 class="timeline-title">Rosque gravida tempor aliquam velit</h3>
								<h6 class="mt-3 mb-3"><i class="fa fa-clock me-1 col_oran"></i> 22 Feb 2018</h6>
							</div>
							<div class="timeline-body">
								<p>Lorem ipsum dolor sit amet, constetur adicng elit. Ultricies nulla mi tempus mcorper for praesent. Ultricies interdum volutpat morbi nam ornare neque elit leo, diam. Malesuada enim ac amurna tempor vel duis.</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-panel">
							<img alt="abc" class="w-100" src="{{asset('img/40.jpg')}}">
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>

</section>

<section id="approach" class="p_4 pt-0">
	<div class="container-xl">
		<div class="approach_1 row">
			<div class="col-md-6">
				<div class="approach_1r">
					<div class="grid clearfix">
						<figure class="effect-jazz mb-0">
							<a href="#"><img src="{{asset('img/41.jpg')}}" class="w-100" alt="img25"></a>
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="approach_1l pt-5">
					<h5 class="col_oran fs-6">+ OUR APPROACH</h5>
					<h1 class="mb-0 font_50 mt-3">Advancing Regime's Domestic and Foreign</h1>
					<p class="border_2 p-3 mt-3">We are a Temple that belives in God christ and the followers and We are a temple that belives in Krishna</p>
					<ul class="nav nav-tabs mb-4 border-0 mt-4">
						<li class="nav-item d-inline-block">
							<a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
								<span class="d-md-block"><i class="fa fa-leaf col_oran me-1"></i> Ministry</span>
							</a>
						</li>

						<li class="nav-item d-inline-block ms-2">
							<a href="#profile2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
								<span class="d-md-block"><i class="fa fa-om col_oran me-1"></i> Temple</span>
							</a>
						</li>
						<li class="nav-item d-inline-block ms-2">
							<a href="#profile3" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
								<span class="d-md-block"><i class="fa fa-user col_oran me-1"></i> Pastor</span>
							</a>
						</li>

					</ul>
					<div class="tab-content">

						<div class="tab-pane active" id="profile1">
							<div class="profile1i">
								<p class="mb-0">Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat.</p>
							</div>
						</div>

						<div class="tab-pane" id="profile2">
							<div class="profile1i">
								<p class="mb-0">Etiam ac tortor id purus commodo vulputate. Vestibulum porttitor erat felis and sed vehicula tortor malesuada gravida. Mauris volutpat enim quis pulv gont congue. Suspendisse ullamcorper.</p>
							</div>
						</div>

						<div class="tab-pane" id="profile3">
							<div class="profile1i">
								<p class="mb-0">Vestibulum quis odio ut dui malesuada ornare ut id tellus. Curabitur viverra at magna ac bibendum. Aliquam erat volutpat. Proin rhoncus est ac ipsum varius fermentum. Integer a odio ornare mauris pharetra suscipitot. Integer vulputate elit erat.</p>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>




@endsection