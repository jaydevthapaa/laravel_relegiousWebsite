<!-- <div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
<!-- </div> --> 


@extends('layout.app')
@section('content')

<section id="center" class="center_home">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  <div class="bg_back w-100 h-100 position-absolute center_ht"></div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/1.jpg')}}" class="d-block w-100" alt="...">
	  <div class="center_hm1 position-absolute">
		 <img src="{{asset('img/43.png')}}" alt="abc">
	  </div>
      <div class="carousel-caption carousel-caption1 d-md-block">
	    <h1 class="text-white text-uppercase font_50">God give us power to believe</h1>
		<p class="mt-3 text-light">Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
		<ul class="mb-0 mt-4">
		 <li class="d-inline-block"><a class="button_2" href="#">Buy Now <i class="fa fa-arrow-right ms-1"></i></a></li>
		 <li class="d-inline-block ms-3"><a class="button_3" href="#">Live Stream <i class="fa fa-arrow-right ms-1"></i></a></li>
		</ul>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/2.jpg')}}" class="d-block w-100" alt="...">
	  <div class="center_hm1 position-absolute">
		 <img src="{{asset('img/43.png')}}" alt="abc">
	  </div>

      <div class="carousel-caption carousel-caption2 d-md-block">
	      <h1 class="text-white text-uppercase font_50">alias veritatis nostrum iste sed </h1>
		<p class="mt-3 text-light">Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
		<ul class="mb-0 mt-4">
		 <li class="d-inline-block"><a class="button_2" href="#">Buy Now <i class="fa fa-arrow-right ms-1"></i></a></li>
		 <li class="d-inline-block ms-3"><a class="button_3" href="#">Live Stream <i class="fa fa-arrow-right ms-1"></i></a></li>
		</ul>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/3.jpg')}}" class="d-block w-100" alt="...">
	  <div class="center_hm1 position-absolute">
		 <img src="{{asset('img/43.png')}}" alt="abc">
	  </div>

      <div class="carousel-caption carousel-caption3 d-md-block">
	       <h1 class="text-white text-uppercase font_50">Lorem ipsum dolor sit, amet</h1>
		<p class="mt-3 text-light">Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis nostra rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis quasi, eum.</p>
		<ul class="mb-0 mt-4">
		 <li class="d-inline-block"><a class="button_2" href="#">Buy Now <i class="fa fa-arrow-right ms-1"></i></a></li>
		 <li class="d-inline-block ms-3"><a class="button_3" href="#">Live Stream <i class="fa fa-arrow-right ms-1"></i></a></li>
		</ul>
      </div>
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
</section>

<section id="about_h" class="p_4">
    <div class="container-xl">
	  <div class="row about_h1">
	    <div class="col-md-4">
		  <div class="about_h1l text-center p-5 border_1">
		   <span class="d-inline-block rounded-circle border_1 col_oran font_50 hvr-grow"><i class="fa-solid fa-hands-praying"></i></span>
		   <h4 class="mt-4 mb-4"><a class="col_blue" href="#">Morning Prayer</a></h4>
		   <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="about_h1l text-center p-5 bg_oran">
		   <span class="d-inline-block rounded-circle border_1 text-white font_50 hvr-grow"><i class="fa fa-microphone"></i></span>
		   <h4 class="mt-4 mb-4"><a class="text-white" href="#">Exhortation</a></h4>
		   <p class="mb-0 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="about_h1l text-center p-5 bg_blue">
		   <span class="d-inline-block rounded-circle border_1 col_oran hvr-grow font_50"><i class="fa-solid fa-om"></i></span>
		   <h4 class="mt-4 mb-4"><a class="text-white" href="#">Counseling</a></h4>
		   <p class="mb-0 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
		  </div>
		</div>
	  </div>
	  <div class="row about_h2 mt-5">
	    <div class="col-md-5">
		  <div class="about_h2l text-center float-end">
            <h1 class="d-inline-block bg_blue text-white rounded-circle text-center">25<span class="fs-6">+</span> <br> <span class="fs-6 fw-normal">Join Our temple</span></h1>
		  </div>
		</div>
		<div class="col-md-7">
		  <div class="about_h2r">
            <h5 class="col_oran fs-6">+  WE HAVE 28+ YEARS OF EXPERIENCE</h5>
			<h1 class="mt-3 font_50">We Are A Temple <br>
