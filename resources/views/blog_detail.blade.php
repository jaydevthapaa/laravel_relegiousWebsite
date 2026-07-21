<!-- <div> -->
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
<!-- </div> -->

@extends('layout.app')
@section('content') 
 <div class="main_2">
	<section id="center" class="center_blogdt">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
					  <div class="center_o1l">
					    <h1 class="font_60 text-white">Blog Detail</h1>
						<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="center_o1r text-end">
					    <h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="#">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">BLOG DETAIL</span></h6>
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
		   <div class="blog_dt p-4 border_1">
		     <div class="blog_dt1">
			   <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{ url('/blog/'.$blog->id) }}"><img src="{{asset('storage/'.$blog->image) }}" class="w-100" alt="404"></a>
			</figure>
			</div>
			   <ul class="font_14 mt-3">
		    <li class="d-inline-block"><i class="fa fa-om col_oran me-1"></i> Temple, Pastor</li>
			<li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-calendar col_oran me-1"></i>  May 26, 2024</li>
			 <li class="d-inline-block mx-2 text-muted">|</li>
			 <li class="d-inline-block font_13"><i class="fa fa-comment col_oran me-1"></i>  2 Comments</li>
		  </ul>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
		  <h2>{{ $blog->title }}</h2>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the <a class="col_oran" href="#">printing and typesetting</a> industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		  <h4>A cleansing hot shower or bath</h4>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p><hr>
		  <h4>Setting the mood with incense</h4>
		  <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		  <h4>Where can I get some?</h4>
		  <ul class="mb-0 flex_box mt-3 ms-3">
<li class="d-flex"><span><i class="fa fa-check col_oran me-3 align-middle"></i></span> Lorem ipsum dolor sit amet, consectur</li>
<li class="d-flex mt-3"><span><i class="fa fa-check col_oran me-3 align-middle"></i></span> Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do</li>
<li class="d-flex mt-3"><span><i class="fa fa-check col_oran me-3 align-middle"></i></span> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi</li>
<li class="d-flex mt-3"><span><i class="fa fa-check col_oran me-3 align-middle"></i></span> Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor </li>
</ul>
<div class="blog_dt1 bg-light p-4 mt-4 text-center">
<h5 class="col_oran mb-3">By Lorem Quis</h5>
 <p class="fs-5 mb-0 fw-bold text-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s</p>
</div>
<div class="blog_pgdt1i1 mt-4">
		    <img src="{{asset('img/19.jpg')}}" alt="abc" class="float-start me-3">
		<p>
		{{ $blog->description }}
		</p>	
		  </div>
		  <div class="blog_1dt2i row">
		    <div class="col-md-7">
			 <div class="blog_1dt2il">
			   <ul class="mb-0 tags">
				 <li class="d-inline-block"><a href="{{ url('/blog/'.$blog->id) }}">Wedding</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog/'.$blog->id) }}">Flower</a></li>
				 <li class="d-inline-block"><a href="{{ url('/blog/'.$blog->id) }}">Dress</a></li>
				 </ul>
			 </div>
			</div>
			<div class="col-md-5">
			 <div class="blog_1dt2ir mt-1 text-end">
			    <ul class="mb-0">
				 <li class="d-inline-block"><a href="{{ url('/blog/'.$blog->id) }}">Share On:</a></li>
				 <li class="d-inline-block ms-3"><a href="{{ url('/blog/'.$blog->id) }}"><i class="fa-brands fa-facebook"></i></a></li>
				 <li class="d-inline-block ms-3"><a href="{{ url('/blog/'.$blog->id) }}"><i class="fa-brands fa-twitter"></i></a></li>
				 <li class="d-inline-block ms-3"><a href="{{ url('/blog/'.$blog->id) }}"><i class="fa-brands fa-pinterest"></i></a></li>
				 <li class="d-inline-block ms-3"><a href="{{ url('/blog/'.$blog->id) }}"><i class="fa-brands fa-instagram"></i></a></li>
				 </ul>
			 </div>
			</div>
		  </div>
			 </div><hr>
			 <div class="blog_dt2 pt-3 pb-3">
			    <div class="blog_dt2i row">
			     <div class="col-md-6">
				   <div class="blog_dt2il">
				     <h5 class="col_oran">Previous Post</h5>
					 <h5 class="mb-0 fs-6"><a href="#">We Who Believe In God</a></h5>
				   </div>
				 </div>
				 <div class="col-md-6">
				   <div class="blog_dt2il text-end">
				     <h5 class="col_oran">Next Post</h5>
					 <h5 class="mb-0 fs-6"><a href="#">Expecting new Love issued</a></h5>
				   </div>
				 </div>
			 </div>
			 </div><hr>
			 <div class="blog_dt3 mt-4">
			    <h3 class="head_1">Related Posts</h3>
				<div class="blog_1 row mt-4">
     <div class="col-md-6">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/15.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white shadow_box">
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
	 <div class="col-md-6">
	   <div class="blog_1i">
	       <div class="blog_1i1">
	         <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="#"><img src="{{asset('img/16.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
	   </div>
	   <div class="blog_1i2 p-4 bg-white shadow_box">
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
  </div>
			 </div>
			 <div class="blog_dt4 mt-4">
			    <h3 class="head_1 mb-4">2 Comments</h3>
				<div class="blog_dt4i row">
	    <div class="col-md-2 col-2">
		 <div class="blog_dt4il">
		   <img alt="abc" class="w-100 rounded-circle" src="{{asset('img/23.jpg')}}">
		 </div>
		</div>
		<div class="col-md-10 col-10">
		 <div class="blog_dt4ir">
		   <h6 class="font_14 mt-2">
