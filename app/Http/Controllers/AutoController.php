<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function cars()
    {
       $cars = Car::orderBy('created_at', 'desc')->paginate(15);
        return view("autos", compact("cars"));
    }
    public function show($id) {
        $car = Car::find($id);
        return view("auto",compact("car"));

    }
}
