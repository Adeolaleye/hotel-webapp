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
        <article class="room_list">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <figure>
                    <div class="room_list_slider owl-carousel">
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/d1.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('mages/rooms/d2.jpg')}}i" alt="Image"></a>
                        </div>
                        <div class="item">
                        <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/d3.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/d4.jpg')}}" alt="Image"></a>
                        </div>
                    </div>
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="room_details">
                    <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                        <h3><a href=""> 5 bedroom villa </a></h3>
                        <p>mnmnbkhkhkh</p>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Mcarthurs Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                        <div class="room_price_inner">
                            <span class="room_price_number"> &#8358;600.000  </span>
                            <small class="upper"> per night </small>
                            <a href="" class="button  btn_blue btn_full upper" style="background-color:  rgb(2, 49, 2);">Book Now</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="room_list">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <figure>
                    <div class="room_list_slider owl-carousel">
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/p1.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/p2.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                        <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/p3.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/p4.jpg')}}" alt="Image"></a>
                        </div>
                    </div>
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="room_details">
                    <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                        <h3><a href="">2 BED ROOM PENT HOUSE - </a></h3>
                        <p>khkhkhkk</p>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Mcarthurs Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                        <div class="room_price_inner">
                            <span class="room_price_number"> &#8358;500.000  </span>
                            <small class="upper"> per night </small>
                            <a href="" class="button  btn_blue btn_full upper" style="background-color:  rgb(2, 49, 2);" >Book Now</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="room_list">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <figure>
                    <div class="room_list_slider owl-carousel">
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/r1.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/r2.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                        <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/r3.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/r4.jpg')}}" alt="Image"></a>
                        </div>
                    </div>
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="room_details">
                    <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                        <h3><a href="">EMERALD SINGLE </a></h3>
                        <p></p>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Mcarthurs Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                        <div class="room_price_inner">
                            <span class="room_price_number"> &#8358;170.000  </span>
                            <small class="upper"> per night </small>
                            <a href="" class="button  btn_blue btn_full upper" style="background-color:  rgb(2, 49, 2);;">Book Now</a>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        </article>
        <!-- ITEM -->
        <article class="room_list">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <figure>
                    <div class="room_list_slider owl-carousel">
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/r1.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/r2.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                        <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/r3.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/r4.jpg')}}" alt="Image"></a>
                        </div>
                    </div>
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="room_details">
                    <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                        <h3><a href=""> RUBY SINGLE - </a></h3>
                        <p>khkhmhkhkh</p>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Mcarthurs Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                        <div class="room_price_inner">
                            <span class="room_price_number"> &#8358;170.000  </span>
                            <small class="upper"> per night </small>
                            <a href="" class="button  btn_blue btn_full upper" style="background-color:  rgb(2, 49, 2);;">Book Now</a>
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </article> <!-- ITEM -->
        
        <!-- ITEM -->
        
        <!-- ITEM -->
        <article class="room_list">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <figure>
                    <div class="room_list_slider owl-carousel">
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/S1.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/S2.jpg')}}" alt="Image"></a>
                            
                        </div>
                        <a href="" class="hover_effect h_link h_blue"><img src="{{asset('images/rooms/S3.jpg')}}" alt="Image"></a>
                    </div>
                    </figure>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="room_details">
                    <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                        <h3><a href=""> SAPHIRRE SINGLE - </a></h3>
                        <p>mngmgjkghjkyj</p>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title="Mcarthurs Restaurant"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable Channel" data-original-title="Plasma TV"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                        <div class="room_price_inner">
                            <span class="room_price_number"> &#8358;170.000  </span>
                            <small class="upper"> per night </small>
                            <a href="" class="button  btn_blue btn_full upper" style="background-color:  rgb(2, 49, 2);">Book Now</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </article>  
    </div>
</main>
@endsection