That Believes In God.</h1>
<p class="mt-3 p-3">We are a Temple that belives in Krishna and the followers and We are a Temple that belives in Krishna</p>
<div class="about_h2ri row mt-4">
 <div class="col-md-6 col-sm-6">
   <div class="about_h2ril">
     <div class="about_h2rili row">
	   <div class="col-md-2">
	     <div class="about_h2rilil">
		   <span class="d-inline-block col_oran fs-2"><i class="fa-solid fa-hands-praying"></i></span>
		 </div>
	   </div>
	   <div class="col-md-10">
	     <div class="about_h2rilir">
		   <h4>Helping Hand</h4>
		   <p class="border-0">Vestibulum ac diam sit amet quam vehicula elementum sed.</p>
		 </div>
	   </div>
	 </div>
   </div>
 </div>
 <div class="col-md-6 col-sm-6">
   <div class="about_h2ril">
     <div class="about_h2rili row">
	   <div class="col-md-2">
	     <div class="about_h2rilil">
		   <span class="d-inline-block col_oran fs-2"><i class="fa-solid fa-handshake-angle"></i></span>
		 </div>
	   </div>
	   <div class="col-md-10">
	     <div class="about_h2rilir">
		   <h4>Open Hearts</h4>
		   <p class="border-0">Vestibulum ac diam sit amet quam vehicula elementum sed.</p>
		 </div>
	   </div>
	 </div>
   </div>
 </div>
</div>
<h6 class="mb-0 mt-3"><a class="button_4" href="#">Learn More <i class="fa fa-arrow-right ms-1"></i></a></h6>
		  </div>
		</div>
	  </div>
	  <div class="row about_h3 mt-5 position-relative">
	    <div class="about_h3m position-absolute">
		  <img src="{{asset('img/4.png')}}"  alt="img25">
		</div>
		<div class="about_h3m1">
		  <div class="about_h3i1 row">
		    <div class="col-md-7">
			  <div class="about_h3i1l bg_blue p-5 text-end">
			     <h5 class="col_oran fs-6">Need Help, Call Our HOTLINE!</h5>
				 <h2 class="mb-0 text-white mt-3">+1 212-683-9756</h2>
			  </div>
			</div>
			<div class="col-md-5">
			  <div class="about_h3i1r p-5 bg_oran">
			    <h5 class="text-white fs-6 mb-3">Join Our Temple Newsletter</h5>
				<div class="input-group">
			<input type="text" class="form-control font_14 border-0" placeholder="Enter Email Address">
			<span class="input-group-btn">
				<button class="btn btn-primary  border-0 rounded-0 p-3 px-4" type="button">
					<i class="fa fa-envelope"></i> </button>
			</span>
		</div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="about_h3m2 position-absolute">
		  <div class="about_h3m2i row">
		    <div class="col-md-12">
			  <span class="d-inline-block shadow_box text-center fw-bold bg-white">or</span>
			</div>
		  </div>
		</div>
	  </div>
	</div>
   </section>
   
<section id="donate" class="p_4 pt-0">
<div class="container-xl">
  <div class="donate_1 row text-center mb-5">
    <div class="col-md-12">
	  <h5 class="col_oran fs-6 mt-3">+ DONATE TO HELP +</h5>
	  <h1 class="mb-0 font_50 mt-3">Make a Donation to <br> Help Community</h1>
	</div>
  </div>
  <div class="donate_2 row">
    <div class="col-md-4">
     <div class="donate_2l">
	   <div class="donate_2li">
	    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/5.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	 </div>
	   <div class="donate_2li1 p-4 border_1 border-top-0">
	     <h4><a class="col_blue a_tag" href="#">Become those who do</a></h4>
		 <p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
		 <h6 class="mb-3">Raised: <span class="fw-bold">$2410</span> <span class="float-end">Goal: <span class="fw-bold">$4000</span></span></h6>
		 <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
