<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        return view("admin.dashboard");
    }
    public function create()
    {
        return view("admin.createCar");
    }
    public function edit($id){
        $car = Car::find($id);
        return view("admin.editCar",compact("car"));;
    }
    public function update(Request $request , $id){
         $validated = $request->validate([
            'title' => 'string|max:255',
            'mark' => 'string|max:255',
            'price' => 'integer|min:0',
            'km' => 'integer|min:0',
            'fuel' => 'in:diesel,benzine,electric,hybrid',
        ]);
        $car = Car::find($id);
        $car->update($request->all());
         return redirect()->route('admin.cars')->with('success', 'Car edited successfully!');

    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'mark' => 'required|string|max:255',
            'year' => 'required',
            'apk' => "required",
            'price' => 'required|integer|min:0',
            'km' => 'required|integer|min:0',
            'fuel' => 'required|in:diesel,benzine,electric,hybrid',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageUrls = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $imageUrls[] = $path;
            }
        }

        $car = Car::create([
            'title' => $validated['title'],
            'mark' => $validated['mark'],
            'year' => $validated['year'],
            'apk' => $validated['apk'],
            'price' => $validated['price'],
            'km_riding' => $validated['km'],
            'fuel_type' => $validated['fuel'],
            'image_urls' => $imageUrls,
        ]);


        return redirect()->route('admin.dashboard')->with('success', 'Car added successfully!');
    }
    public function showCars()
    {
        $cars = car::all();
        return view("admin.cars", compact('cars'));
    }
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('admin.cars')->with('success', 'Car Deleted successfully!');
    }
}
