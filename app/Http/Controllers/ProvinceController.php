<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        return response()->json(['status' => 'success', 'data' => Province::all()], 200);
    }
}
