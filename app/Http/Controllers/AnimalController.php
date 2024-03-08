<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //
    //index funtion
    public function index(){


        $animals = Animals::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Animals retrieved successfully',
            'data' => $animals
        ]);
    }
}
