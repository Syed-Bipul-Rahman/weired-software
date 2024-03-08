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
        $animal = Animals::create($validatedData);

        // Return a JSON response
        return response()->json([
            'status' => 'success',
            'message' => 'Animal created successfully',
            'data' => $animal
        ], 201); // 201 Created status code
    }
}