</div>
         <h6 class="mb-0 mt-4"><a class="button_1" href="#">Donate Now</a></h6>
	 </div>
	 </div>
	</div>
	<div class="col-md-4">
     <div class="donate_2l">
	   <div class="donate_2li">
	    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/6.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	 </div>
	   <div class="donate_2li1 p-4 border_1 border-top-0">
	     <h4><a class="col_blue a_tag" href="#">Donate Ngos</a></h4>
		 <p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
		 <h6 class="mb-3">Raised: <span class="fw-bold">$1400</span> <span class="float-end">Goal: <span class="fw-bold">$2000</span></span></h6>
		 <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
         <h6 class="mb-0 mt-4"><a class="button_1" href="#">Donate Now</a></h6>
	 </div>
	 </div>
	</div>
	<div class="col-md-4">
     <div class="donate_2l">
	   <div class="donate_2li">
	    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/7.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	 </div>
	   <div class="donate_2li1 p-4 border_1 border-top-0">
	     <h4><a class="col_blue a_tag" href="#">Feed Poors</a></h4>
		 <p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
		 <h6 class="mb-3">Raised: <span class="fw-bold">$2090</span> <span class="float-end">Goal: <span class="fw-bold">$3000</span></span></h6>
		 <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
</div>
         <h6 class="mb-0 mt-4"><a class="button_1" href="#">Donate Now</a></h6>
	 </div>
	 </div>
	</div>
  </div>
</div>
</section>

<section id="watch" class="p_4 pt-0">
<div class="container-xl">
  <div class="donate_1 row text-center mb-5">
    <div class="col-md-12">
	  <h5 class="col_oran fs-6 mt-3">+  WATCH VIDEO +</h5>
	  <h1 class="mb-0 font_50 mt-3">Our Live Broadcast</h1>
	</div>
  </div>
  <div class="watch_1 row">
    <div class="col-md-6 pe-0">
     <div class="watch_1l position-relative">
	   <div class="watch_1l1">
	    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/8.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	 </div>
	 <div class="watch_1l2 position-absolute text-center top-0 w-100 h-100 bg_back">
	     <span><a class="d-inline-block bg_oran text-white text-center hvr-grow" href="#"><i class="fa fa-play"></i></a></span>
	 </div>
	 </div>
	</div>
	<div class="col-md-6 ps-0">
     <div class="watch_1r">
	   <h6 class="col_oran">
October 9, 2021</h6>
<h2 class="mt-3 mb-3">When our power of choice</h2>
<p class="mb-0">We are a Temple that belives in Krishna and the followers and We are a Temple that belives in Krishna. This is where you should start Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod This is where you should start Lorem ipsum dolor sit amet consectetur</p>
	 </div>
	</div>
  </div>
  <div class="watch_2 row mt-5">
    <div class="col-md-3 col-sm-6">
     <div class="watch_2m">
	   <div class="watch_2l position-relative">
	   <div class="watch_2l1">
	    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/9.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	 </div>
	 <div class="watch_2l2 position-absolute text-center top-0 w-100 h-100 bg_back">
	     <span><a class="d-inline-block bg_oran text-white text-center hvr-grow" href="#"><i class="fa fa-play"></i></a></span>
	 </div>
	 </div>
	 <div class="watch_2l3 mt-3">
	    <h5 class="mb-0"><a class="col_blue" href="#">Lorem Amet</a></h5>
	 </div>
	 </div>
	</div>	
	<div class="col-md-3 col-sm-6">
     <div class="watch_2m">
	   <div class="watch_2l position-relative">
	   <div class="watch_2l1">
	    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/10.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	 </div>
	 <div class="watch_2l2 position-absolute text-center top-0 w-100 h-100 bg_back">
	     <span><a class="d-inline-block bg_oran text-white text-center hvr-grow" href="#"><i class="fa fa-play"></i></a></span>
	 </div>
	 </div>
	 <div class="watch_2l3 mt-3">
	    <h5 class="mb-0"><a class="col_blue" href="#">Dolor Porta</a></h5>
	 </div>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
     <div class="watch_2m">
	   <div class="watch_2l position-relative">
	   <div class="watch_2l1">
	    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/11.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	 </div>
	 <div class="watch_2l2 position-absolute text-center top-0 w-100 h-100 bg_back">
	     <span><a class="d-inline-block bg_oran text-white text-center hvr-grow" href="#"><i class="fa fa-play"></i></a></span>
	 </div>
	 </div>
	 <div class="watch_2l3 mt-3">
	    <h5 class="mb-0"><a class="col_blue" href="#">Ipsum Quis</a></h5>
	 </div>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
     <div class="watch_2m">
	   <div class="watch_2l position-relative">
	   <div class="watch_2l1">
	    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/12.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	 </div>
	 <div class="watch_2l2 position-absolute text-center top-0 w-100 h-100 bg_back">
	     <span><a class="d-inline-block bg_oran text-white text-center hvr-grow" href="#"><i class="fa fa-play"></i></a></span>
	 </div>
	 </div>
	 <div class="watch_2l3 mt-3">
	    <h5 class="mb-0"><a class="col_blue" href="#">Sem Nulla</a></h5>
	 </div>
	 </div>
	</div>
  </div>
