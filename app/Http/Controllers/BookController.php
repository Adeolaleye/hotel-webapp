<?php

namespace App\Http\Controllers;
use App\Room;
use App\Booking;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all(); 
        $counter = $rooms->count();
        return view('room', [
            'rooms' => $rooms,
            'counter' => $counter,
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        return view('booknow', [
            'rooms' => $rooms,
        ]); 
    }
    public function complete()
    {
        return view('completebooking');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = Room::where('id', $request->type)->first();
        $rooms = Room::all();
        $roomprice = $room->price;
        $roomfeature_image = $room->feature_image;
        $roomtype = $room->name;
        $data = $request->all();
        //dd($data,$roomprice);
        return view('completebooking', [
            'data' => $data,
            'roomprice' => $roomprice,
            'roomfeature_image' => $roomfeature_image,
            'roomtype' => $roomtype,
            'rooms' => $rooms,
        ]); 
    }

    public function save(Request $request)
    {
        $bookings = Booking::create([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'type'=>$request->type,
                'arrival_date'=>$request->arrival_date,
                'departure_date'=>$request->departure_date,
                'adult_no'=>$request->adult_no,
                // 'no_of_night'=>$request->no_of_night,
                'children_no'=>$request->children_no,
                'comments'=>$request->comments,
        ]);
        //dd('success');
        return redirect('completed')->with('message', 'Booking Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
