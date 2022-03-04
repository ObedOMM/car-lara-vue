<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function storeCar(Request $request) {
        $car = new Cars();
        $car->make = $request->make;
        $car->model = $request->model;
        $car->save();

        return $car;
    }


    public function getCars(Request $request) {
        $cars = Cars::all();

        return $cars;
    }
}
