@extends('layouts.main2') 
@section('title','Rooms')
 
@section('content')
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <h1>Rooms</h1>
            <ol class="breadcrumb">
                <li><a href="">Home</a></li>
                <li>Complete Booking</li>
            </ol>
        </div>
    </div>
</div> 
<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div id="booking_advanced">
                    <div class="main_title a_left">
                        <h4>Complete your booking for <strong>{{ $roomtype }}</strong> (&#8358;{{ number_format($roomprice) }})</h4>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <div class="row">
                        <form id="booking_form_advanced" method="post" action="{{ route('booknow')}}">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" name="email" value="{{$data['email']}}" type="email" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="phone" type="text" class="form-control" placeholder="Your Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Room Type</label>
                                    <div class="form_select">
                                        <select name="type" class="form-control">
                                        <option value="{{$data['type']}}">{{$roomtype}}</option>
                                            @foreach ($rooms as $room )
                                            <option value="{{ $room->id }}" {{ old('roomtype') == $room->id ? 'selected' : '' }} data-subtext="<span class='label label-info'>&#8358;{{ number_format($room->price) }} / night</span>">{{ $room->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Arrival
                                        <a href="#" title="Arrival" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check In from 11:00 am"></a>
                                    </label>
                                    <div class="form_date">
                                        <input type="date" id="start" name="arrival_date" class=" form-control" placeholder="Departure" value="{{$data['arrival_date']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Departure
                                        <a href="#" title="Departure" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check Out from 12:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <div class="form_date">
                                        <input type="date" id="start" name="departure_date" class=" form-control" placeholder="Departure" value="{{$data['departure_date']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Adults
                                        <a href="#" title="Adults" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+18 years"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <div class="form_select">
                                        <select name="adult_no" class="form-control">
                                            <option value="{{$data['adult_no']}}">{{$data['adult_no']}}</option>
                                            <option value="0">0</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Children
                                        <a href="#" title="Children" data-toggle="popover" data-placement="top" data-trigger="hover"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <div class="form_select">
                                        <select name="children_no" class="form-control">
                                        <option value="{{$data['children_no']}}">{{$data['children_no']}}</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Your Comments</label>
                                    <textarea class="form-control" name="comments"  style="height: 150px;" placeholder="Your Comments..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> BOOK NOW
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="special_offers">
                    <article class="room">
                        <figure>
                            <div class="price"> &#8358;{{ number_format($roomprice) }} <span>/ night</span></div>
                                <img src="{{ '/'.$roomfeature_image }}" class="img-responsive" alt="Image">
                        </figure>
                    </article>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
