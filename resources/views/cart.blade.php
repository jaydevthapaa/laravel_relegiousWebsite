<!-- <div> -->
    <!-- An unexamined life is not worth living. - Socrates -->
<!-- </div> -->


@extends('layout.app')
@section('content')
 
 <div class="main_2">
	<section id="center" class="center_cart">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
					  <div class="center_o1l">
					    <h1 class="font_60 text-white">Shopping Cart</h1>
						<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="center_o1r text-end">
					    <h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="#">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran text-uppercase">Shopping Cart</span></h6>
					  </div>
					</div>
				</div>
			</div>
		</div>   
	</section>
 </div>
</div>


<section id="cart" class="p_4 pb-0">
 <div class="container-xl">
  <div class="cart_1 row">
   <div class="col-md-12">
     <div class="table-responsive">
	    <table class="table align-middle">
		  <tbody>
		  <tr>
		   <td class="fw-bold">Product</td>
		   <td class="fw-bold">Quantity</td>
		   <td class="fw-bold">Price</td>
		   <td class="fw-bold">Total</td>
		    <td class="fw-bold"></td>
		  </tr>
		  <tr>
		   <td>
		     <img src="{{asset('img/31.png')}}" alt="abc" class="float-start me-3">
			 <h5 class="fs-4 mt-3 "><a href="#">Stracciatella</a></h5>
			 <p class="mb-0 font_14">Adipiscing elit Integer nec odio Praesent libero</p>
		   </td>
	<td>
		     <input type="number" min="1" value="1" class="form-control rounded-0" placeholder="Qty" style="width:80px; height:54px;">
		   </td>
		   <td>
		     <h6 class="mb-0 fw-normal">$15.00</h6>
		   </td>
		   <td>
		     <h6 class="mb-0 fw-bold">$15.00</h6>
		   </td>
		   <td>
		     <span class="btn_cross"><a class="d-inline-block bg_light rounded-circle text-center" href="#"><i class="fa fa-remove"></i></a></span>
		   </td>
		  </tr>
		  <tr>
		   <td>
		     <img src="{{asset('img/32.png')}}" alt="abc" class="float-start me-3">
			 <h5 class="fs-4 mt-3"><a href="#">Chevrefrit au miel</a></h5>
			 <p class="mb-0 font_14">Sed cursus ante dapibus diam Sed nisi Nulla quis</p>
		   </td>
	<td>
		     <input type="number" min="1" value="1" class="form-control rounded-0" placeholder="Qty" style="width:80px; height:54px;">
		   </td>
		   <td>
		     <h6 class="mb-0 fw-normal">$12.00</h6>
		   </td>
		   <td>
		     <h6 class="mb-0 fw-bold">$12.00</h6>
		   </td>
		   <td>
		     <span class="btn_cross"><a class="d-inline-block bg_light rounded-circle text-center" href="#"><i class="fa fa-remove"></i></a></span>
		   </td>
		  </tr>
		  <tr>
		   <td>
		     <img src="{{asset('img/33.png')}}" alt="abc" class="float-start me-3">
			 <h5 class="fs-4  mt-3"><a href="#">Carpaccio de daurade</a></h5>
			 <p class="mb-0 font_14">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
		   </td>
	<td>
		     <input type="number" min="1" value="1" class="form-control rounded-0" placeholder="Qty" style="width:80px; height:54px;">
		   </td>
		   <td>
		     <h6 class="mb-0  fw-normal">$8.99</h6>
		   </td>
		   <td>
		     <h6 class="mb-0 fw-bold">$8.99</h6>
		   </td>
		   <td>
		     <span class="btn_cross"><a class="d-inline-block bg_light rounded-circle text-center" href="#"><i class="fa fa-remove"></i></a></span>
		   </td>
		  </tr>
		</tbody></table>
	  </div>
   </div>
  </div>	
  <div class="cart_2 row mt-3">
   <div class="col-md-6">
    <div class="cart_2l"></div>
   </div>
   <div class="col-md-6">
    <div class="cart_2r">
	  <h6 class="fw-bold">Subtotal: <span class="float-end  text-muted">$35.99</span></h6>
	  <h6 class="fw-bold mt-3">Estimated shipping: <span class="float-end   text-muted">$6</span></h6>
	  <h4 class="mt-3">Total: <span class="float-end">$41.99</span></h4><hr>
	  <div class="cart_2ri row">
	   <div class="col-md-6">
	    <div class="cart_2ril">
		 <h6 class="mb-0 fw-bold mt-3"><a href="#">Continue shopping</a></h6>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="cart_2rir text-end">
		  <h6 class="mb-0"><a class="button_1" href="{{ url('/checkout') }}"> Checkout</a></h6>
		</div>
	   </div>
	  </div><hr class="mb-0">
	</div>
   </div>
  </div>
 </div>
</section>

@endsection