</div>
</section>

<section id="minist" class="p_4 bg-light">
<div class="container-xl">
  <div class="donate_1 row mb-5">
    <div class="col-md-4">
     <div class="donate_1l">
	   	  <h5 class="col_oran fs-6 mt-3">+  MINISTRIES +</h5>
	  <h1 class="mb-0 font_50 mt-3">Our Ministries</h1>
	 </div>
	</div>
	<div class="col-md-8">
     <div class="donate_1r text-end">
	   	<ul class="nav nav-tabs mb-0">
<li class="nav-item d-inline-block">
<a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
<span class="d-md-block"> All</span>
</a>
</li>

<li class="nav-item d-inline-block">
<a href="#profile2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
<span class="d-md-block"> Temple</span>
</a>
</li>
<li class="nav-item d-inline-block">
<a href="#profile3" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
<span class="d-md-block"> Campus</span>
</a>
</li>

<li class="nav-item d-inline-block">
<a href="#profile4" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
<span class="d-md-block"> Relations</span>
</a>
</li>

<li class="nav-item d-inline-block">
<a href="#profile5" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
<span class="d-md-block"> Religion</span>
</a>
</li>
</ul>
	 </div>
	</div>
  </div>
  <div class="minist_1 row">
     <div class="tab-content">

<div class="tab-pane active" id="profile1">
      <div class="minist_1m row">
	    <div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/13.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Lorem’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/14.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Ipsum’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/15.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Dolor’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	  </div>
	  <div class="minist_1m row mt-4">
	    <div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/16.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Web Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/17.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Help Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/18.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Event Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	  </div>
	  <div class="minist_1m row mt-4">
	    <div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/19.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Sed’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/20.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Amet’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/21.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Temple Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	  </div>
</div>

<div class="tab-pane" id="profile2">
      <div class="minist_1m row">
	    <div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/19.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Sed’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/20.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Amet’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/21.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Temple Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	  </div>
</div>

<div class="tab-pane" id="profile3">
    <div class="minist_1m row">
	    <div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/16.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Web Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/17.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Help Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/18.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Event Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	  </div>
</div>

<div class="tab-pane" id="profile4">
      <div class="minist_1m row">
	    <div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/13.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Lorem’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/14.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Ipsum’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/15.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Dolor’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	  </div>
</div>

<div class="tab-pane" id="profile5">
    <div class="minist_1m row">
	    <div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/19.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Sed’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/20.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Amet’s Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div class="minist_1i position-relative">
	    <div class="minist_1i1">
		  <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/21.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		</div>
		<div class="minist_1i2 position-absolute top-0 p-3">
		  <span><a class="bg_oran text-white d-inline-block text-center" href="#"><i class="fa fa-plus"></i></a></span>
		</div>
		<div class="minist_1i3  p-3 bg_back position-absolute  w-100">
		  <h4><a class="text-white a_tag" href="#">Temple Ministry</a></h4>
		  
		</div>
	  </div>
	</div>
	  </div>
</div>

</div>
    
  </div>
</div>
</section>

