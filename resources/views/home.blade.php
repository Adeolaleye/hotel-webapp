@extends('layouts.main') 
@section('title','Home') 

@section('content')
<!-- ========== ROOMS ========== -->
<section class="white_bg" id="rooms">
    <div class="container">
        <div class="main_title mt_wave mt_yellow a_center">
            <h2 style="font-family: cursive;">OUR <span style="color: rgb(2, 49, 2);"> ROOMS</span></h2>
        </div>
            <p class="main_description a_center" style="font-size:20px;font-family: segoui">
            Furnished with the finest materials and designed to induce immense relaxation.
            </p>
        <div class="row">
            @foreach ($rooms as $room)
            @if ($room->type == 3) 
            <div class="col-md-6">
                <article class="room">
                    <figure>
                        <div class="price"> &#8358;{{ number_format($room->price) }} <span>/ night</span></div>
                        <a class="hover_effect h_blue h_link" href="{{ route('roomdetails', $room->id) }}">
                            <img src="{{ '/'.$room->feature_image }}" class="img-responsive" alt="Image">
                        </a>
                        <figcaption>
                            <h4 class="upper"><a href="{{ route('roomdetails', $room->id) }}">{{ $room->name }}</a></h4>
                            <span class="f_right"><a href="{{ route('roomdetails', $room->id) }}" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                            
                        </figcaption>
                    </figure>
                </article>
            </div>
            @endif
            @endforeach
        </div> 
    </div>
</section>
<section class="white_bg" id="rooms">
    <div class="container">
        <div class="main_title mt_wave mt_yellow a_center">
            <h2 style="font-family: cursive;">SINGLE <span style="color: rgb(2, 49, 2);"> ROOMS</span></h2>
        </div>
            <p class="main_description a_center"></p>
        <div class="row">
            @foreach ($rooms as $room)
            @if ($room->type == 1)    
            <div class="col-md-4">
                <article class="room">
                    <figure>
                        <div class="price"> &#8358;{{ number_format($room->price) }} <span>/ night</span></div>
                        <a class="hover_effect h_blue h_link" href="{{ route('roomdetails', $room->id) }}">
                            <img src="{{ '/'.$room->feature_image }}" class="img-responsive" alt="Image">
                        </a>
                        <figcaption>
                            <h4 class="upper"><a href="{{ route('roomdetails', $room->id) }}">{{ $room->name }}</a></h4>
                            <span class="f_right"><a href="{{ route('roomdetails', $room->id) }}" class="button btn_sm btn_blue">VIEW DETAILS</a></span>
                        </figcaption>
                    </figure>
                </article>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<section class="lightgrey_bg" id="features">
    <div class="container">
        <div class="main_title mt_wave mt_yellow a_center">
            <h2><span style="color: rgb(2, 49, 2);font-family:cursive; "> </span>FACILITIES</h2>
        </div>
        <p class="main_description a_center"></p>

        <div class="row">
            <div class="col-md-7">
                <div data-slider-id="features" id="features_slider" class="owl-carousel">
                    <div><img src="{{asset('images/privatebar.jpg')}}" class="img-responsive" alt="Image"></div>
                    <div><img src="{{asset('images/gym.jpg')}}" class="img-responsive" alt="Image"></div>
                    <div><img src="{{asset('images/gazebo.jpg')}}" class="img-responsive" alt="Image"></div>
                    <div><img src="{{asset('images/swim.jpg')}}" class="img-responsive" alt="Image"></div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="owl-thumbs" data-slider-id="features">
                    <div class="owl-thumb-item">
                        <span class="media-left"><i class="flaticon-food"></i></span>
                        <div class="media-body">
                            <h5>Private Bar</h5>
                            <p> Unwind with the best drinks.</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left"><i class="flaticon-person"></i></span>
                        <div class="media-body">
                            <h5>Gym &amp; Sauna</h5>
                            <p>Sweat it out at our state of the art gym and sauna spots.</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left"><i class="flaticon-business"></i></span>
                        <div class="media-body">
                            <h5>Gazeebo</h5>
                            <p>Beautiful shade for the sunny days</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left"><i class="flaticon-beach"></i></span>
                        <div class="media-body">
                            <h5>Swimming Pool</h5>
                            <p>Have fun, take a dip, make a splash!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection