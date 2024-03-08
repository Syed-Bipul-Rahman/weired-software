<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;

class PlantsController extends Controller
{


    //index funtion
    public function index()
    {


        $plants = Plants::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Plants retrieved successfully',
            'data' => $plants
        ]);
    }
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image_url' => 'required|url',
            'history' => 'required|string',
            'description' => 'required|string',
        ]);

        // Create a new animal record
        $plants = Plants::create($validatedData);

        // Return a JSON response
        return response()->json([
            'status' => 'success',
            'message' => 'Plants created successfully',
            'data' => $plants
        ], 201); // 201 Created status code
    }
}
