<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index($provId)
    {
        return response()->json(['status' => 'success', 'data' => City::where('prov_id', $provId)->get()], 200);
    }
}
