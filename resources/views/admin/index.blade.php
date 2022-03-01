@extends('layouts.main2') 
@section('title','Contact')
 
@section('content')
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <h1>All Rooms</h1>
            <ol class="breadcrumb">
                <li><a href="">Home</a></li>
                <li>All Rooms</li>
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
                                <h2>All Rooms</h2>
                                <a href="{{ route('addroom') }}" class="button btn_blue pull-right">Add New Room</a>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb20">
                                    <table class="table table-striped">
                                        <thead>
                                            
                                            <tr>
                                                <th>#</th>
                                                <th>Room Name</th>
                                                <th>Price(&#x20A6;)</th>
                                                <th>Feature Images</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                            $i = 1;
                                            @endphp
                                            @foreach ($rooms as $room) 
                                            <tr>
                                                <td>{{ $counter }}</td>
                                                <td>{{ $room->name }}</td>
                                                <td>{{ number_format($room->price) }}</td>
                                                <td><img width="40px" src="{{ '/'.$room->feature_image }}"></td>
                                                <td>
                                                    <a class="button btn_blue mb10" href="{{ route('editroom', $room->id) }}">Edit Room</a>
                                                    <form method="post" action="{{ route('destroyroom', $room->id) }}">
                                                    @csrf
                                                    <button class="button btn_blue">Delete Room</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection