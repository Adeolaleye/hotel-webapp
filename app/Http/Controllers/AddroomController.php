<?php

namespace App\Http\Controllers;
use App\Room;
use Intervention\Image\Facades\Image as Image;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddroomController extends Controller
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
        return view('admin.index', [
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
        return view('admin.create');
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
                'price' => 'required|min:0',
                'type' => 'required|int',
                'feature_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
                'other_images' => 'image|mimes:jpeg,png,jpg,gif,svg',
                'description' => 'min:0',
                'facilitites' => 'min:0',
                'unit' => 'min:0',
            ]);
            $mainImage = time() . '-' .$request['feature_image']->getClientOriginalName();
            $image = Image::make($request['feature_image']);
            $image->save('roomimages/'.$mainImage);
            $otherImage = time() . '-' .$request['other_images']->getClientOriginalName();
            $image2 = Image::make($request['other_images']);
            $image2 ->save('roomimages/'.$otherImage);

            $rooms = Room::create([
                'name'=>$request->name,
            'price'=>$request->price,
            'type'=>$request->type,
            'feature_image' => isset($mainImage) ? 'roomimages/'.$mainImage: NULL,
            'other_images' => isset($otherImage) ? 'roomimages/'.$otherImage: NULL,
            'description'=>$request->description,
            'facilities'=>$request->facilities,
            'unit'=>$request->unit,
            ]);
           // return redirect(route('addclient'))->with('message', 'Client Added Successfully');
            return back()->with('message', 'Room Added Successfully');
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
        $room = Room::where('id', $id)->first();
        return view('admin.edit',compact('room'));
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
        
        $request->validate([
            'name' => 'required|min:0',
            'price' => 'required|min:0',
            'type' => 'required|int',
            'feature_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'other_images' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'min:0',
            'facilitites' => 'min:0',
            'unit' => 'min:0',
        ]);
      
        $room= room::find($id);
        if(request()->has('feature_image')){
            //delete old one
            if(isset($room->feature_imagee)){
                unlink(public_path($room->feature_image));
            }
            //save new image
            $mainImage = time() . '-' .$request['feature_image']->getClientOriginalName();
            $image = Image::make($request['feature_image']);
            $image->save('roomimages/'.$mainImage);
        $room->feature_image = 'roomimages/'.$mainImage;
        }  
        if(request()->has('other_images')){
            //delete old one
            if(isset($room->feature_imagee)){
                unlink(public_path($room->feature_image));
            }
            //save new image 
            $otherImage = time() . '-' .$request['other_images']->getClientOriginalName();
            $image2 = Image::make($request['other_images']);
            $image2 ->save('roomimages/'.$otherImage);
            $room->otherimage = 'roomimages/'.$mainImage;
        } 
        $room->name = $request->name;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->description = $request->description;
        $room->facilities = $request->facilities;
        $room->unit = $request->unit;
        $room->save();
        
        return back()->with('message', 'Room Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::whereId($id)->first();
        $room->delete();
        return back();
    }
}
