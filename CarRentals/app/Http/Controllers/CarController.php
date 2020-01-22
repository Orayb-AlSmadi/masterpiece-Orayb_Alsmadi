<?php

namespace App\Http\Controllers;

use App\Car;
use App\Image;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('Image')->get();
//        return ($cars);
        return view('car', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = Car::create([
            'brand'=> $request['brand'],
            'price'=>$request['price'],
            'year'=> $request['year'],
            'mileage'=> $request['mileage'],
            'seats' => $request['seats'],
            'luggage'=> $request['luggage'],
            'description'=> $request['description'],
        ]);

        $img_path = $request->file('image')->store('uploads', 'public');

        Image::create([
           'car_id' => $car['id'],
           'link' => $img_path,
        ]);

        return redirect()->back()->with('status', 'successfully added!');
    }

    /**
     * filter cars
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
//        return $request;
        if ($request->brand == null){
            $cars = Car::with('Image')->where('price', '<=', $request->price)->where('mileage', '<=', $request->mileage)->where('seats', '>=', $request->seats)->where('transmission', $request->transmission)->get();
        }
        else {
            $cars = Car::with('Image')->where('brand', $request->brand)->where('price', '<=', $request->price)->where('mileage', '<=', $request->mileage)->where('seats', '>=', $request->seats)->where('transmission', $request->transmission)->get();
        }

        if (count($cars)< 1)
            return redirect()->back()->with('error', 'No cars matches your specifications!');
        else
            return view('car', compact('cars'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $car['img'] =  $car->image()->first('link');
        return view('carDetails', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