<section id="team">
<div class="team_m">
    <div class="container-xl">
  <div class="donate_1 row text-center mb-5">
    <div class="col-md-12">
	  <h5 class="col_oran fs-6 mt-3">+  WHO +</h5>
	  <h1 class="mb-0 font_50 text-white mt-3">Our Volunteers</h1>
	</div>
  </div>
  <div class="team_1 row">
    <div class="col-md-3 col-sm-6">
     <div class="team_1i">
	   <div class="team_1i1 position-relative">
	     <div class="team_1i1i text-center">
	      <a href="#"><img src="{{asset('img/23.jpg')}}" class="rounded-circle" alt="abc"></a>
	   </div>
	   <div class="team_1i1i1 position-absolute w-100 text-end">
	     <span><a class="bg_blue text-white d-inline-block text-center rounded-circle hvr-forward" href="#"><i class="fa fa-plus"></i></a></span>
	   </div>
	   </div>
	   <div class="team_1i2 text-center mt-3">
	     <h6 class="col_oran">TEAM MEMBER</h6>
		 <h4 class="mb-0"><a class="text-white" href="#">Lorem Amet</a></h4>
	   </div>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
     <div class="team_1i">
	   <div class="team_1i1 position-relative">
	     <div class="team_1i1i text-center">
	      <a href="#"><img src="{{asset('img/24.jpg')}}" class="rounded-circle" alt="abc"></a>
	   </div>
	   <div class="team_1i1i1 position-absolute w-100 text-end">
	     <span><a class="bg_blue text-white d-inline-block text-center rounded-circle hvr-forward" href="#"><i class="fa fa-plus"></i></a></span>
	   </div>
	   </div>
	   <div class="team_1i2 text-center mt-3">
	     <h6 class="col_oran">TEAM MEMBER</h6>
		 <h4 class="mb-0"><a class="text-white" href="#">Nulla Sed</a></h4>
	   </div>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
     <div class="team_1i">
	   <div class="team_1i1 position-relative">
	     <div class="team_1i1i text-center">
	      <a href="#"><img src="{{asset('img/25.jpg')}}" class="rounded-circle" alt="abc"></a>
	   </div>
	   <div class="team_1i1i1 position-absolute w-100 text-end">
	     <span><a class="bg_blue text-white d-inline-block text-center rounded-circle hvr-forward" href="#"><i class="fa fa-plus"></i></a></span>
	   </div>
	   </div>
	   <div class="team_1i2 text-center mt-3">
	     <h6 class="col_oran">TEAM MEMBER</h6>
		 <h4 class="mb-0"><a class="text-white" href="#">Ipsum Quis</a></h4>
	   </div>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
     <div class="team_1i">
	   <div class="team_1i1 position-relative">
	     <div class="team_1i1i text-center">
	      <a href="#"><img src="{{asset('img/26.jpg')}}" class="rounded-circle" alt="abc"></a>
	   </div>
	   <div class="team_1i1i1 position-absolute w-100 text-end">
	     <span><a class="bg_blue text-white d-inline-block text-center rounded-circle hvr-forward" href="#"><i class="fa fa-plus"></i></a></span>
	   </div>
	   </div>
	   <div class="team_1i2 text-center mt-3">
	     <h6 class="col_oran">TEAM MEMBER</h6>
		 <h4 class="mb-0"><a class="text-white" href="#">Dolor Porta</a></h4>
	   </div>
	 </div>
	</div>
  </div>
</div> 
 </div>

</section>

<section id="testim" class="p_4">
<div class="container-fluid">
  <div class="testim_1 row">
    <div class="col-md-5">
     <div class="testim_1l px-5">
	   	  <h5 class="col_oran fs-6 mt-3">+   TESTIMONIALS +</h5>
	  <h1 class="mb-3 font_50 mt-3">What Our Members Say</h1>
	  <p class="mb-0">We are a Temple that belives in Krishna and the followers and We are a Temple that belives in Krishna. This is where you should start Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
	 </div>
	</div>
	<div class="col-md-7 pe-0">
	  <div class="testim_m position-relative">
	    <div class="testim_m1">
		  <div class="testim_1r bg_blue carousel_p px-4">
	   <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
	 <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="testim_1ri row">
	     <div class="col-md-12">
		   <span class="col_oran font_50 lh-1"><i class="fa fa-quote-right"></i></span>
		   <p class="text-white mt-3">Curabitur convallis enim at orci ullamcorper sagittis. Morbi porand gon nullalacu scelerisque in aliquam vitae, aliquam ut lectus. Nam utte mink Phasellus magna, efficitur finibus dictum auctor.</p>
		   <h5 class="mt-4 text-light">Lorem Amet</h5>
		 </div>
	   </div>
	   
    </div>
    <div class="carousel-item">
        <div class="testim_1ri row">
	     <div class="col-md-12">
		   <span class="col_oran font_50 lh-1"><i class="fa fa-quote-right"></i></span>
		   <p class="text-white mt-3">Curabitur convallis enim at orci ullamcorper sagittis. Morbi porand gon nullalacu scelerisque in aliquam vitae, aliquam ut lectus. Nam utte mink Phasellus magna, efficitur finibus dictum auctor.</p>
		   <h5 class="mt-4 text-light">Dolor Porta</h5>
		 </div>
	   </div>
    </div>
	<div class="carousel-item">
        <div class="testim_1ri row">
	     <div class="col-md-12">
		   <span class="col_oran font_50 lh-1"><i class="fa fa-quote-right"></i></span>
		   <p class="text-white mt-3">Curabitur convallis enim at orci ullamcorper sagittis. Morbi porand gon nullalacu scelerisque in aliquam vitae, aliquam ut lectus. Nam utte mink Phasellus magna, efficitur finibus dictum auctor.</p>
		   <h5 class="mt-4 text-light">Augue Nulla</h5>
		 </div>
	   </div>
    </div>
  </div>