<i class="fa fa-user col_oran me-1 align-middle"></i> Lorem Amet <i class="fa fa-clock col_oran me-1 ms-3 align-middle"></i> Dec 17, 2023</h6>
<hr>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<h6 class="mb-0 mt-4"><a class="button p-2 px-4" href="#">Reply <i class="fa fa-arrow-right ms-1"></i></a></h6>
		 </div>
		</div>
	   </div>
	            <div class="blog_dt4i row mt-4">
	    <div class="col-md-2 col-2">
		 <div class="blog_dt4il">
		   <img alt="abc" class="w-100 rounded-circle" src="{{asset('img/24.jpg')}}">
		 </div>
		</div>
		<div class="col-md-10 col-10">
		 <div class="blog_dt4ir">
		   <h6 class="font_14 mt-2">
<i class="fa fa-user col_oran me-1 align-middle"></i> Dolor Porta <i class="fa fa-clock col_oran me-1 ms-3 align-middle"></i> Dec 19, 2023</h6>
<hr>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<h6 class="mb-0 mt-4"><a class="button p-2 px-4" href="#">Reply <i class="fa fa-arrow-right ms-1"></i></a></h6>
		 </div>
		</div>
	   </div>
			 </div>
			 <div class="blog_dt5 mt-4">
			    <h3 class="head_1 mb-4">Leave a Reply</h3>
				<div class="blog_dt5i bg-light p-4">
				  <p>Your email address will not be published. Required fields are marked *</p>
				  <div class="input-group border_1 bg-white">
			<input type="text" class="form-control font_14 bg-transparent border-0" placeholder="Name*">
			<span class="input-group-btn">
				<button class="btn btn-primary bg-transparent border-0 rounded-0 p-3 col_oran" type="button">
					<i class="fa fa-user"></i> </button>
			</span>
		</div>
		          <div class="input-group border_1 bg-white mt-3">
			<input type="text" class="form-control font_14 bg-transparent border-0" placeholder="Email*">
			<span class="input-group-btn">
				<button class="btn btn-primary bg-transparent border-0 rounded-0 p-3 col_oran" type="button">
					<i class="fa fa-envelope"></i> </button>
			</span>
		</div>
		<div class="input-group border_1 bg-white mt-3">
			<input type="text" class="form-control font_14 bg-transparent border-0" placeholder="Website">
			<span class="input-group-btn">
				<button class="btn btn-primary bg-transparent border-0 rounded-0 p-3 col_oran" type="button">
					<i class="fa fa-globe"></i> </button>
			</span>
		</div>
		<textarea class="form-control  mt-3 form_text" placeholder="Enter your comment here..."></textarea>
		<div class="form-check mt-3 font_14">
