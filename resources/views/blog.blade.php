<!-- <div> -->
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
<!-- </div> -->

@extends('layout.app')
@section('content')
 
 <div class="main_2">
	<section id="center" class="center_blog">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
					  <div class="center_o1l">
					    <h1 class="font_60 text-white">Blog</h1>
						<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="center_o1r text-end">
					    <h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="#">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">BLOG</span></h6>
					  </div>
					</div>
				</div>
			</div>
		</div>   
	</section>
 </div>
</div>

<section id="blog_pg" class="p_4 pb-0">
    <div class="container-xl">
	   <div class="blog_pg1 row">
	     <div class="col-md-8">
		   <div class="blog_pg1l">
		     <div class="blog_1 row">
     <div class="col-md-6">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/13.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white shadow_box">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 29, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="{{ url('/blog_detail') }}">Expecting new  issued cases</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/23.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="{{ url('/blog_detail') }}">Lorem Porta</a></h6>
	   </div>
	   </div>
	 </div>
	 <div class="col-md-6">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/14.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white shadow_box">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 26, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="{{ url('/blog_detail') }}">All we’ve discovered by now</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/24.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="{{ url('/blog_detail') }}">Dolor Amet</a></h6>
	   </div>
	   </div>
	 </div>
  </div>
             <div class="blog_1 row mt-4">
     <div class="col-md-6">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/15.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white shadow_box">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 29, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="{{ url('/blog_detail') }}">Expecting new  issued cases</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/23.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="{{ url('/blog_detail') }}">Lorem Porta</a></h6>
	   </div>
	   </div>
	 </div>
	 <div class="col-md-6">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/16.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white shadow_box">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 26, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="{{ url('/blog_detail') }}">All we’ve discovered by now</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/24.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="{{ url('/blog_detail') }}">Dolor Amet</a></h6>
	   </div>
	   </div>
	 </div>
  </div>
             <div class="blog_1 row mt-4">
     <div class="col-md-6">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/17.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white shadow_box">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 29, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="{{ url('/blog_detail') }}">Expecting new  issued cases</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/23.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="{{ url('/blog_detail') }}">Lorem Porta</a></h6>
	   </div>
	   </div>
	 </div>
	 <div class="col-md-6">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/18.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white shadow_box">
	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 26, 2024</li>
		  </ul>
		  <h5 class="mt-3"><a href="{{ url('/blog_detail') }}">All we’ve discovered by now</a></h5>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard</p>
		  <h6 class="fw-bold mb-0"><img src="{{asset('img/24.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="{{ url('/blog_detail') }}">Dolor Amet</a></h6>
	   </div>
	   </div>
	 </div>
  </div>
              <div class="pages  text-center mt-4 row">
		      <div class="col-md-12">
			    <ul class="mb-0">
			<li><a href="{{ url('/blog_detail') }}"><i class="fa fa-chevron-left"></i></a></li>
			<li><a class="act" href="{{ url('/blog_detail') }}">1</a></li>
			<li><a href="{{ url('/blog_detail') }}">2</a></li>
			<li><a href="{{ url('/blog_detail') }}">3</a></li>
			<li><a href="{{ url('/blog_detail') }}">4</a></li>
			<li><a href="{{ url('/blog_detail') }}">5</a></li>
			<li><a href="{{ url('/blog_detail') }}">6</a></li>
			<li><a href="{{ url('/blog_detail') }}"><i class="fa fa-chevron-right"></i></a></li>
		   </ul>
			  </div>
	       </div>
		   </div>
		 </div>
		 <div class="col-md-4">
		   <div class="blog_pg1r">
		     <div class="blog_pg1r1 border_1 p-4">
		        <h4 class="head_1 mb-4">ABOUT ME</h4>
				<div class="blog_pg1r1i text-center">
				  <img src="{{asset('img/25.jpg')}}" width="100" height="100" class="rounded-circle" alt="abc">
				  <h5 class="mt-3">Dolor Porta</h5>
				  <p>"Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit"</p>
				  <ul class="mb-0">
				    <li class="d-inline-block"><a class="text-muted a_tag" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
					 <li class="d-inline-block ms-1"><a class="text-muted a_tag" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-instagram"></i></a></li>
					  <li class="d-inline-block ms-1"><a class="text-muted a_tag" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-pinterest"></i></a></li>
					   <li class="d-inline-block ms-1"><a class="text-muted a_tag" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-linkedin"></i></a></li>
					    <li class="d-inline-block ms-1"><a class="text-muted a_tag" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-twitter"></i></a></li>
				   </ul>
				</div>
		   </div>
		     <div class="shop_pg1r1 border_1 p-4 mt-4">
		        <h4 class="head_1 mb-4">SEARCH</h4>
				<div class="input-group">
			<input type="text" class="form-control font_14" placeholder="Search Keyword">
			<span class="input-group-btn">
				<button class="btn btn-primary bg_oran border-0 rounded-0 p-3 px-4" type="button">
					<i class="fa fa-search"></i> </button>
			</span>
		</div>
		   </div>
		   <div class="blog_pg1r1 border_1 p-4 mt-4">
		        <h4 class="head_1 mb-4">RECENT POSTS</h4>
				<div class="blog_1r1i row">
		  <div class="col-md-4 col-4">
		   <div class="blog_1r1il">
		       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/19.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-8 col-8">
		   <div class="blog_1r1ir">
		     <h6 class="text-muted  font_13"><i class="fa fa-calendar col_oran me-1"></i> 06 February, 2024</h6>
			 <h5 class="mb-0 fs-6"><a href="{{ url('/blog_detail') }}">Expecting new Love issued cases</a></h5>
		   </div>
		  </div>
		</div><hr>
		        <div class="blog_1r1i row">
		  <div class="col-md-4 col-4">
		   <div class="blog_1r1il">
		       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/20.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-8 col-8">
		   <div class="blog_1r1ir">
		     <h6 class="text-muted  font_13"><i class="fa fa-calendar col_oran me-1"></i> 07 February, 2024</h6>
			 <h5 class="mb-0 fs-6"><a href="{{ url('/blog_detail') }}">All we’ve discovered by now</a></h5>
		   </div>
		  </div>
		</div><hr>
		<div class="blog_1r1i row">
		  <div class="col-md-4 col-4">
		   <div class="blog_1r1il">
		       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog_detail') }}"><img src="{{asset('img/21.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-8 col-8">
		   <div class="blog_1r1ir">
		     <h6 class="text-muted  font_13"><i class="fa fa-calendar col_oran me-1"></i> 09 February, 2024</h6>
			 <h5 class="mb-0 fs-6"><a href="{{ url('/blog_detail') }}">We Who Believe In Krishna</a></h5>
		   </div>
		  </div>
		</div>
		   </div>
		   <div class="shop_pg1r1 border_1 p-4 mt-4">
		        <h4 class="head_1 mb-4"> CATEGORIES</h4>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/blog_detail') }}">Holy Book <span class="float-end">(2)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/blog_detail') }}">Candle Holder <span class="float-end">(4)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/blog_detail') }}">Glass <span class="float-end">(5)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/blog_detail') }}">Piano <span class="float-end">(3)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/blog_detail') }}">Stand <span class="float-end">(7)</span></a></h6>
				<h6 class="font_14 mb-0"><a class="bg-light d-block p-3" href="{{ url('/blog_detail') }}">Uncategorized <span class="float-end">(1)</span></a></h6>
		   </div>
		   <div class="blog_pg1r1 border_1 p-4 mt-4 center_sm">
		        <h4 class="head_1 mb-4">NEVER MISS OUT</h4>
				<div class="shop_1dt1irnr">
				  <ul class="mb-0">
	    <li class="d-inline-block"><a class="d-block text-center" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-pinterest"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-instagram"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="{{ url('/blog_detail') }}"><i class="fa-brands fa-linkedin"></i></a></li>
	  </ul>
				 </div>
		   </div>
		   <div class="shop_pg1r1 border_1 p-4 mt-4">
		        <h4 class="head_1 mb-4">PRODUCT TAGS</h4>
				<ul class="mb-0 tags">
				 <li class="d-inline-block"><a href="{{ url('/blog_detail') }}">Candle</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog_detail') }}">Temple</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog_detail') }}">Book</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog_detail') }}">Stand</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog_detail') }}">Wood</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog_detail') }}">Bottle</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog_detail') }}">Lorem</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog_detail') }}">Porta</a></li>
				 </ul>
		   </div>
		   </div>
		 </div>
	   </div>
	</div>
   </section>

@endsection