</div>
	 </div>
		</div>
		<div class="testim_m2 position-absolute w-100">
		  <div class="testim_1rm2i row mx-0 px-2">
		    <div class="col-md-4 px-2">
			  <div class="testim_1rm2il">
			    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/65.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
			  </div>
			</div>
			<div class="col-md-4 px-2">
			  <div class="testim_1rm2im">
			    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/28.png')}}"  class="w-100" alt="img25"></a>
			</figure>
			</div>
			  </div>
			</div>
			<div class="col-md-4 px-2">
			  <div class="testim_1rm2il">
			    <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/66.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
     
	</div>
  </div>
</div>
</section>

<section id="shop" class="p_4 pt-0">
<div class="container-xl">
  <div class="donate_1 row text-center mb-5">
    <div class="col-md-12">
	  <h5 class="col_oran fs-6 mt-3">+ TRENDING ONE  +</h5>
	  <h1 class="mb-0 font_50 mt-3">Temple Products</h1>
	</div>
  </div>
  <div class="shop_1 row">
    <div class="col-md-3 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/30.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="#"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-recycle"></i></a></li>
		  </ul>
	    </div>
	    </div>
	    <div class="shop_1im2 mt-3">
	     <span class="font_13 text-warning">
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star-half-alt"></i>
		 </span>
		 <h5 class="mt-3"><a href="#">Lorem Porta</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$40.00</span> $37.00</h6>
	 </div>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/31.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="#"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-recycle"></i></a></li>
		  </ul>
	    </div>
	    </div>
	    <div class="shop_1im2 mt-3">
	     <span class="font_13 text-warning">
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star-half-alt"></i>
		 </span>
		 <h5 class="mt-3"><a href="#">Dolor Quis</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$48.00</span> $39.00</h6>
	 </div>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/32.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="#"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-recycle"></i></a></li>
		  </ul>
	    </div>
	    </div>
	    <div class="shop_1im2 mt-3">
	     <span class="font_13 text-warning">
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star-half-alt"></i>
		 </span>
		 <h5 class="mt-3"><a href="#">Sem Augue</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$50.00</span> $47.00</h6>
	 </div>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/33.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="#"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="#"><i class="fa fa-recycle"></i></a></li>
		  </ul>
	    </div>
	    </div>
	    <div class="shop_1im2 mt-3">
	     <span class="font_13 text-warning">
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star-half-alt"></i>
		 </span>
		 <h5 class="mt-3"><a href="#">Eget Sit</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$53.00</span> $43.00</h6>
	 </div>
	 </div>
	</div>
  </div>
</div>
</section>

<section id="blog">
<div class="team_m">
    <div class="container-xl">
  <div class="donate_1 row text-center mb-5">
    <div class="col-md-12">
	  <h5 class="col_oran fs-6 mt-3">+  BLOG  +</h5>
	  <h1 class="mb-0 font_50 text-white mt-3">News Feed</h1>
	</div>
  </div>
  <div class="blog_1 row">
     <div class="col-md-4">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/35.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 29, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="#">Expecting new  issued cases</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/23.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="#">Lorem Porta</a></h6>
	   </div>
	   </div>
	 </div>
	 <div class="col-md-4">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/36.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 26, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="#">All we’ve discovered by now</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/24.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="#">Dolor Amet</a></h6>
	   </div>
	   </div>
	 </div>
	 <div class="col-md-4">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/37.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 30, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="#">We Who Believe In God</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/25.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="#">Ipsum Quis</a></h6>
	   </div>
	   </div>
	 </div>
  </div>
</div> 
 </div>

</section>  

@endsection