<input class="form-check-input" type="checkbox" value="">
<label class="form-check-label" for="flexCheckDefault">
Save my name, email, and website in this browser for the next time I comment.
</label>
</div>
<h6 class="mb-0 mt-4 center_sm"><a class="button" href="#">Post Comment <i class="fa fa-arrow-right ms-1"></i></a></h6>
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
				    <li class="d-inline-block"><a class="text-muted a_tag" href="{{  url('/blog/'.$blog->id)  }}"><i class="fa-brands fa-facebook-f"></i></a></li>
					 <li class="d-inline-block ms-1"><a class="text-muted a_tag" href="{{  url('/blog/'.$blog->id)  }}"><i class="fa-brands fa-instagram"></i></a></li>
					  <li class="d-inline-block ms-1"><a class="text-muted a_tag" href="{{  url('/blog/'.$blog->id)  }}"><i class="fa-brands fa-pinterest"></i></a></li>
					   <li class="d-inline-block ms-1"><a class="text-muted a_tag" href="{{  url('/blog/'.$blog->id)  }}"><i class="fa-brands fa-linkedin"></i></a></li>
					    <li class="d-inline-block ms-1"><a class="text-muted a_tag" href="{{ url('/blog/'.$blog->id)  }}"><i class="fa-brands fa-twitter"></i></a></li>
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
			<a href="{{  url('/blog/'.$blog->id)  }}"><img src="{{asset('img/19.jp')}}g" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-8 col-8">
		   <div class="blog_1r1ir">
		     <h6 class="text-muted  font_13"><i class="fa fa-calendar col_oran me-1"></i> 06 February, 2024</h6>
			 <h5 class="mb-0 fs-6"><a href="{{  url('/blog/'.$blog->id)  }}">Expecting new Love issued cases</a></h5>
		   </div>
		  </div>
		</div><hr>
		        <div class="blog_1r1i row">
		  <div class="col-md-4 col-4">
		   <div class="blog_1r1il">
		       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{  url('/blog/'.$blog->id)  }}"><img src="{{asset('img/20.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-8 col-8">
		   <div class="blog_1r1ir">
		     <h6 class="text-muted  font_13"><i class="fa fa-calendar col_oran me-1"></i> 07 February, 2024</h6>
			 <h5 class="mb-0 fs-6"><a href="{{  url('/blog/'.$blog->id)  }}">All we’ve discovered by now</a></h5>
		   </div>
		  </div>
		</div><hr>
		<div class="blog_1r1i row">
		  <div class="col-md-4 col-4">
		   <div class="blog_1r1il">
		       <div class="grid clearfix">
			<figure class="effect-jazz mb-0">
			<a href="{{  url('/blog/'.$blog->id)  }}"><img src="{{asset('img/21.jpg')}}" class="w-100" alt="img25"></a>
			</figure>
			</div>
		   </div>
		  </div>
		  <div class="col-md-8 col-8">
		   <div class="blog_1r1ir">
		     <h6 class="text-muted  font_13"><i class="fa fa-calendar col_oran me-1"></i> 09 February, 2024</h6>
			 <h5 class="mb-0 fs-6"><a href="{{  url('/blog/'.$blog->id)  }}">We Who Believe In Krishna</a></h5>
		   </div>
		  </div>
		</div>
		   </div>
		   <div class="shop_pg1r1 border_1 p-4 mt-4">
		        <h4 class="head_1 mb-4"> CATEGORIES</h4>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{  url('/blog/'.$blog->id)  }}">Holy Book <span class="float-end">(2)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{  url('/blog/'.$blog->id)  }}">Candle Holder <span class="float-end">(4)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{  url('/blog/'.$blog->id)  }}">Glass <span class="float-end">(5)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{  url('/blog/'.$blog->id)  }}">Piano <span class="float-end">(3)</span></a></h6>
				<h6 class="font_14"><a class="bg-light d-block p-3" href="{{  url('/blog/'.$blog->id)  }}">Stand <span class="float-end">(7)</span></a></h6>
				<h6 class="font_14 mb-0"><a class="bg-light d-block p-3" href="{{  url('/blog/'.$blog->id)  }}">Uncategorized <span class="float-end">(1)</span></a></h6>
		   </div>
		   <div class="blog_pg1r1 border_1 p-4 mt-4 center_sm">
		        <h4 class="head_1 mb-4">NEVER MISS OUT</h4>
				<div class="shop_1dt1irnr">
				  <ul class="mb-0">
	    <li class="d-inline-block"><a class="d-block text-center" href="{{  url('/blog/'.$blog->id)  }}"><i class="fa-brands fa-facebook-f"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="{{  url('/blog/'.$blog->id) }}"><i class="fa-brands fa-pinterest"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="{{  url('/blog/'.$blog->id)  }}"><i class="fa-brands fa-instagram"></i></a></li>
		<li class="d-inline-block ms-1"><a class="d-block text-center" href="{{  url('/blog/'.$blog->id)  }}"><i class="fa-brands fa-linkedin"></i></a></li>
	  </ul>
				 </div>
		   </div>
		   <div class="shop_pg1r1 border_1 p-4 mt-4">
		        <h4 class="head_1 mb-4">PRODUCT TAGS</h4>
				<ul class="mb-0 tags">
				 <li class="d-inline-block"><a href="{{  url('/blog/'.$blog->id) }}">Candle</a></li>
				 <li class="d-inline-block"><a href="{{  url('/blog/'.$blog->id)  }}">Temple</a></li>
				 <li class="d-inline-block"><a href="{{  url('/blog/'.$blog->id)  }}">Book</a></li>
				 <li class="d-inline-block"><a href="{{  url('/blog/'.$blog->id)  }}">Stand</a></li>
				 <li class="d-inline-block"><a href="{{  url('/blog/'.$blog->id)  }}">Wood</a></li>
				 <li class="d-inline-block"><a href="{{  url('/blog/'.$blog->id)  }}">Bottle</a></li>
				 <li class="d-inline-block"><a href="{{  url('/blog/'.$blog->id)  }}">Lorem</a></li>
				 <li class="d-inline-block"><a href="{{  url('/blog/'.$blog->id)  }}">Porta</a></li>
				 </ul>
		   </div>
		   </div>
		 </div>
	   </div>
	</div>
   </section>

@endsection