
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

			@foreach($blogs as $blog)

     <div class="col-md-6 mb-4">
	   <div class="blog_1i">

	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blogs/'.$blog->id) }}">
				<img src="{{asset('storage/'.$blog->image) }}" 
					class="w-100" alt="{{$blog->title}}"></a>
			</figure>
			</div>
	   </div>

	   <div class="blog_1i2 p-4 bg-white shadow_box">

	     <ul class="font_14">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i> {{ $blog->created_at->format('M d, Y') }} </li>
		  </ul>

		  <h5 class="mt-3"><a href="{{ url('/blogs/'.$blog->id) }}">{{ $blog->title }}</a></h5>
		  <p class="mt-3">{{ \Illuminate\Support\Str::limit($blog->description, 100) }}</p>

		  <h6 class="fw-bold mb-0"><img src="{{asset('img/23.jpg')}}" width="40" height="40" class="rounded-circle me-2" alt="abc"> <span class="text-muted fw-normal">By</span> <a href="{{ url('/blogs/'.$blog->id) }}">Admin</a></h6>
	   </div>
	   </div>
	 </div>

	 @endforeach
	