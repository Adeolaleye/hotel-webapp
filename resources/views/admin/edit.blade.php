@extends('layouts.main2') 
@section('title','Contact')
 
@section('content')
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <h1>Register Room</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('addedrooms') }}">All Rooms</a></li>
                <li>Edit {{ $room->name }}</li>
            </ol>
        </div>
    </div>
</div> 
<main id="booking_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="booking_advanced">
                            <div class="main_title a_left upper">
                                <h2>Edit <span style="color:#0a6f44">{{ $room->name }}</span></h2>
                            </div>
                            <!-- ========== BOOKING FORM ========== -->
                            <div class="row">
                                <div class="col-md-12">
                                @include('includes.alerts')
                                </div>
                                <form method="post" action="{{route('updateroom', $room->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Name</label>
                                            <input name="name" value="{{ $room->name }}" type="text" class="form-control" placeholder="Room Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Name</label>
                                            <select name="type" type="text" class="form-control" required data-header="Choose Room Type">
                                                <option value="{{ $room->type }}">{{ $room->type }}</option>
                                                <option value="1">Single Room</option>
                                                <option value="2">Two Rooms</option>
                                                <option value="3">Many Rooms</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Price</label>
                                            <input name="price" value="{{ $room->price }}" type="number" class="form-control" placeholder="Room Price" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Main Picture</label>
                                            <input class="form-control" name="feature_image" type="file">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Other Pictures</label>
                                            <input class="form-control" name="other_images" type="file">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Facilities</label>
                                            <input class="form-control" value="{{ $room->facilities}}" name="facilities" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Available Units</label>
                                            <input class="form-control" value="{{ $room->unit }}" name="unit" type="number">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Description</label>
                                            <textarea class="form-control" value="{{ $room->description }}" name="description">

                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt20">
                                        <button type="submit" class="button btn_blue"> SUBMIT
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection