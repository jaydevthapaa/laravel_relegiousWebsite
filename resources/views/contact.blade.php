<!-- <div> -->
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
<!-- </div> -->


@if(session('success'))
<div class="alert alert-warning alert-dismissible fade show"
     id="sucessAlert"
     role="alert">

    {{ session('success') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"></button>
</div>
@endif

<script>
	setTimeout(function(){
		let alert = document.getElementById('sucessAlert');

		if (alert){
			let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
			bsAlert.close();
		}
	}, 3000);
</script>

@extends('layout.app')
@section('content')
 
 <div class="main_2">
	<section id="center" class="center_cont">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
					  <div class="center_o1l">
					    <h1 class="font_60 text-white">Contact Us</h1>
						<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="center_o1r text-end">
					    <h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="#">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran text-uppercase">Contact Us</span></h6>
					  </div>
					</div>
				</div>
			</div>
		</div>   
	</section>
 </div>
</div>

<section id="contact" class="p_4 pb-0">
 <div class="container-xl">
   <div class="row contact_1">
    <div class="col-md-4">
     <div class="contact_1l mx-3">
	  <div class="contact_1li row">
		<div class="col-md-2">
		 <div class="contact_1lil">
		  <span class="col_oran"><i class="fa fa-map-signs"></i></span>
		 </div>
		</div>
		<div class="col-md-10">
		 <div class="contact_1lir">
		   <h4>Office address</h4>
		   <p class="font_16 mb-0">Semper Agency Network 30 Westbourne Nulla West Bengal Z3 9MH</p>
		 </div>
		</div>
	  </div>
	  <div class="contact_1li mt-4 row">
		<div class="col-md-2">
		 <div class="contact_1lil">
		  <span class="col_oran"><i class="fa fa-phone-square"></i></span>
		 </div>
		</div>
		<div class="col-md-10">
		 <div class="contact_1lir">
		   <h4>Telephone number</h4>
		   <p class="font_16 mb-0">(123) 456-7890 <br> (123) 456-7890</p>
		 </div>
		</div>
	  </div>
	  <div class="contact_1li mt-4 row">
		<div class="col-md-2">
		 <div class="contact_1lil">
		  <span class="col_oran"><i class="fa fa-envelope"></i></span>
		 </div>
		</div>
		<div class="col-md-10">
		 <div class="contact_1lir">
		   <h4>Mail address</h4>
		   <p class="font_16 mb-0">info@gmail.com <br> info@gmail.com</p>
		 </div>
		</div>
	  </div>
	</div>
	
   </div>
    <div class="col-md-8">
     <div class="contact_1r">
	  <div class="contact_1ri row">
	   <div class="col-md-6">
		
	   @if ($errors->any())
		<div class="alert alert-danger">

    		<ul class="mb-0">
       			 @foreach($errors->all() as $error)
         		   <li>{{ $error }}</li>
      			  @endforeach
   			 </ul>

		</div>
		@endif
		<form action="{{ url('/contact') }}" method="POST">
			@csrf
			<div class="contact_1ril">
			 <h6>Name (required)</h6>
			 <input class="form-control" 
			 placeholder="Your Name*" 
			 type="text" 
			 name="name"
			 value="{{ old('name')}}">
			</div>
		   </div>
		   <div class="col-md-6">
			<div class="contact_1ril">
			 <h6>Email adress (required)</h6>
			 <input class="form-control" 
			 	placeholder="Mail*"
			 	type="email"
			  	name="email" 
			   	value="{{ old('email') }}">
			</div>
		   </div>
		  </div>
		  <div class="contact_1ri mt-4 row">
		   <div class="col-md-6">
			<div class="contact_1ril">
			 <h6>Phone (required)</h6>
			 <input class="form-control" 
			 placeholder="Your Phone" 
			 type="text" 
			 name="phone" 
			 value="{{ old('phone') }}">
			</div>
		   </div>
		   <div class="col-md-6">
			<div class="contact_1ril">
			 <h6>Services (required)</h6>
			 <select class="form-select" name="service">
				<option value="">Select Services</option>

				<option value="StartUp Business"
					{{ old('service') == 'StartUp Business' ? 'selected' : '' }}>
					StartUp Business
				</option>

				<option value="Business Growth"
					{{ old('service') == 'Business Growth' ? 'selected' : '' }}>
					Business Growth
				</option>

				<option value="Success Fullfill"
					{{ old('service') == 'Success Fullfill' ? 'selected' : '' }}>
					Success Fullfill
				</option>
			</select>
			</div>
		   </div>
		  </div>
		  <div class="contact_1ri mt-4 row">
		   <div class="col-md-12">
			<div class="contact_1ril">
			 <h6>Your message</h6>
			 <textarea class="form-control area" placeholder="Type Message*" name="message">{{ old('message') }}</textarea>
			 <h6 class="mb-0 mt-4">
			  <button type="submit" class="button">
					Send Message
				</button>
			</form>
			</h6>
			</div>
		   </div>
	  </div>
	 </div>
	</div>
  </div>
   <div class="row contact_2 mt-4">
    <div class="col-md-12">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" height="450" style="border:0; width:100%;" allowfullscreen=""></iframe>
	</div>
   </div>
</div></section>

@endsection