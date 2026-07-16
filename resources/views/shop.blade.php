<!-- <div> -->
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
<!-- </div> -->



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
					    <h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="#">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">PRODUCTS</span></h6>
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
		        <p class="mb-0 text-black">Showing 1–6 of 20 results</p>
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
    <div class="col-md-6 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/47.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-recycle"></i></a></li>
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
		 <h5 class="mt-3"><a href="{{ url('/detail') }}">Lorem Porta</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$40.00</span> $37.00</h6>
	 </div>
	 </div>
	</div>
	<div class="col-md-6 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/48.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-recycle"></i></a></li>
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
		 <h5 class="mt-3"><a href="{{ url('/detail') }}">Dolor Quis</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$48.00</span> $39.00</h6>
	 </div>
	 </div>
	</div>
  </div>
  <div class="shop_1 row mt-4">
    <div class="col-md-6 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/49.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-recycle"></i></a></li>
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
		 <h5 class="mt-3"><a href="{{ url('/detail') }}">Sem Augue</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$50.00</span> $47.00</h6>
	 </div>
	 </div>
	</div>
	<div class="col-md-6 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/50.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-recycle"></i></a></li>
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
		 <h5 class="mt-3"><a href="{{ url('/detail') }}">Eget Sit</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$53.00</span> $43.00</h6>
	 </div>
	 </div>
	</div>
  </div>
  <div class="shop_1 row mt-4">
    <div class="col-md-6 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/51.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-recycle"></i></a></li>
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
		 <h5 class="mt-3"><a href="{{ url('/detail') }}">Sem Augue</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$50.00</span> $47.00</h6>
	 </div>
	 </div>
	</div>
	<div class="col-md-6 col-sm-6">
     <div class="shop_1im text-center border_1 p-4 hvr-curl-top-right">
	    <div class="shop_1im1 position-relative">
	     <div class="shop_1im1i">
	       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/52.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	    </div>
		<div class="shop_1im1i1 position-absolute w-100 top-0">
	      <ul class="mb-0">
		    <li class="d-inline-block"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-eye"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-shopping-basket"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-heart"></i></a></li>
			<li class="d-inline-block ms-1"><a class="hvr-grow" href="{{ url('/detail') }}"><i class="fa fa-recycle"></i></a></li>
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
		 <h5 class="mt-3"><a href="{{ url('/detail') }}">Eget Sit</a></h5>
		 <h6 class="mb-0 mt-3 col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$53.00</span> $43.00</h6>
	 </div>
	 </div>
	</div>
  </div>
  <div class="pages  text-center mt-4 row">
		      <div class="col-md-12">
			    <ul class="mb-0">
			<li><a href="{{ url('/detail') }}"><i class="fa fa-chevron-left"></i></a></li>
			<li><a class="act" href="{{ url('/detail') }}">1</a></li>
			<li><a href="{{ url('/detail') }}">2</a></li>
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
				<div class="input-group">
			<input type="text" class="form-control font_14" placeholder="Search Keyword">
			<span class="input-group-btn">
				<button class="btn btn-primary bg_oran border-0 rounded-0 p-3 px-4" type="button">
					<i class="fa fa-search"></i> </button>
			</span>
		</div>
		   </div>
		       <div class="shop_pg1r1 border_1 p-4 mt-4 center_sm">
		        <h4 class="head_1 mb-4">FILTER BY PRICE</h4>
				<label for="customRange3" class="form-label">Range 1% to 100%</label>
<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
<h6 class="mb-0 mt-3"><a class="button" href="{{ url('/detail') }}">Filter</a></h6>
		   </div>
		   <div class="shop_pg1r1 border_1 p-4 mt-4">
		        <h4 class="head_1 mb-4"> CATEGORIES</h4>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/detail') }}"Holy Book <span class="float-end">(2)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/detail') }}"Candle Holder <span class="float-end">(4)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/detail') }}"Glass <span class="float-end">(5)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/detail') }}"Piano <span class="float-end">(3)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{ url('/detail') }}"Stand <span class="float-end">(7)</span></a></h6>
				<h6 class="font_14 mb-0"><a class="bg-light d-block p-3" href="{{ url('/detail') }}"Uncategorized <span class="float-end">(1)</span></a></h6>
		   </div>
		   <div class="shop_pg1r1 border_1 p-4 mt-4">
		        <h4 class="head_1 mb-4"> LATEST PRODUCTS</h4>
				<div class="shop_pg1r1i row">
		  <div class="col-md-3 col-3">
		   <div class="shop_pg1r1il">
		       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/30.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-9 col-9">
		   <div class="shop_pg1r1ir">
	      <span class="font_13 text-warning">
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star-half-alt"></i>
		 </span>
		 <h5 class="mt-2"><a href="{{ url('/detail') }}">Sem Augue</a></h5>
		 <h6 class="mb-0  col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$50.00</span> $47.00</h6>
		   </div>
		  </div>
		</div><hr>
		       <div class="shop_pg1r1i row">
		  <div class="col-md-3 col-3">
		   <div class="shop_pg1r1il">
		       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/31.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-9 col-9">
		   <div class="shop_pg1r1ir">
	      <span class="font_13 text-warning">
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star-half-alt"></i>
		 </span>
		 <h5 class="mt-2"><a href="{{ url('/detail') }}">Nulla Quis</a></h5>
		 <h6 class="mb-0  col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$53.00</span> $42.00</h6>
		   </div>
		  </div>
		</div><hr>
		<div class="shop_pg1r1i row">
		  <div class="col-md-3 col-3">
		   <div class="shop_pg1r1il">
		       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/detail') }}"><img src="{{asset('img/32.png')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-9 col-9">
		   <div class="shop_pg1r1ir">
	      <span class="font_13 text-warning">
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star"></i>
		  <i class="fa fa-star-half-alt"></i>
		 </span>
		 <h5 class="mt-2"><a href="{{ url('/detail') }}"Dolor Amet</a></h5>
		 <h6 class="mb-0  col_oran fw-bold"><span class="text-decoration-line-through fw-normal text-muted me-1">$60.00</span> $40.00</h6>
		   </div>
		  </div>
		</div>
		   </div>
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
				 <li class="d-inline-block"><a href="{{ url('/detail') }}"Porta</a></li>
				 </ul>
		   </div>
		   </div>
		 </div>
	   </div>
	</div>
   </section>

@endsection