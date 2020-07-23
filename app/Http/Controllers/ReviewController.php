<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Car $car)
    {
        $car->load('reviews');
//        dd($car);
        return view('review.index',compact('car'));
    }

    public function create(Car $car)
    {
        return view('review.create',compact('car'));
    }

    public function store(Car $car)
    {
        $data = \request()->validate([
            'review_text' => 'required'
        ]);
        $car->reviews()->create($data);
        \request()->session()->flash('review_status', "Review saved successfully");
        return redirect('/cars/'.$car->id.'/reviews/create');
    }
}
