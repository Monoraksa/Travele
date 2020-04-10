<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
Use File;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place = Place::all();
        return view('admin.place')->with('places', $place);
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
        // validate data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required',
            'price' => 'required',
            'image' => 'required|image'
        ]);
        // store data to database
        $images = $request->file('image');
        $imageName = $images->getClientOriginalName();
        $imageNameUnique = $imageName.'_'.time();
        $images->move('images', $imageNameUnique);
        Place::create([
            'place_name' => $request->name,
            'duration' => $request->duration,
            'price' => $request->price,
            'image' => $imageNameUnique
        ]);

        return redirect()->route('place.index');
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
        $place = Place::find($id);
        return view('admin.edit_place')->with('place', $place);
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
        $place = Place::find($id);
        $place->delete();
        return redirect()->route('place.index');
    }
}
