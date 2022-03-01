@extends('layouts.main2') 
@section('title','Rooms')
 
@section('content')
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <h1>Rooms</h1>
            <ol class="breadcrumb">
                <li><a href="">Home</a></li>
                <li>Rooms</li>
            </ol>
        </div>
    </div>
</div> 
<main>

    <div class="container">
        @foreach ($rooms as $room)
        <article class="room_list">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <a href="" class="hover_effect h_link h_blue"><img src="{{ '/'.$room->feature_image }}" alt="Image"></a>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="room_details">
                    <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                        <h3><a href=""> {{ $room->name }} </a></h3>
                        <p>{{ $room->description }}</p>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Mcarthurs Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                        <div class="room_price_inner">
                            <span class="room_price_number"> &#8358;{{ number_format($room->price) }}  </span>
                            <small class="upper"> per night </small>
                            <a href="{{ route('roomdetails', $room->id) }}" class="button  btn_blue btn_full upper" style="background-color:  rgb(2, 49, 2);">Book Now</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
        
    </div>
</main>
@endsection