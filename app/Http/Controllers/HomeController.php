<?php

namespace App\Http\Controllers;
use App\Room;
use App\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('home', [
            'rooms' => $rooms
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:0',
            'phone' => 'required|min:0',
            'price' => 'required|min:0',
            'type' => 'required|int',
            'arrival_date' => 'required|min:0',
            'departure_date' => 'required|min:0',
            'no_of_night' => 'required|min:0',
            'children_no' => 'required|min:0',
            'comments' => 'required|min:0',
        ]);
        $bookings = Booking::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'price'=>$request->price,
        'type'=>$request->type,
        'arrival_date'=>$request->arrival_date,
        'departure_date'=>$request->departure_date,
        'no_of_night'=>$request->no_of_night,
        'children_no'=>$request->children_no,
        'comments'=>$request->comments,
        ]);
       // return redirect(route('addclient'))->with('message', 'Client Added Successfully');
        return back()->with('message', 'Successfully');
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
