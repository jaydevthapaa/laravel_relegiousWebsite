


@extends('layout.app')
@section('content')
 
 <div class="main_2">
	<section id="center" class="center_event">
		<div class="center_om bg_back">
			<div class="container-xl">
				<div class="row center_o1">
					<div class="col-md-9">
					  <div class="center_o1l">
					    <h1 class="font_60 text-white">Events</h1>
						<p class="text-white p-3 mt-3 mb-0">We are a Temple that belives in God and the followers <br> and We are a Temple that belives in Krishna</p>
					  </div>
					</div>
					<div class="col-md-3">
					  <div class="center_o1r text-end">
					    <h6 class="d-inline-block text-muted bg-white mb-0 p-4  fw-bold"><a class="text-muted a_tag" href="#">HOME</a> <span class="mx-2 fw-normal">|</span> <span class="col_oran">EVENTS</span></h6>
					  </div>
					</div>
				</div>
			</div>
		</div>   
	</section>
 </div>
</div>

<section id="event" class="p_4 pb-0">
    <div class="container-xl">

        <div class="row">

            @forelse($events as $event)

            <div class="col-lg-4 col-md-6 mb-5"> 

                <div class="event_1i position-relative mb-5">

                    <div class="event_1i1 overflow-hidden rounded_20">
                        <img src="{{ asset('storage/'.$event->image) }}"
							class="w-100 rounded_20"
							style="height:300px; object-fit:cover;"
							alt="{{ $event->title }}">
                    </div>

                    <div class="event_1i2 p-4 bg-white shadow_box"
					style="margin:-45px auto 0;
							width:85%;
							position:relative;
							z-index:10;">

                        <ul class="font_14">

                            <li class="d-inline-block">
                                <i class="fa fa-map-marker col_oran me-1"></i>
                                {{ $event->location }}
                            </li>

                            <li class="d-inline-block mx-2 text-muted">|</li>

                            <li class="d-inline-block font_13">
                                <i class="fa fa-clock col_oran me-1"></i>

                                {{ \Carbon\Carbon::parse($event->start_time)->format('h:i A') }}

                            </li>

                        </ul>

                        <h5 class="mb-2">
                            <a href="{{ url('/event/'.$event->id) }}">
                                {{ $event->title }}
                            </a>
                        </h5>

                    </div>

                    <div class="event_1i3 position-absolute"
					 style="top:15px; left:15px;">

                        <span class="d-inline-block text-white bg_blue pt-2 pb-2 text-center">

                            {{ \Carbon\Carbon::parse($event->event_date)->format('d') }}

                            <br>

                            {{ \Carbon\Carbon::parse($event->event_date)->format('M') }}

                        </span>

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12 text-center">

                <h4>No Events Available</h4>

            </div>

            @endforelse

        </div>

        <div class="mt-5 d-flex justify-content-center">

            {{ $events->links() }}

        </div>

    </div>
</section>

@endsection