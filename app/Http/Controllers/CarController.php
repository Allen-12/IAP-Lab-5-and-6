<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create()
    {
        return view('car.create');
    }
    public function index()
    {
        $cars = Car::all();
        return view('car.index',compact('cars'));
    }

    public function show(Car $car)
    {
        return view('car.show',compact('car'));
    }

    public function store()
    {
        $data = \request()->validate([
            'make' => 'required',
            'model' => 'required',
            'produced_on' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        $newCar = Car::create($data);
        $newCar->update([
            'image_path' => \request()->image_path->store('images','public'),
        ]);
        \request()->session()->flash('form_status', "Car saved successfully");
        return redirect('/cars/create');
    }
}
