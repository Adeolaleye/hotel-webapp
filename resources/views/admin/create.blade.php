@extends('layouts.main2') 
@section('title','Contact')
 
@section('content')
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <h1>Register Room</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('addedrooms') }}">All Rooms</a></li>
                <li>Add Room</li>
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
                                <h2>Add Rooms</h2>
                                <a href="{{ route('addedrooms') }}" class="button btn_blue pull-right">All Rooms</a>
                            </div>
                            <!-- ========== BOOKING FORM ========== -->
                            <div class="row">
                            <div class="col-md-12">
                            @include('includes.alerts')
                            </div>
                                <form method="post" action="{{ route('createroom') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Name</label>
                                            <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Room Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Name</label>
                                            <select name="type" type="text" class="form-control" required data-header="Choose Room Type">
                                                <option value="1"{{ old('type') == '1' ? 'selected' : '' }}>Single Room</option>
                                                <option value="2"{{ old('type') == '2' ? 'selected' : '' }}>Two Rooms</option>
                                                <option value="3"{{ old('type') == '3' ? 'selected' : '' }}>Many Rooms</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Price</label>
                                            <input name="price" value="{{ old('price') }}" type="number" class="form-control" placeholder="Room Price" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Main Picture</label>
                                            <input class="form-control" name="feature_image" type="file" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Other Pictures</label>
                                            <input class="form-control" name="other_images" type="file">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Facilities</label>
                                            <input class="form-control" name="facilities" type="text">
                                        </div>
                                    </div> -->
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Available Units</label>
                                            <input class="form-control" value="{{ old('unit') }}" name="unit" type="number">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb20">
                                        <div class="form-group">
                                            <label>Room Description</label>
                                            <textarea value="{{ old('description') }}" class="form-control" name="description">

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