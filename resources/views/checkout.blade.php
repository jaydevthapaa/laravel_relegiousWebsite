<!-- <div> -->
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
<!-- </div> -->

@extends('layout.app')
@section('content')
 <div class="main_2">
	<section id="center" class="center_check">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
					  <div class="center_o1l">
					    <h1 class="font_60 text-white">Checkout</h1>
						<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="center_o1r text-end">
					    <h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="#">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran text-uppercase">Checkout</span></h6>
					  </div>
					</div>
				</div>
			</div>
		</div>   
	</section>
 </div>
</div>


<section id="checkout" class="p_4 pb-0">
 <div class="container-xl">
  <div class="checkout_1 row">
   <div class="col-md-8">
    <div class="checkout_1l shadow_box bg-white p-4">
	  <div class="checkout_1l1">
	   <h4 class="mb-4">Billing Details</h4>
	  </div>
	  <div class="checkout_1l2">
	    <div class="checkout_1l2i row">
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="First Name" type="text">
		  </div>
		 </div>
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="Last Name" type="text">
		  </div>
		 </div>
		</div>
		<div class="checkout_1l2i row mt-4">
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="Company Name" type="text">
		  </div>
		 </div>
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="Country" type="text">
		  </div>
		 </div>
		</div>
		<div class="checkout_1l2i row mt-4">
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="City" type="text">
		  </div>
		 </div>
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="State / Province" type="text">
		  </div>
		 </div>
		</div>
		<div class="checkout_1l2i row mt-4">
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="Street" type="text">
		  </div>
		 </div>
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="Postcode" type="text">
		  </div>
		 </div>
		</div>
		<div class="checkout_1l2i row mt-4">
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="Phone" type="text">
		  </div>
		 </div>
		 <div class="col-md-6">
		  <div class="checkout_1l2il">
		   <input class="form-control font_14 border-0 bg_light" placeholder="Email" type="text">
		  </div>
		 </div>
		</div>
	  </div>
	  <div class="checkout_1l1 mt-4">
	   <h4 class="mb-4">Additional Information</h4>
	  </div>
	  <div class="checkout_1l2">
		<div class="checkout_1l2i row">
		 <div class="col-md-12">
		  <div class="checkout_1l2il">
		   <textarea placeholder="Other Notes" class="form-control font_14 form_text border-0 bg_light"></textarea>
		  </div>
		 </div>
		</div>
	  </div>
	  <div class="checkout_1l1 mt-4">
	   <h4 class="mb-4">Payment Method</h4>
	   
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
  <label class="form-check-label" for="flexRadioDefault2">
   Direct bank transfer
  </label>
</div>
<div class="form-check mt-3">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Check payments
  </label>
</div>
<div class="form-check mt-3">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
  <label class="form-check-label" for="flexRadioDefault3">
    Cash on delivery
  </label>
</div>
<h6 class="mb-0 mt-4"><a class="button_1" href="#"> Place Order</a></h6>
	  </div>
	</div>
   </div>
   <div class="col-md-4">
    <div class="checkout_1r">
	  <ul class="drop_cart">
						<li>
						 <div class="drop_1i row">
						  <div class="col-md-6 col-6">
						   <div class="drop_1il"><h5 class="fs-6">2 ITEMS</h5></div>
						  </div>
						  <div class="col-md-6 col-6">
						   <div class="drop_1il text-end"><h5 class="fs-6"><a href="{{ url('/cart') }}">VIEW CART</a></h5></div>
						  </div>
						 </div>
						 <div class="drop_1i1 row">
						  <div class="col-md-6 col-6">
						   <div class="drop_1i1l"><h6 class="fs-6"><a href="#">Nulla Quis</a> <br> <span class="d-inline-block mt-1 font_15">1x - $89.00</span></h6></div>
						  </div>
						  <div class="col-md-4 col-4">
						   <div class="drop_1i1r"><a href="#"><img src="{{asset('img/32.png')}}" class="w-100" alt="abc"></a></div>
						  </div>
						  <div class="col-md-2 col-2">
						   <div class="drop_1i1l text-end"><h6> <span><i class="fa fa-remove"></i></span></h6></div>
						  </div>
						 </div>
						 <div class="drop_1i1 row">
						  <div class="col-md-6 col-6">
						   <div class="drop_1i1l"><h6 class="fs-6"><a href="#">Eget Nulla</a> <br> <span class="d-inline-block mt-1 font_14">1x - $49.00</span></h6></div>
						  </div>
						  <div class="col-md-4 col-4">
						   <div class="drop_1i1r"><a href="#"><img src="{{asset('img/33.png')}}" class="w-100" alt="abc"></a></div>
						  </div>
						  <div class="col-md-2 col-2">
						   <div class="drop_1i1l text-end"><h6> <span><i class="fa fa-remove"></i></span></h6></div>
						  </div>
						 </div>
						 <div class="drop_1i2 row">
						  <div class="col-md-6 col-6">
						   <div class="drop_1il"><h5 class="fs-6">TOTAL</h5></div>
						  </div>
						  <div class="col-md-6 col-6">
						   <div class="drop_1il text-end"><h5 class="fs-5 col_oran">$142.00</h5></div>
						  </div>
						 </div>
						 <div class="drop_1i3 text-center row">
						  <div class="col-md-12 col-12">
						    <ul class="mb-0">
							 <li class="d-inline-block mx-1"><a class="button px-3 pt-2 pb-2 font_14" href="#">View Order</a></li>
							 <li class="d-inline-block mx-1"><a class="button_1 px-3 pb-2 pt-2 font_14" href="#">Checkout</a></li>
							</ul>
						  </div>
						 </div>
						</li>
					  </ul>
	</div>
   </div>
  </div>  
 </div>
</section>
 
@endsection