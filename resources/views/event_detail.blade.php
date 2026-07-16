<!-- <div> -->
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
<!-- </div> -->

@extends('layout.app')
@section('content')
 <div class="main_2">
	<section id="center" class="center_event_dt">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
					  <div class="center_o1l">
					    <h1 class="font_60 text-white">Event Detail</h1>
						<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God  and the followers <br> and We are a Temple that belives in Lord Krishna</p>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="center_o1r text-end">
					    <h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="#">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">EVENT DETAIL</span></h6>
					  </div>
					</div>
				</div>
			</div>
		</div>   
	</section>
 </div>
</div>

<section id="event_dt" class="p_4 pb-0 w-75 mx-auto">
    <div class="container-xl">
	  <div class="event_dt1 row">
	    <div class="col-md-8">
		  <div class="event_dt1l">
		   <div class="event_dt1l1 row">
		    <div class="col-md-6 col-sm-6">
			  <div class="event_dt1l1l bg_oran rounded_20 px-4 pb-4">
			    <h5 class="fs-6 text-white"><span class="d-inline-block bg_oran text-white text-center fs-5 me-2"><i class="fa fa-clock"></i></span> Date & Time</h5>
				<h6 class="font_14 text-white mt-3">{{$event->event_time}}</h6>
				<h6 class="mb-0 font_14 text-white">{{ \Carbon\Carbon::parse($event->event_date)->format('d M, Y') }}</h6>
			  </div>
			</div>
			<div class="col-md-6 col-sm-6">
			  <div class="event_dt1l1l bg_blue rounded_20 px-4 pb-4">
			    <h5 class="fs-6 text-white"><span class="d-inline-block bg_blue text-white text-center fs-5 me-2"><i class="fa fa-map-marker"></i></span> Location</h5>
				<h6 class="mb-0 font_14 text-white">{{$event ->location}}</h6>
			  </div>
			</div>
		  </div>
		  <div class="event_dt1l2 mt-4">
				<h2>{{ $event->title }}</h2>
				<p class="mt-3">
					{{ $event->description }}
				</p>
				<img src="{{ asset('storage/'.$event->image) }}"
					class="w-100 rounded_20 mt-4"
					alt="{{ $event->title }}">
				<h6 class="mb-0 mt-4 center_sm">
					<a class="button" href="#">Register Now</a>
				</h6>

		  </div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="event_dt1r">
		   <div class="event_dt1r1 p-4 bg-light rounded_20 text-center">
		     <h5>Semper Porta</h5>
			 <p class="mt-3">Vestibulum quis odio ut dui malesuada ornare ut id tellus Curabitur viverra at magna ac bibendum.</p>
			 <h4 class="col_oran"> +123) 123 4567 890 </h4>
			 <ul class="mb-3 mt-3">
	    <li class="d-inline-block"><a class="d-block text-center" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="#"><i class="fa-brands fa-twitter"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="#"><i class="fa-brands fa-pinterest"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="#"><i class="fa-brands fa-instagram"></i></a></li>
	  </ul>
	         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" height="450" style="border:0; width:100%;" allowfullscreen=""></iframe>
		  </div>
		  </div>
		</div>
	  </div>
	</div>
   </section>

@endsection