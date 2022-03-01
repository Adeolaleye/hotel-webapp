@extends('layouts.main2') 
@section('title','Contact')
 
@section('content')
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <h1>Room Details</h1>
            <ol class="breadcrumb">
                <li><a href="">Home</a></li>
                <li>Room Name</li>
            </ol>
        </div>
    </div>
</div> 
<main id="room_page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="slider">
                    <div id="slider-larg" class="owl-carousel image-gallery">
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/r1.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/r1.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/s4.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/s4.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/s3.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/s3.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room4.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room4.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room5.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room5.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room6.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room6.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room7.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room7.jpg" alt="Image">
                            </a>
                        </div>
                        <!-- ITEM -->
                        <div class="item  lightbox-image-icon">
                            <a href="images/rooms/single-room/single-room8.jpg" class="hover_effect h_lightbox h_blue">
                                <img class="img-responsive" src="images/rooms/single-room/single-room8.jpg" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div id="thumbs" class="owl-carousel">
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/r1.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/r2.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/s3.jpg" alt="Image"></div>
                        <!-- ITEM -->
                        <div class="item"><img class="img-responsive" src="images/rooms/s4.jpg" alt="Image"></div>
                        </div>
                </div>
                
                <div class="main_title t_style a_left s_title mt50">
                    <div class="c_inner">
                        <h2 class="c_title">ROOM SERVICES</h2>
                    </div>
                </div>
                <div class="room_facilitys_list">
                    <div class="all_facility_list">
                        <div class="col-sm-4 nopadding">
                            <ul class="list-unstyled">
                                <h4>INDOOR</h4>
                                <li><i class="fa fa-check"></i>KITCHEN </li>
                                <li><i class="fa fa-check"></i>DINNING AREA</li>
                                <li><i class="fa fa-check"></i>MINI BAR</li>
                                <li><i class="fa fa-check"></i>Room Service</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <ul class="list-unstyled">
                                <h4>OUTDOOR</h4>
                                <li ><i class="fa fa-check"></i>SWIMMING POOL</li>
                                <li ><i class="fa fa-check"></i>GAZEBOS</li>
                                <li ><i class="fa fa-check"></i> BAR</li>
                                <li ><i class="fa fa-check"></i> KARAOKE</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 nopadding_left">
                            
                        </div>
                    </div>
                </div>
                <div class="similar_rooms">
                    <div class="main_title t_style5 l_blue s_title a_left">
                        <div class="c_inner">
                    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <aside class="widget">
                        <div class="vbf">
                            <h2 class="form_title"><i class="fa fa-calendar"></i> BOOK ONLINE</h2>
                            <form id="booking-form" class="inner">
                                <div class="form-group">
                                    <input class="form-control" name="booking-name" placeholder="Enter Your Name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="booking-email" placeholder="Enter Your Email Address" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="booking-phone" placeholder="Enter Your Phone Number" type="text">
                                </div>
                                <div class="form-group">
                                    <div class="form_select">
                                        <select name="booking-roomtype" class="form-control" title="Select Room Type" data-header="Room Type" disabled>
                                            <option value="Single Room" selected>Single Room</option>
                                            <option value="Double Room">Double Room</option>
                                            <option value="Deluxe Room">Deluxe Room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                    <div class="form_select">
                                        <select name="booking-adults" class="form-control md_noborder_right" title="Adults" data-header="Adults">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                    <div class="form_select">
                                        <select name="booking-children" class="form-control" title="Children" data-header="Children">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                    <div class="input-group">
                                        <div class="form_date">
                                            <input type="date" id="start" name="booking-checkin" class=" form-control" placeholder="Arrival" value="2022-02-01" min="2018-01-01" max="2030-12-31">
                                                </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                    <div class="input-group">
                                        <div class="form_date">
                                            <input type="date" id="start" name="booking-checkout" class=" form-control" placeholder="Departure" value="2022-02-01" min="2018-01-01" max="2030-12-31">

                                        </div>
                                    </div>
                                </div>
                                <button class="button btn_lg btn_blue btn_full" type="submit">BOOK A ROOM NOW</button>
                                
                            </form>
                        </div>
                    </aside>
                    <aside class="widget">
                        <h4>NEED HELP?</h4>
                        <div class="help">
                            If you have any question please don't hesitate to contact us
                            <div class="phone"><i class="fa  fa-phone"></i><a href="tel:18475555555"> 1-888-123-4567 </a></div>
                            <div class="email"><i class="fa  fa-envelope-o "></i><a href="mailto:info@mailto:mcarthursnest.com">info@mcarthursnest.com</a></div>
                        </div>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection