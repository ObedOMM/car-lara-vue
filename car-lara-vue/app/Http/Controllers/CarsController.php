<?php

namespace App\Http\Controllers;

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
}
